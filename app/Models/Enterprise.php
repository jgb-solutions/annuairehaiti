<?php

namespace App\Models;

use AH;

class Enterprise extends Model
{
	protected $fillable = [
		'name',
		'slug',
		'user_id',
		'telephone',
		'fax',
		'email',
		'website',
		'address',
		'category_id',
		'department_id',
		'city_id',
		'town_id',
		'details',
		'logo',
		'header_image',
		'facebook',
		'twitter',
		'google',
		'map'
	];

	protected $appends = [
		'categoryUrl',
		'departmentUrl',
		'cityUrl',
		'townUrl',
		'url'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function department()
	{
		return $this->belongsTo(Department::class);
	}

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function town()
	{
		return $this->belongsTo(Town::class);
	}

	public function scopeRelated($query, $obj, $nb_rows = 6)
	{
		$query
			->whereCategoryId($obj->category_id)
			->where('id', '!=', $obj->id)
			->orderByRaw('RAND()') // get random rows from the DB
			->take($nb_rows);
	}

	public function scopeSearch($query, $term)
	{
		$query->where('name', 'like', "%$term%")
			->orWhere('details', 'like', "%$term%");
	}

	public function getCategoryUrlAttribute()
	{
		return AH::route('category.show', $this->category->slug);
	}

	public function getDepartmentUrlAttribute()
	{
		return AH::route('department.show', $this->department->slug);
	}

	public function getCityUrlAttribute()
	{
		return AH::route('city.show', $this->city->slug);
	}

	public function getTownUrlAttribute()
	{
		return AH::route('town.show', $this->town->slug);
	}

	public function getUrlAttribute()
	{
		return AH::route('enterprise.show', [$this->slug, $this->id]);
	}
	public function getEditUrlAttribute()
	{
		return AH::route('enterprise.edit', $this->id);
	}

	public function getDeleteUrlAttribute()
	{
		return AH::route('enterprise.delete',$this->id);
	}

	public function getLogoUrlAttribute()
	{
		return AH::asset("storage/$this->logo");
	}

	public function getHeaderImageUrlAttribute()
	{
		return AH::asset("storage/$this->header_image");
	}

	public function scopeFeatured($query)
	{
		$query->where('featured', 1);
	}
}
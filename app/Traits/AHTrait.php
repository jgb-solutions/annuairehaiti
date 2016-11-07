<?php

namespace App\Traits;

use AH;
use App\Models\Enterprise;

trait AHTrait
{
	public function enterprises()
	{
		return $this->hasMany(Enterprise::class);
	}

	public function scopeBy($query, $column, $by = 'asc')
	{
		$query->orderBy($column, $by);
	}

	public function setSlugAttribute($name)
	{
		$this->attributes['slug'] = str_slug($name);
	}

	public function getRouteKeyName()
	{
	    return 'slug';
	}

	public function getUrlAttribute()
	{
		return AH::route("{$this->taxonomy}.show", $this->slug);
	}

	public function paginatedEnterprises($perPage = 15)
	{
		return $this->enterprises()->paginate($perPage);
	}
}
<?php

namespace App\Models;

use App\Traits\AHTrait;

class Category extends Model
{
	use AHTrait;

	protected $taxonomy = 'category';

	public $timestamps = false;

	protected $fillable = [
		'name',
		'slug'
	];
}
<?php

namespace App\Models;

use App\Traits\AHTrait;

class City extends Model
{
	use AHTrait;

	protected $taxonomy = 'city';

	public $timestamps = false;

	protected $fillable = [
		'name',
		'slug'
	];
}
<?php

namespace App\Models;

use App\Traits\AHTrait;

class Department extends Model
{
	use AHTrait;

	protected $taxonomy = 'department';

	public $timestamps = false;

	protected $fillable = [
		'name',
		'slug'
	];
}
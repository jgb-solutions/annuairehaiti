<?php

namespace App\Models;

use App\Traits\AHTrait;

class Town extends Model
{
	use AHTrait;

	protected $taxonomy = 'town';

	public $timestamps = false;

	protected $fillable = [
		'name',
		'slug'
	];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'name',
		'explanation',
		'price',
		'stock',
		'created_at',
		'updated_at',
		'deleted_at'
	];
}

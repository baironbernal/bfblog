<?php

namespace App\Helpers;

use App\Models\Category;

class GlobalApp
{

	public static function getCategories()
	{
		$categories = Category::all();
		
		return $categories;
	}
	public static function getColorsTags() 
	{
		$colors = [
			'badge badge-primary',
			'badge badge-secondary',
			'badge badge-success',
			'badge badge-danger',
			'badge badge-warning',
			'badge badge-info',
			'badge badge-light',
			'badge badge-dark'
		];

		return $colors;
	}
}
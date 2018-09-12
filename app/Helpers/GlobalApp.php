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
}
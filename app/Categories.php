<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	function __construct()
	{
		$this->table = "categories";
	}
}
<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\MainCategory\MainCategoryInterface;

class CategoryController extends Controller
{	
	protected $category;

    public function __construct(MainCategoryInterface $category){

    	$this->category = $category
    }
    public function products(){


    }
}

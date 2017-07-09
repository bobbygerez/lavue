<?php

namespace App\Http\Controllers\MainCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\MainCategory\MainCategoryInterface;

class MainCategoryController extends Controller
{
    protected $mainCategory;

    public function __construct(MainCategoryInterface $category){

    	$this->mainCategory = $mainCategory
    }
    public function index(){

    	return json()->json([

    			'maincategories' => $this->mainCategory->all()
    			
    		])

    }
}

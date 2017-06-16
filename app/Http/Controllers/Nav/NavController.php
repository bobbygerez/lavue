<?php

namespace App\Http\Controllers\Nav;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\MainCategory\MainCategoryInterface;
use App\Repo\MerchantCategory\MerchantCategoryInterface;
use App\Repo\MerchantSubcategory\MerchantSubcategoryInterface;
use App\Repo\Product\ProductInterface;

class NavController extends Controller
{
   
   	protected $mainCategory;
    protected $merchantCategory;
    protected $merchantSubcategory;

	public function __construct(MainCategoryInterface $mainCategory, MerchantCategoryInterface $merchantCategory, MerchantSubcategoryInterface $merchantSubcategory, ProductInterface $product){
        
		$this->mainCategory = $mainCategory;
        $this->merchantCategory = $merchantCategory;
        $this->merchantSubcategory = $merchantSubcategory;
        $this->product = $product;
	}

	 public function mainCategories(){

    	$mainCategories = $this->mainCategory->with(['merchantCategory.merchantSubcategory'])->get();

    	return response()->json([

    			'maincategories' => $mainCategories
    		]);

    }

    public function home(){
        
        return view('templates.template3.index');
    }
}

<?php

namespace App\Http\Controllers\Nav;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\MainCategory\MainCategoryInterface;
use App\Repo\MerchantCategory\MerchantCategoryInterface;
use App\Repo\MerchantSubcategory\MerchantSubcategoryInterface;
use App\Repo\Product\ProductInterface;
use Obfuscate;
use Auth;

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

    	return response()->json([

    			'maincategories' => $this->mainCategory->all()
    		]);

    }

    public function home(){
        
        return view('templates.template3.index');
    }

    public function getUser(){

        if( Auth::check() ){

            return response()->json([

            'message' => 'You have successfully Log-in!',
            'user' => ['name' => Auth::User()->name, 'id' => Obfuscate::encode(Auth::User()->id)],
            'error' => false

            ]);
        }

        return response()->json([
                'error' => true
            ]);
        
    }
}

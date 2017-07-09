<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\MerchantCategory\MerchantCategoryInterface;
use Cookie;

class MerchantCategoryController extends Controller
{
   
    protected $merchantCategory;

    public function __construct(MerchantCategoryInterface $merchantCategory){

    	$this->merchantCategory = $merchantCategory;
    }

    public function index(){

    	$request = app()->make('request');

        Cookie::queue('mainCategoryCookie', $request->maincategory_id, 5000);

    	return response()->json([

    			'merchantCategories' => $this->merchantCategory
    									->whereNoDecode('maincategory_id', $request->maincategory_id)
    									->get(),
    			'mainCategoryCookie' => request()->cookie('mainCategoryCookie')
    		]);
    }
}

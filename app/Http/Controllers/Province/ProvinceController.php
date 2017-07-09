<?php

namespace App\Http\Controllers\Province;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Province\ProvinceInterface;

class ProvinceController extends Controller
{
    
    protected $province;

    public function __construct(ProvinceInterface $province){

    	$this->province = $province;
    }

    public function index(){

    	return response()->json([

    			'provinces' => $this->province->all()
    		]);
    }
}

<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Product\ProductInterface;
use App\Repo\MainCategory\MainCategoryInterface;
use App\Repo\Province\ProvinceInterface;
use App\Repo\User\UserInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Obfuscate;

class ApiProductController extends Controller
{
    protected $product;
    protected $mainCategory;
    protected $province;

    public function __construct(ProductInterface $product, MainCategoryInterface $mainCategory, ProvinceInterface $province, UserInterface $user){

        $this->province = $province;
    	$this->product = $product;
        $this->mainCategory = $mainCategory;
        $this->user = $user;
    }

    public function getData(){

        $request =  app()->make('request');

        $products = [];
        if($request->provCode != ''){

            $products = $this->provinceProducts($request->provCode);

            if($request->citymunCode != ''){

                $products = $this->cityProducts($request->citymunCode);
            }
        }

        else{

            $products = $this->allProvinceProducts();
        }
       

        $provinces = $this->province->orderBy('provDesc', 'asc')->get();

        $products = collect($products);
        
        $paginate = new LengthAwarePaginator($products->forPage($request->page, $request->per_page), $products->count(), $request->per_page, $request->page );

        return response()->json([

                'products' => $paginate,
                'provinces' => $provinces

            ]);
    }


    public function allProvinceProducts(){

        $users = $this->user->orderBy('created_at', 'asc')
            ->with(['products.prices', 'products.photos'])->get();

        $products = $this->userProducts($users);

        return collect($products)->chunk(3)->toArray();
    }

    public function provinceProducts( $provCode ){


         $users = $this->user->whereNoDecode('provCode', $provCode)
                ->with(['products.prices', 'products.photos'])->get();
                
         $products = $this->userProducts($users);       

        return collect($products)->chunk(3)->toArray();
    }

    public function cityProducts($citymunCode){

        $users = $this->user->whereNoDecode('citymunCode', $citymunCode)
        ->with(['products.prices', 'products.photos'])->get();

        $products = $this->userProducts($users);

        return collect($products)->chunk(3)->toArray();
    }

    public function userProducts($users){

        $products = [];

        foreach ($users as $user) {
                    
            foreach ($user->products as $uProduct) {
                
                $products[] = [

                    'product' => $uProduct,
                    'userId' => Obfuscate::encode($user->id),
                    'userName' => $user->firstname . ' ' . $user->lastname

                ];
            }
            
        }

        return $products;
    }


    

    
}

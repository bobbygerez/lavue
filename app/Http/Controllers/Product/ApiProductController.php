<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repo\Product\ProductInterface;
use App\Repo\MainCategory\MainCategoryInterface;
use App\Repo\Province\ProvinceInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Obfuscate;

class ApiProductController extends Controller
{
    protected $product;
    protected $mainCategory;
    protected $province;

    public function __construct(ProductInterface $product, MainCategoryInterface $mainCategory, ProvinceInterface $province){

        $this->province = $province;
    	$this->product = $product;
        $this->mainCategory = $mainCategory;
    }

    public function getData(){

        $request =  app()->make('request');
        $products = $this->product->orderBy($request->fieldName, $request->sortBy)->with(['prices', 'photos'])->get()->chunk(3)->toArray();

        $products = collect($products);
        
        $paginate = new LengthAwarePaginator($products->forPage($request->page, $request->per_page), $products->count(), $request->per_page, $request->page );
        return response()->json([

                'products' => $paginate

            ]);
    }


    public function backUp(){

          $maincategories = $this->mainCategory->where('id', $request->input('mainCategoryId'))->with(['merchantCategory.merchantSubcategory.products.photos', 'merchantCategory.merchantSubcategory.products.prices'])->first();
            $collection = [];
            $price;
            $photo;

            foreach ($maincategories->merchantCategory as $merchantCat) {
               
               foreach ($merchantCat->merchantSubcategory as $merchantSub) {
                   
                   foreach($merchantSub->products as $product){


                        foreach ($product->prices as $price) {
                           
                           if( $price->is_primary){

                                $price = $price->price;
                           }
                          
                        }

                        foreach ($product->photos as $photo) {
                            if( $photo->is_primary){

                                $photo = $photo->path;
                            }
                        }

                        $collection[] = [

                            'id' => Obfuscate::encode($product->id),
                            'name' => $product->name,
                            'desc' => $product->desc,
                            'price' => $price,
                            'photo' => $photo

                        ];

                   }
               }
            }


            $collection = collect($collection);
            
            if($request->price_where){

            }

            if($request->sortBy === 'asc'){

                $collection = $collection->sortBy('price');
            }
            else{

                $collection = $collection->sortByDesc('price');
            }

            $collection  = $collection->values()->all();

            $collection = collect($collection);

            $collection = $collection->map(function( $item ){

                return [
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'desc' => $item['desc'],
                    'price' => number_format($item['price'], '2', '.', ','),
                    'photo' => $item['photo']
                ];
            });

            $paginate = new LengthAwarePaginator($collection->forPage($request->page, $request->per_page), $collection->count(), $request->per_page, $request->page, ['path'=>url('api/products')]);
    }

    
}

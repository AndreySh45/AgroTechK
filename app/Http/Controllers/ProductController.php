<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shop()
    {
        $products= Product::orderBy('id')->paginate(12);

        // foreach ($products as $product){
        //     echo '<pre>';
        //         echo (resource_path());
        //         var_dump($product->getImage());
        //     echo '</pre>';
        // }

        return view('front.shop', compact('products'));
    }

    public function showCategory($cat_alias){
        $cats = Category::where('slug', $cat_alias)->firstOrFail();
        $paginate = 12;
        $products = Product::where('category_id',$cats->id)->paginate($paginate)->withQueryString();

        return view('front.categories', compact('cats', 'products'));
    }

    public function oneProduct($id){
        $product = Product::where('id', $id)->firstOrFail();

        /* $product_images = $product->images()->pluck('img')->all();
        foreach ($product_images as $key => $image) {
            if ($key > 0){
                $images[$key] = 'resources/images/'. $image;
            }
        } */

        return response()->json($product);
    }

    public function showProduct($id){
        $product = Product::where('id', $id)->firstOrFail();

        $product_images = $product->images()->pluck('img')->all();
        foreach ($product_images as $key => $image) {
            if ($key > 0){
                $images[$key] = '/assets/images/'. $image;
            }
        }

        return view('front.product', compact('product', 'images'));
    }

    public function getMoreProducts(Request $request){
        $query = $request->search_query;
        if($request->ajax()) {
            $products = Product::getProducts($query);

            return view('front.product_data', compact('products'))->render();
        }
    }
}

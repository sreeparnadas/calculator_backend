<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(){
        return Product::all();
    }

    public function addProduct(Request $req){
        $product = new Product;
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->description = $req->input('description');
        $product->file_path = $req->file('file')->store('products');
        $product->save();
        return $product;

    }

    public function delete($id){
        $result = Product::where('id',$id)->delete();
        if($result){
            return ['message'=>'Product has been deleted'];
        }else{
            return ['message'=>'Something went wrong'];
        }
    }

    public function getSingleProduct($id){
        return Product::find($id);
    }
    
}

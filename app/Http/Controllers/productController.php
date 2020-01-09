<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

use App\Http\Requests;

class productController extends Controller
{
    //


    public function addProduct(REQUEST $request)
    {    $viewName="";
        if($product = Product:: where('name','=',$request->name)->first() == null){
         $product = new Product;
         $product->name=(string)$request->name;
         $product->description=(string)$request->description;
         $product->price=(int)$request->price;
         $product->expDate=$request->expDate;
         $product->image="no image";
         $product->state=1;
         $product->available=1;
         $product->save();
         $viewName="users.mainAdminPage";
        }
        else{
            $viewName="users.errorAddProduct";
        }
         return view($viewName);

    }
    
    public function deleteProduct(REQUEST $request)
    {
   
        DB:: table('products')->where('name','=',$request->name)->delete();
            return view('users.mainAdminPage');
    }
    public function updateProduct(REQUEST $request)
    {
        DB:: table('products')->where('name','=',$request->name)->delete();
        $product = new Product;
        $product->name=(string)$request->name;
        $product->description=(string)$request->description;
        $product->price=(int)$request->price;
        $product->expDate=$request->expDate;
        $product->image="no image";
        $product->state=1;
        $product->available=1;
        $product->save();
        return view('users.mainAdminPage');

    }
}
     /*   DB :: table('products')->where('name','=',$request->name)
        ->update(['name'=>$request->name],['expDate'=>$request->expDate]
                ,['price'=>$request->price],['description '=>$request->description]);
                return view('users.mainAdminPage');*/
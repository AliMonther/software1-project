<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use  App\Http\Controllers\Controller;
class searchController extends Controller
{
    //
    public function search(REQUEST $request)
    {
        $searchResult = Product ::where('name','=',$request->searchField)->first();
        $arr = Array('name'=>$searchResult->name,
                     'price'=>$searchResult->price,
                     'description'=>$searchResult->description,
                     'expDate'=>$searchResult->expDate);
        return view('users.searchResult',$arr);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $products = Product::where('name', 'like', '%' . $request->search . '%')->get();

        $products = Product::query();

        $products->when($request->search, function ($query, $vl) {
            $query->where('name', 'like', '%' . $vl . '%');
                    // ->orWhere('price', 'like', '%' . $vl . '%');
                    // ->orWhere('description', 'like', '%' . $vl . '%');
            // dd($vl);
        });

        //if($request->search) { 
        //    $products->where();
        //}

        // $products->where();
        // $products->where();
        // $products->where();

        $products = $products->get();

        //dd($request->search);
        return view('home', [
            'products' => $products
        ]);
    }
}

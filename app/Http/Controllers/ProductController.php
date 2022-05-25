<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller

{



    public function index()

    {


        $viewData = [];

        $viewData["title"] = "Products - Online Store";

        $viewData["subtitle"] = "List of products";

        $viewData["products"] = Product::all();

        return view('product.index')->with("viewData", $viewData);
    }


    public function show($id)

    {

        $viewData = [];

        $product =  Product::findOrFail($id);

        $viewData["title"] = $product["title"] . " - Online Store";

        $viewData["subtitle"] = $product["title"] . " - Product information";

        $viewData["product"] = $product;

        return view('product.show')->with("viewData", $viewData);
    }

    public function create()

    {

        $viewData = []; //to be sent to the view

        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData", $viewData);
    }

    public function save(Request $request)

    {

        $request->validate([

            "title" => "required",

            "price" => "required",

            "description" => "required",

            "quantity" => "required"

        ]);

        Product::create($request->only(["title", "price", "description", "quantity"]));



        return back();
    }

    public function search()
    {
        {

        
            $viewData = [];

            $viewData["title"] = "Products - Online Store";
    
            $viewData["subtitle"] = "List of products";
    
            $viewData["products"] = Product::all();
    
            return view('product.index')->with("viewData", $viewData);
        }
        
    }
}

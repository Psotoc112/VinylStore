<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller

{



public function index()

{

$viewData = [];

$viewData["title"] = "Users";

$viewData["subtitle"] = "List of users";

$viewData["products"] = User::all();

return view('product.index')->with("viewData", $viewData);

}

public function register()

{

$viewData = []; //to be sent to the view

$viewData["title"] = "Registrar usuario";

return view('user.register')->with("viewData",$viewData);

}


}
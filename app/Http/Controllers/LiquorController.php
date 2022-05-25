<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LiquorController extends Controller
{
    public function index()
    {
        $liquorData = Http::get('http://34.135.153.245/api/liquors');
        $jsonBody = $liquorData->json();
        $validResponse = false;
        if ($jsonBody == null) {
            $data["title"] = __('liquor.title');
            $data['validResponse'] = $validResponse;
            return view('liquor.index')->with('data', $data);
        }
        $decodedData = $jsonBody['data'];
        $numberOfResults = sizeof($decodedData);
        $liquorNames = [];
        $stocks = [];
        $prices = [];
        $brands = [];

        for ($i = 0; $i < $numberOfResults; $i ++) {
            $liquorNames[$i] = $decodedData[$i]["name"];
            $stocks[$i] = $decodedData[$i]["stock"];
            $prices[$i] = $decodedData[$i]["price"];
            $brands[$i] = $decodedData[$i]["brand"];
        }
        if ($numberOfResults > 0) {
            $validResponse = true;
        } else {
            $validResponse = false;
        }
        $data["liquorNames"] = $liquorNames;
        $data["stocks"] = $stocks;
        $data["prices"] = $prices;
        $data["brands"] = $brands;
        $data["numberOfResults"] = $numberOfResults;
        $data["title"] = __('liquor.title');
        $data["validResponse"] = $validResponse;
        return view('liquor.index')->with("data", $data);
    }
}
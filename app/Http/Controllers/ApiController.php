<?php

namespace App\Http\Controllers;

use App\Http\Resources\CurrencyResource;
use App\Models\Currency;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $currency = CurrencyResource::collection(Currency::all());
        return $currency;
    }

    public function get_currency(Request $request)
    {
        $url = "http://sovcom.loc/api/currency";

        $json = json_decode(file_get_contents($url), true);

        dd($json);
//        $url = '';
//
//        $currency = new Currency();
//        $currency = $request->all();
//        $currency->save();
//
//        return 'ok';
    }
}

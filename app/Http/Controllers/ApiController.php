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
    }

    public function insert_currency(Request $request)
    {
        $currency = Currency::updateOrCreate(
            ['currency' => $request->currency],
            [
                'currency' => $request->currency,
                'bay' => $request->bay,
                'sell' => $request->sell,
                'begin_at' => $request->begin_at,
                'office_id' => $request->office_id,
            ]
        );

        return response()->json(['message' => 'Ok'], 200);
    }
}

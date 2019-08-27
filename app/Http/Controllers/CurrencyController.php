<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function convert(Request $request)
    {
        // TODO handle request and convert
        return $request->amount;
    }
}

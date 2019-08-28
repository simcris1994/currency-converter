<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \BenMajor\ExchangeRatesAPI\ExchangeRatesAPI;

class CurrencyController extends Controller
{
    public function index()
    {
        $lookup = new ExchangeRatesAPI();
        $currencies = $lookup->getSupportedCurrencies();

        return view('index', ['currencies' => $currencies]);
    }

    public function convert(Request $request)
    {
        return $this->convertCurrency($request->amount, $request->from, $request->to);
    }

    function convertCurrency($amount, $from_currency, $to_currency)
    {
        $lookup = new ExchangeRatesAPI();
        $lookup->setBaseCurrency($from_currency);
        return $lookup->convert($to_currency, $amount, 2);
    }
}

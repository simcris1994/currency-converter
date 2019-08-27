<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CurrencyController extends Controller
{
    public $apikey = '877177a629b83ce95b98';
    public $urlBase = "https://free.currconv.com/api/v7";

    public function index()
    {
        try {
            $json = file_get_contents($this->urlBase . "/currencies?apiKey={$this->apikey}");
            $obj = json_decode($json, true);
            $currencies = $obj["results"];

            return view('index', ['currencies' => $currencies]);
        } catch (\Exception $ex) {
            return view('index', ['currencies' => []]);
        }
    }

    public function convert(Request $request)
    {
        return $this->convertCurrency($request->amount, $request->from, $request->to);
    }

    function convertCurrency($amount,$from_currency,$to_currency)
    {
        $from_Currency = urlencode($from_currency);
        $to_Currency = urlencode($to_currency);
        $query =  "{$from_Currency}_{$to_Currency}";

        $json = file_get_contents($this->urlBase . "/convert?q={$query}&compact=ultra&apiKey={$this->apikey}");
        $obj = json_decode($json, true);

        $val = floatval($obj["$query"]);


        $total = $val * $amount;
        return number_format($total, 2, '.', '');
    }
}

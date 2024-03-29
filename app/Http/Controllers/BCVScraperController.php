<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;


class BCVScraperController extends Controller
{
    public function getRate()
    {
        
        $client = new Client(HttpClient::create(['verify_peer' => false, 'verify_host' => false]));
    
        $website = $client->request('GET', 'https://www.bcv.org.ve/');
    
        $dollarRate = $website->filter('#dolar');
        $valorDolar = $dollarRate->filter('.col-sm-6.col-xs-6.centrado strong')->text();
        
        $euroRate = $website->filter('#euro');
        $valorEuro = $euroRate->filter('.col-sm-6.col-xs-6.centrado strong')->text();

        $rates = [
            'usd' => $valorDolar,
            'eur' => $valorEuro
        ];

        return response()->json(
             $rates,
             200
        );
    }
}

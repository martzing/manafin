<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ManafinCallWebService extends Controller
{
    //
    public function callDataFromWebService(Request $req){

      print($req->input('property'));
      $property = (int)$req->input('property');
      print('<br>');
      print($req->input('property_price'));
      $propertyPrice = (float)$req->input('property_price');
      print('<br>');
      print($req->input('lend_percent'));
      $lendPercent = (int)$req->input('lend_percent');
      print('<br>');
      print($req->input('year'));
      $year = (int)$req->input('year');
      print('<br>');
      print($req->input('condition'));
      $condition = (int)$req->input('condition');
      print('<br>');

      //dd($req->all());

      $manafinClient = new Client(['base_uri' => 'https://manafin.punyapat.org',]);
      $returnData = $manafinClient->request('POST', 'service/promotions', ['form_params' => ['total_amount' => $propertyPrice,
                                                                                  'lend_amount'  => $lendPercent,
                                                                                  'year'         => $year,
                                                                                  'property'     => $property,
                                                                                  'career'       => 7,
                                                                                  'bank'         => 2,
                                                                                  'condition'    => $condition]]);
      //$returnData = $manafinClient->request('POST', 'data/reference');

      $data = json_decode($returnData->getBody());
      dd($data);
    }
}

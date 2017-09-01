<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ReferentData extends Controller
{
    //
    function callReferentData(){
    $resultData = $this->callAPI('GET', 'https://manafin.punyapat.org', 'data/reference');
    dd($resultData);

    }

    public function callAPI($method, $baesUrl, $uri, $data = null){

      $client = new Client(['base_uri' => $baesUrl]);
      $returnData = $client->request($method, $uri, ['form_params' => $data]);
      return json_decode($returnData->getBody());

    }
    function getAllPromotionData(){
    $resultData = $this->callAPI('GET', 'https://manafin.punyapat.org', 'service/promotions');
    dd($resultData);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ManafinCallWebService extends Controller
{
    //
    public function callDataFromWebService(Request $req){

      $userInformationIntList = array();
      $userInformationStringList = array();
      if(!empty($req->input('property'))){
        $userInformation['property'] = intval($req->input('property'));
      }
      if(!empty($req->input('property_price'))){
        $userInformation['total_amount'] = floatval($req->input('property_price'));
      }
      if(!empty($req->input('lend_percent'))){
        $userInformation['lend_amount'] = $this->calaulateLendAmount(intval($req->input('lend_percent')), floatval($req->input('property_price')));
      }
      if(!empty($req->input('year'))){
        $userInformation['year'] = intval($req->input('year'));
      }
      if(!empty($req->input('condition'))){
        $userInformation['condition'] = intval($req->input('condition'));
      }

      //print_r($userInformation);

      $resultData = $this->callAPI('POST', 'https://manafin.punyapat.org', 'service/promotions', $userInformation);


      return view('showdata')->with('resultData', $resultData);

    }

    public function callAPI($method, $baesUrl, $uri, $data = null){

      $client = new Client(['base_uri' => $baesUrl]);
      $returnData = $client->request($method, $uri, ['form_params' => $data]);
      return json_decode($returnData->getBody());

    }

    public function setPropertyString(int $propertyValue){
      if(propertyValue == 1){
        return 'บ้าน';
      }else if(propertyValue == 2){
        return 'คอนโด';
      }
    }

    public function calaulateLendAmount($percentValue, $propertyPrice){
      if($percentValue == 1){
        return ($propertyPrice*1);
      }elseif($percentValue == 2){
        return ($propertyPrice*0.9);
      }elseif($percentValue == 3){
        return ($propertyPrice*0.8);
      }elseif($percentValue == 4){
        return ($propertyPrice*0.7);
      }

    }

}

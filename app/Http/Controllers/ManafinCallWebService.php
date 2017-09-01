<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ManafinCallWebService extends Controller
{
    //
    public function callDataFromWebService(Request $req){

      $userInformation = array();
      $userInformationStringList = array();
      if(!empty($req->input('property'))){
        $userInformation['property'] = intval($req->input('property'));
        $userInformationStringList['property'] = $this->setPropertyString($req->input('property'));
      }
      if(!empty($req->input('property_price'))){
        $userInformation['total_amount'] = floatval($req->input('property_price'));
        $userInformationStringList['property_price'] = $req->input('property_price');
      }
      if(!empty($req->input('lend_percent'))){
        $userInformation['lend_amount'] = $this->calaulateLendAmount(intval($req->input('lend_percent')), floatval($req->input('property_price')));
        $userInformationStringList['lend_amount'] = $this->calaulateLendAmount(intval($req->input('lend_percent')), floatval($req->input('property_price')));
      }
      if(!empty($req->input('year'))){
        $userInformation['year'] = intval($req->input('year'));
        $userInformationStringList['year'] = $req->input('year');
      }
      if(!empty($req->input('condition'))){
        $userInformation['condition'] = intval($req->input('condition'));
        $userInformationStringList['condition'] = $this->setConditionString($req->input('condition'));
      }
      if(!empty($req->input('career'))){
        $userInformation['career'] = intval($req->input('career'));
        $userInformationStringList['career'] = $this->setCareerString($req->input('career'));
      }

      //print_r($userInformation);
      //print_r($userInformationStringList);

      $resultData = $this->callAPI('POST', 'https://manafin.punyapat.org', 'service/promotions', $userInformation);

      $allDataArray = array('userInformation' => $userInformationStringList, 'resultData' => $resultData);
      return view('showdata', compact('allDataArray'));

    }

    public function callAPI($method, $baesUrl, $uri, $data = null){

      $client = new Client(['base_uri' => $baesUrl]);
      $returnData = $client->request($method, $uri, ['form_params' => $data]);
      return json_decode($returnData->getBody());

    }

    public function setPropertyString($propertyValue){
      $propertyArray = array( '1' => 'บ้านเดี่ยว',
                              '2' => 'บ้านแฝด',
                              '3' => 'ทาวน์เฮ้าส์',
                              '4' => 'ทาวน์โฮม',
                              '5' => 'ห้องชุดพักอาศัย',
                              '6' => 'คอนโด',
                              '7' => 'อาคารพานิชย์',
                              '8' => 'โฮมออฟฟิศ',
                              '9' => 'บ้านมือสอง'
                             );
      return $propertyArray[$propertyValue];
    }

    public function setConditionString($conditionValue){
      $conditionArray = array( '1' => 'ทำประกัน MRTA', '2' => 'ไม่ทำประกัน MRTA');
      return $conditionArray[$conditionValue];
    }

    public function setCareerString($careerValue){
      $careerArray = array( '1' => 'แพทย์',
                              '2' => 'สัตวแพทย์',
                              '3' => 'ทันตแพทย์',
                              '4' => 'เภสัชกร',
                              '5' => 'ผู้พิพากษา',
                              '6' => 'นักบินพานิชย์',
                              '7' => 'ข้าราชการ',
                              '8' => 'รัฐวิสาหกิจ'
                             );
      return $careerArray[$careerValue];
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

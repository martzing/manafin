<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ManafinController extends Controller
{
    //
    public function index(){

    	return view('index');
    }

    public function showData(){

    	return view('showdata');
    }
    public function testChart(){

    	return view('testChart');
    }
}

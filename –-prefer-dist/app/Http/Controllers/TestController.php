<?php

namespace TestApp\Http\Controllers;

use Illuminate\Http\Request;

use TestApp\Http\Requests;
use TestApp\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
      echo "<br>Test Controller.";
   }
}
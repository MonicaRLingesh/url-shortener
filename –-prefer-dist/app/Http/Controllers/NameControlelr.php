<?php

namespace TestApp\Http\Controllers;

use Illuminate\Http\Request;

class NameControlelr extends Controller
{
    public function index()
	{
		return array(
		  1 => "John",
		  2 => "Mary",
		  3 => "Steven"
		);
	}
}

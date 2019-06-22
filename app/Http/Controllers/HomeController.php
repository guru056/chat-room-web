<?php

namespace App\Http\Controllers;
use Session;

class HomeController extends Controller {

	public function index(){
		return View('home');
	}

}
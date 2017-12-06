<?php

namespace ecommerce\Http\Controllers;

use Illuminate\Http\Request;

class FrontShopController extends Controller
{
    public function home()
    {
    	 return view('frontend.home');
    }
}

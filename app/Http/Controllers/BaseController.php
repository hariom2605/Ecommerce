<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
public function home() 
{

  return view('front.home');

}
public function specialoffer() 
{

  return view('front.specialoffer');

}
public function deliver() 
{

  return view('front.deliver');

}
public function contact() 
{

  return view('front.contact');

}

public function cart() 
{

  return view('front.cart');

}

public function productview() 
{

  return view('front.productview');

}


}

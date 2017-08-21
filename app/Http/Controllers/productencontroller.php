<?php

namespace App\Http\Controllers;
use App\producten;
use Illuminate\Http\Request;

class productencontroller extends Controller
{
  
function index(){
$producten = producten::getall();

return view('home',['producten'=>$producten]);
}

}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\producten;

class cartcontroller extends Controller
{
   public function addtocart(Request $request){
   	$productsku = $request->input('sku');
   	$sku = 5;
    $producten = producten::Getall();
    Session()->push('cartsku',$productsku);
    foreach ($producten as $product) {
    	if ($productsku == $product->sku) {

    	    $prijsgetal = $product->prijs;
    	  session()->push('cartprijs',$prijsgetal);
    	}
    }
    
    
    return redirect('/');


   }
   public function index(Request $request){
   	$skus = $request->session()->get('cartsku');
   	$prijs = $request->session()->get('cartprijs');




   	return redirect('/');
   }
}

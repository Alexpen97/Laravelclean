<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producten extends Model
{
protected $table = 'producten';   
static function Getall(){

$producten = producten::all();
return $producten;
}


}//

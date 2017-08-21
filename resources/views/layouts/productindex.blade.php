@section('productindex')
<?php foreach ($producten as $product) {
    ?><div style="border-style:solid;border-width:1px;border-color:black;width:100px;height:100px;margin:5px;"> <?php
    
   echo $product->titel;
   echo "</br>";
   echo $product->omsch;
   echo "</br>";
   echo $product->prijs;
   echo "</br>";

   echo Form::open(array('url'=>'/addtocart','method'=>'post'));
   echo Form::hidden('sku',$product->sku);
   echo Form::submit('in winkelwagen');
   echo Form::close();

   echo Form::open(array('url'=>'/product','method'=>'post'));
   echo Form::hidden('sku',$product->sku);
   echo Form::submit('bekijk product');
   echo Form::close();

   ?></div><?php 
   $data = session('cartprijs');
   $datas = session('cartsku');
     var_dump($data);
     echo"</br>";
     var_dump($datas);
} ?>
@show

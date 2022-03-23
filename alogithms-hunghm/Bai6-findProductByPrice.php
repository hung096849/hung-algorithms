<?php
 //cách làm tương tự bài 5
 function findProductByPrice($listProduct, $price) {
    $arrProduct=[];
    $count= count($listProduct);
    for ($i=0; $i < $count; $i++) { 
        if($listProduct[$i]['price']===$price){
           $arrProduct[]= $listProduct[$i];
        }
    }
  
   return $arrProduct;
}
   
 $listProduct= array(
     array('name'=>'CPU', 'price'=>750, 'quality'=>10, 'categoryId'=>1),
     array('name'=>'RAM', 'price'=>50, 'quality'=>2, 'categoryId'=>2),
     array('name'=>'HDD', 'price'=>70, 'quality'=>1, 'categoryId'=>2),
     array('name'=>'Main', 'price'=>400, 'quality'=>3, 'categoryId'=>1),
     array('name'=>'Keyboard', 'price'=>30, 'quality'=>8, 'categoryId'=>4),
     array('name'=>'Mouse', 'price'=>25, 'quality'=>10, 'categoryId'=>6),
 );
 echo "<pre>";
 print_r (findProductByPrice($listProduct,50)) ;
?>

<?php
function sortByPrice($listProduct){
    $count= count($listProduct);
    for ( $i = 0; $i < $count; $i++ ) {
        for ( $j = 0; $j < $count - 1; $j++ ) {
          $k =$j+1;
          if ( $listProduct[ $k ]['price'] < $listProduct[ $j ]['price'] ) {
           list($listProduct[$j],$listProduct[$k]) = array($listProduct[$k],$listProduct[$j]);
          } 
        } 
      } 
    return $listProduct;
}
$listProduct= array(
    array('name'=>'CPU', 'price'=>750, 'quality'=>10, 'categoryId'=>1),
    array('name'=>'RAM', 'price'=>50, 'quality'=>2, 'categoryId'=>2),
    array('name'=>'HDD', 'price'=>70, 'quality'=>1, 'categoryId'=>2),
    array('name'=>'Main', 'price'=>400, 'quality'=>3, 'categoryId'=>1),
    array('name'=>'Keyboard', 'price'=>30, 'quality'=>8, 'categoryId'=>4),
    array('name'=>'Mouse', 'price'=>500, 'quality'=>10, 'categoryId'=>6),
); 
echo '<pre>';
print_r( sortByPrice( $listProduct ));

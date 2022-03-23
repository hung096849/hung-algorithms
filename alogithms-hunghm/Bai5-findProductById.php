<?php
 
 function findProductByCategory($listProduct, $categoryId) {
     $arrProduct=[];//khai báo một mảng rỗng để add những giá trị giống nhau
     $count= count($listProduct);
     for ($i=0; $i < $count; $i++) { 
         if($listProduct[$i]['categoryId']===$categoryId){
            $arrProduct[]= $listProduct[$i];
         }
     }
     //đây là cách làm thứ 2
    // foreach ($listProduct as $key => $val) {
    //     if ($val['categoryId'] ==$categoryId) {
    //         $arrProduct[] = $val; 
    //     }
    // }
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
 print_r (findProductByCategory($listProduct,1)) ;
?>

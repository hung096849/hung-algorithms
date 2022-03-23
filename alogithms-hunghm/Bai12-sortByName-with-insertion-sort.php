<?php
function sortByName($listProduct){
    for($i=0;$i<count($listProduct);$i++){
		$val = $listProduct[$i];
		$j = $i-1;
		while($j>=0 && strlen($listProduct[$j]['name']) <strlen( $val['name'])){
			$listProduct[$j+1] = $listProduct[$j];
			$j--;
		}
		$listProduct[$j+1] = $val;
    }
      return $listProduct;
}
$listProduct= array(
    array('name'=>'CPU', 'price'=>750, 'quality'=>10, 'categoryId'=>1),
    array('name'=>'RAM', 'price'=>50, 'quality'=>2, 'categoryId'=>2),
    array('name'=>'HDD', 'price'=>70, 'quality'=>1, 'categoryId'=>2),
    array('name'=>'Main', 'price'=>400, 'quality'=>3, 'categoryId'=>1),
    array('name'=>'Keyboard', 'price'=>30, 'quality'=>8, 'categoryId'=>4),
    array('name'=>'Mouse', 'price'=>25, 'quality'=>10, 'categoryId'=>6),
); 
echo '<pre>';
print_r( sortByName( $listProduct ));
?>
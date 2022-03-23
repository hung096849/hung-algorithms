<?php
//cách làm bằng đệ quy
function calSalary($salary,$n){
    if ($n == 0)
    return $salary;
    else
    return $salary = $salary*pow( (1 + 0.1), $n);

}
//cách làm thông thường
function calSalary2($salary,$n){

    
        for($i=0; $i<= $n;$i++){
            if($i==0){
                $salary=$salary;
            }
            if($i>=1){
                $salary = $salary++;
                $salary =  $salary + $salary*0.1;
            }
           
        }
        
    return $salary;
    //cách làm 2
    // $result = null;
    // for($i = 1; $i <= $n; $i++){
    //     $result = $salary*pow( (1 + 0.1), $n);
    // }
    // return $result;
}
echo calSalary2(4,3);
echo "<br>";
echo calSalary(4,3);
?>
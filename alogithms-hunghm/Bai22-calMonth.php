<?php
//đệ qui
function calMonthA($money, $rate){

    // Tinh luong hàng thang

    // Lặp xem tháng nào có luowng gấp đoi thi return
    $n = 0;
    do {
        $n = $n + 1;
        $salary = calSalary($money, $rate, $n);
    }while($salary < 2*$money);
    return $n;
};

function calSalary($money, $rate, $n) {
    if($n <= 1){
        return $money;
    }
    return  calSalary($money, $rate, $n-1) *1.1;
}

echo calMonthA(1000, 5);
//cách bình thường
function calMonth($money, $rate) {
	$month = null;
	for ($i = 1; $i <= $money; $i++) {
    	if($i != $money) {
        }else {
            return $month = 12/($rate/100);
        }
    }
}
echo calMonth(1000,5);
?>
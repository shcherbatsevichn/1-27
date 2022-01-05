<?php 
error_reporting(-1);
//Среди натуральных чисел n0 ,n1,...,nm найти число с максимальной суммой простых делителей.
$n = 0;
$nm = 500;

$resvalue = 0;
$ressumm = 0;
for($i = $n; $i <= $nm; $i++){
    if(summdif($i) > $ressumm){
        $ressumm = summdif($i);
        $resvalue = $i;
    }
}

echo ("Число с максимальной  суммой простых делителей - {$resvalue}. Сумма = {$ressumm}");

function summdif($n){
    $res = 0;
    for($i = 1; $i <= $n; $i++){
        if(isjustnumder($i)){
            if($n % $i == 0){
                $res += $i;
            }
        }
    }
    return $res;
}

function isjustnumder($number){
    $counter = 0;
    for ($n = 1; $n <= $number; $n++){
        if ($number % $n == 0){
            $counter++;
        }
    }
    if($counter <= 2){
        return true;
    }else{
        return false;
    }
    
}
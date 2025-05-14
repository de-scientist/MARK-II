<?php
function getPrice($car_class){
    global $connection;
    if($car_class === 'A'){
        $price = 10000;

    }elseif($car_class === 'B'){
        $price = 5000;

    }elseif($car_class === 'C'){
         $price = 3000;
    }
    return $price;
}
?>
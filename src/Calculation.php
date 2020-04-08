<?php
 
namespace Calculation;
 
class Calculation {
    public function Add($mileage, $gasoline_mileage, $gasoline, $highway, $parking, $rent_a_car, $man) {
        return  $total = ($mileage/$gasoline_mileage*$gasoline+$highway+$parking+$rent_a_car)/$man;
    }
 
}
?>
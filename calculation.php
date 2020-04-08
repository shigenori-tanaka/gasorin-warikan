<?php
    require_once('top.php');

    $mileage = $_GET['mileage'];
    $gasoline_mileage = $_GET['gasoline_mileage'];
    $gasoline = $_GET['gasoline'];
    $highway = $_GET['highway'];
    $parking = $_GET['parking'];
    $rent_a_car = $_GET['rent_a_car'];
    $man = $_GET['man'];

    class Calculation {
        public function Add($mileage, $gasoline_mileage, $gasoline, $highway, $parking, $rent_a_car, $man) {
            echo floor(($mileage/$gasoline_mileage*$gasoline+$highway+$parking+$rent_a_car)/$man);
        }
    }
    $calculation = new Calculation(); 
?>

<?php
 
require_once('vendor/autoload.php');
 
class CalculationTest extends PHPUnit\Framework\TestCase {
    public function test_add() {
        $Calculation = new Calculation\Calculation();
        $this->assertEquals(2000, $Calculation->Add(100, 10, 100, 1000, 1000, 1000, 2));
    }
}
?>



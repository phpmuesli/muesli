<?php
include_once 'DateCalculatorTest.php';
class OldDateCalculatorTest extends DateCalculatorTst {
	function __construct() {
		parent::__construct(new OldDateCalculator());
	}
}
?>

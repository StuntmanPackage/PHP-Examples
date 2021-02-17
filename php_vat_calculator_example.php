<?php
/**
 * Have fun, made by StuntmanPackage 
 * Date: February 16 2021 
 */

	function calculateFinalAmount($vat ,$price) {
		$vatPrice = $price * ($vat/100);
		$toPay = $price + $vatPrice;
		return array($vatPrice, $toPay);
	}

	$sellingPrice = 119.95;
	$vatPercent = 21;

	$sellingArray = calculateFinalAmount($vatPercent,$sellingPrice);
	
	echo "Price of the product (without VAT) € " . $sellingPrice  . ",-" . "<p/>";
	echo "VAT rate (21%) is € " . round($sellingArray[0],2) . ",-" . "<p/>";
	echo "You have to pay € " . round($sellingArray[1],2) . ",-" . "<p/>";
?>

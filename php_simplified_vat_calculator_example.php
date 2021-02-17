<?php
/* Have fun, made by StuntmanPackage 
Date: February 17 2021  */

	function calculateVat($price, $vat =  21){
		$vatFromPrice = ($price  / 100) * $vat;
		
		return $price + $vatFromPrice;
	}

	echo calculateVat(100); /* Calculate 21% VAT */
	echo "<br/>";
	echo calculateVat(100, 9);  /* Calculate 9% VAT, here you can change the VAT rate outside the function */
?>

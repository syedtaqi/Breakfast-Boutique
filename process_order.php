<?php
//Author: Syed Taqi Raza
function tax_rate($var1)
{
    switch ($var1)
    {
        case "ON":
            $taxR=.13;
            $prov="Ontario";
            break;
        
        case "AB":
            $taxR=.05;
            $prov="Alberta";
            break;
        
        case "BC":
            $taxR=.12;
            $prov="British Columbia";
            break;
        
        default:
            $taxR=false;
            $prov=false;
		
		
    }
    return array($taxR,$prov);
}

$tax_array = tax_rate($_POST['prov']);
$taxR = $tax_array[0]; //Tax
$provtax = $tax_array[1]; //Prov
$total = 4.34*$_POST["item1"] + 1.32*$_POST["item2"]; //Total tax

echo "<h2>Order Confirmation</h2>";
if ($taxR==false) die("Your order could not be processed, please call 888 999-9988 to speak with customer representative code-0001");
		
echo "<p>Thank You For Your Order {$_POST["fname"]} {$_POST["lname"]} </p>";

echo "<p>Order Summary: </p>";

echo "<p>We confirm your order for {$_POST["item1"]} breakfast and {$_POST["item2"]} starbucks coffee</p>";

$totalt = $total*(1*$taxR)+$total; //total amount including taxes and product price
$taxtax = $total*(1*$taxR); //taxes amount
echo "<p>Please Pay:$ " .round($totalt,2)."</p>";

echo "<p>Subtotal:$".$total."</p>";

echo "<p>Taxes:$ " .round($taxtax,2)."</p>";

echo "<p>Call 888 999-9988 if you want to speak with a customer representative";

echo "<p> <b> $provtax tax rate is </b> $taxR </p>";

echo "<p>Have a great day!</p>";
?>
<?php

$amount = 1000000;

$vatPercentage = 15;

$vat = ($vatPercentage / 100) * $amount;

$totalAmount = $amount + $vat;

echo "original amount: $" . number_format($amount, 2) . "<br>";
echo "vat (15%): $" . number_format($vat, 2) . "<br>";
echo "total amount including vat: $" . number_format($totalAmount, 2);



?>

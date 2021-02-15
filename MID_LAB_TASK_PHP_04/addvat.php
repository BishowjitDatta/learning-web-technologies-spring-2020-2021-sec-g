<?php

$Amount=300;
  $vat=15;
  $Result=($Amount+($Amount*($vat/100)));
  $VatResult=($res-$Amount);
  echo "The Amount is:".$Amount."\n";
  echo "The percentage of vat is:".$vat."\n";
  echo "Total Amount after adding vat:".$Result."\n";
  echo "Vat amount:".$VatResult;
?>
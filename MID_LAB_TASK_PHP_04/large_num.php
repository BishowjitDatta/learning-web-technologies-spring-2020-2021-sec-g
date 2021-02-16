<?php
  $p=10;
  $q=20;
  $r=30;

  if($p>$q && $p>$r)
   {
    echo "largest num is:".$p ;
   }
  elseif($q>$p && $q>$r)
   {
    echo "largest num is:".$q ;
   }
  else
   {
      echo "largest num is:".$r ;
   }
?>
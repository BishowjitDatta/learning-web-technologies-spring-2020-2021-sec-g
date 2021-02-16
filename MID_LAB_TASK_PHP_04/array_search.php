<?php

  $Fruits=["1"=>"Orange","2"=>"Apple","3"=>"Banana"];
  
  echo ("Elements in an array are:");
  
  foreach($Fruits as $Value)
{
    echo ($Value." ");

}

echo "\nEnter a number:";
$input = rtrim(fgets(STDIN));

if($input==="1")
    {
       echo($Fruits["1"]);
    }
    elseif($input==="2")
    {
        echo($Fruits["2"]);
    }
    elseif($input==="3")
    {
        echo($Fruits["3"]);
    }

?>
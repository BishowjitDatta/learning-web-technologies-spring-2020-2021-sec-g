<?php

	if(isset($_POST['submit']))
	{
		$pic = $_POST['photo'];
    
    if(exif_imagetype($pic) == IMAGETYPE_JPEG || exif_imagetype($pic) == IMAGETYPE_PNG)
    {
      echo "Valid";
    }
    else
    {
      echo "Unvalid";
    }

    if(filesize($pic) < 4194304)
    {
      true;
    }
    else 
    {
      echo "Image is so large.";
    }

	}



?>
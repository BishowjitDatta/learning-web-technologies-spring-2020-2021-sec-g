<?php
    if(isset($_POST['submit']))
    {
        if(isset($_POST['name']) && isset($_POST['password']))
        {
            $username = $_POST['name'];
            $password = $_POST['password'];
            
            $capitalLetters = false;
            $smallLetters = false;
            $numbers = false;
            $underScore = false;
            $period = false;
            $dash = false;
    
            for($i=0;$i<strlen($username);$i++)
            {
                if((ord($username[$i]) >= 97 && ord($username[$i]) <= 122) || (ord($username[$i]) >= 65 && ord($username[$i]) <= 90) || (ord($username[$i]) >= 48 && ord($username[$i]) <= 57) || ($username[$i] == '.') || ($username[$i] == '-') || ($username[$i] == '_'))
                {
                    $capitalLetters = true;
                    $smallLetters = true;
                    $numbers = true;
                    $period = true;
                    $dash = true;
                    $underScore = true;
                }
                else
                {
                    echo "User Name can contain alpha numeric characters, period, dash or underscore only";
                    return;
                }

            }
            if(strlen($username)<2)
              {
                echo "Username is  Unvalid.";
              }
            else
            {
                  true;
            }
            if(strlen($password)<8)
              {
                echo "Password is too weak,Please Change.";
              }
            else
            {
                  true;
            }
            
            $Ch=false;
            
            for($j=0;$j<strlen($password);$j++)
            {
                if(($password[$j] == '@') || ($password[$j] == '#') || ($password[$j] == '$') || ($password[$j] == '%'))
                {
                    $Ch=true;
                    break;
                }
    
            }

            if($Ch==false)
            {
                echo "Password is Unvaild.";
                return;
            }
            

        }
        
    }
?>

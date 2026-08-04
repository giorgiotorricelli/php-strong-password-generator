<?php
    function generator (int $length = 0) {
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $typeOfChr = rand(1, 4);
        

            if ($typeOfChr === 1) {
                $password .= chr(rand(65, 90)); //caratteri ASCII comprendenti A-Z
            } elseif ($typeOfChr === 2) {
                $password .= chr(rand(97, 122)); //caratteri ASCII comprendenti a-z
            } elseif ($typeOfChr === 3) {
                $password .= chr(rand(48, 57)); //caratteri ASCII comprendenti 1-9
            } else {
                $arrSpecialChr = ['!', '$', '&', '-', '_', '(', ')', '?'];
                $randomIndex = array_rand($arrSpecialChr);
                $password .= $arrSpecialChr[$randomIndex];
            }

       
        }
         return $password;
    } 
?>
<?php
    function arrToString ($value1, $value2) { //funzione da passare nella reduce
        return $value1 . $value2;
    }

    function generator (int $length = 0, ?int $uppercase = null, ?int $lowercase = null, ?int $numbers = null, ?int $specialChr = null, ?string $repetition = null) {
        $arrPassword = [];
        $personalizations = []; //all'interno avremo i numeri di personalizzazione;
        $password = '';

        if ($uppercase !== null) $personalizations[] = 1;
        if ($numbers !== null) $personalizations[] = 3;
        if ($specialChr !== null) $personalizations[] = 4;
        //se l'array è vuoto di base aggiungo 2, ovvero lowercase 
        if ($lowercase !== null || count($personalizations) === 0) $personalizations[] = 2;

        while (count($arrPassword) < $length) {

            $chrIndex = array_rand($personalizations);
            $typeOfChr = $personalizations[$chrIndex]; 
            $randomChr = null;

            if ($typeOfChr === 1) {
                $randomChr = chr(rand(65, 90)); //caratteri ASCII comprendenti A-Z 
            } elseif ($typeOfChr === 2) {
                $randomChr = chr(rand(97, 122)); //caratteri ASCII comprendenti a-z
            } elseif ($typeOfChr === 3) {
                $randomChr = chr(rand(48, 57)); //caratteri ASCII comprendenti 1-9
            } else {
                $arrSpecialChr = ['!', '$', '&', '-', '_', '(', ')', '?'];
                $randomIndex = array_rand($arrSpecialChr);
                $randomChr = $arrSpecialChr[$randomIndex];
            }

            //se la repetition è disabilitata e il valore è già nell'array
            if ($repetition === 'false' && in_array($randomChr, $arrPassword, true)) {
                continue;
            }



            $arrPassword[] = $randomChr;
       
        }

        //uso la reduce per ottenere una stringa dall'array
        $password = array_reduce($arrPassword, "arrToString");
         return $password;
    } 

?>
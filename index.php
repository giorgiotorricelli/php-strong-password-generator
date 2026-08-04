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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Generatore Password!</h3>
    <form action="" method="GET">
        <label for="length">Inserisci la lunghezza della password</label>
        <input type="number" id="length" name="length" >
        <button type="submit">Genera</button>
    </form>
    <?php
        if (isset($_GET['length'])) {
            $length = (int)$_GET['length'];
            
            if ($length > 20 ) {
                echo 'La password non può superare i 20 caratteri';
            } else {
                echo generator($length);
            }
            
        }
    ?>
</body>
</html>
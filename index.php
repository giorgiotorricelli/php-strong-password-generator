<?php
    require_once './functions.php';
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
            
            if ($length <= 0) {
                echo 'Inserisci un numero da 1 a 20';
            } elseif ($length > 20 ) {
                echo 'La password non può superare i 20 caratteri';
            } else {
                echo "Password: " . generator($length);
            }
            
        }
    ?>
</body>
</html>
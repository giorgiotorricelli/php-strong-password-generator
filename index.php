<?php
    session_start();
    require_once './functions.php';
    if (isset($_POST['length'])) {

            $length = (int)$_POST['length'];
            $_SESSION['password'] = generator($length);
            header('Location: result.php');
            exit;
            
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
    <form action="" method="POST">
        <label for="length">Inserisci la lunghezza della password</label>
        <input type="number" id="length" name="length" min="4" max="30">
        <button type="submit">Genera</button>
    </form>
</body>
</html>
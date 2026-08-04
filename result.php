<?php
    session_start();
    $password = $_SESSION['password'];
    unset($_SESSION['password']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>La tua password: <?php echo $password?></h3>
</body>
</html>
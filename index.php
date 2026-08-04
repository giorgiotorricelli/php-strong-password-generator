<?php
    session_start();
    require_once './functions.php';
    if (isset($_POST['length'])) {
            $uppercase = null;
            $lowercase = null;
            $numbers = null;
            $specialChr = null;
            $repetition = null;

            if (isset($_POST['uppercase'])) {
                $uppercase =(int) $_POST['uppercase'];
            }

            if (isset($_POST['lowercase'])) {
                $lowercase =(int) $_POST['lowercase'];
            }
            
            if (isset($_POST['numbers'])) {
                $numbers =(int) $_POST['numbers'];
            }

            if (isset($_POST['specialChr'])) {
                $specialChr =(int) $_POST['specialChr'];
            }

            //caso in cui l'user non vuole ripetizioni di caratteri
            if ($_POST['repetition'] === 'false') {
                $repetition = 'false';
            }

            $length = (int)$_POST['length'];
            $_SESSION['password'] = generator($length, $uppercase, $lowercase, $numbers, $specialChr, $repetition);
            header('Location: result.php');
            exit;
        }
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h3>Generatore Password!</h3>
        <form action="" method="POST">
            <div class="lunghezza">
                <label for="length">Inserisci la lunghezza della password</label>
                <input type="number" id="length" name="length" min="4" max="30">
            </div>

            <div class="personalizzazioni">
                <label for="lowercase">
                    <input type="checkbox" id="lowercase" name="lowercase" value="2">
                    Lettere minuscole
                </label>
                <label for="uppercase">
                    <input type="checkbox" id="uppercase" name="uppercase" value="1">
                    Lettere maiuscole
                </label>
                <label for="numbers">
                    <input type="checkbox" id="numbers" name="numbers" value="3">
                    Numeri
                </label>
                <label for="specialChr">
                    <input type="checkbox" id="specialChr" name="specialChr" value="4">
                    Caratteri speciali
                </label>
            </div>
            
            <p>Consenti ripetizioni di uno o più caratteri</p>
            <div class="ripetizioni">
                <label for="positive">
                    <input type="radio" name="repetition" id="positive" value="true" checked>
                    Si
                </label>
                <label for="negative">
                    <input type="radio" name="repetition" id="negative" value="false">
                    No
                </label>
            </div>

            <button type="submit">Genera</button>
            <p class="nota">Nota: Se non inserisci nessuna personalizzazione la password sarà composta solo da lettere minuscole</p>
        </form>
    </main>
</body>
</html
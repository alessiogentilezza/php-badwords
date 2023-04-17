<?php
    $testo = $_POST['testo'];
    $parola = $_POST['parolaCensurata'];
    $testoCensurato = 'Questo è il testo censurato:';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo $testoCensurato ?></h1>
<h2><?php echo $testo ?></h2>
</body>
</html>
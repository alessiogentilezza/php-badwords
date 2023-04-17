<?php
    $testo = $_POST['testo'];
    $parola = $_POST['parolaCensurata'];
    $testoCensurato = str_replace($parola,'***',$testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>
<body>
<h1>Questo è il testo censurato:</h1>
<h2><?php echo $testoCensurato ?></h2>
<h3>Il nuovo testo è lungo: <?php echo strlen($testoCensurato);?> caratteri</h3>

</body>
</html>
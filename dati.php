<?php
    $testo = $_POST['testo'];
    $parola = $_POST['parolaCensurata'];
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
<h1>Questo è il testo censurato:</h1>

<h2><?php echo str_replace($parola,'***',$testo) ?></h2>
<h3>Il testo è lungo: <?php echo strlen($testo);?> caratteri</h3>

</body>
</html>
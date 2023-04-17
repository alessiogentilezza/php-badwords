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
    <form method="POST" action="dati.php">
        <div>
            <textarea name="testo" cols="30" rows="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, maxime.</textarea>
        </div>
        <input type="text" name="parolaCensurata" placeholder="Inserisci la parola da censurare" />
        <div>
            <button type="submit">Invia</button>
        </div>
    </form>
</body>

</html>
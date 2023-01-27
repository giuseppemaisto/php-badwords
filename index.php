<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

<h1>inserisci un paragrafo e una parolda da censurare</h1>
    <form action="./censored.php" method="GET">
        <input type="text" name="paragrafo" id="paragrafo" placehorder="inserisci paragrafo">
        <input type="text" name="censored" id="censored" placehorder="inserisci parola da censurare">
        <button type="submit">INVIA</button>
    </form>
</body>
</html>
<?php
$paragrafo = $_GET['paragrafo'];
$censored = $_GET['censored'];
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
    <h1><?php echo 'il paragrafo inserito è :  <br> '?></h1>
         <h4><?php echo $paragrafo ?></h4> 
        <h4><?php echo ' il paragrafo ha lunghezza di ' ?> </h4>  
        <h3><?php echo strlen($paragrafo) .'caratteri'; ?></h3> 
        <h4><?php echo str_replace($censored, '***', $paragrafo)?> </h4>
    
</body>
</html>
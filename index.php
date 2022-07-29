<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php

$a = @$_POST['cor'];
$b = "#66CDAA"; //cor inicial



?>

<style>
    body{
background-color: <?php
    
    switch ($a){
        case "": echo $b;
         break;
          
          default:
           echo $a; 
           break;
           }
           ?>;
    } 


</style>
</head>
<body>
    <form method="POST" action="index.php">
        <input type="color" name="cor" id="">
        <input type="submit" value="alterar">
    </form>
</body>
</html>
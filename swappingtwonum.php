<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping two nummbers</title>
    <style>
    h1{
        color:red;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif
    }
    body{
        background-color: grey;;
        margin: 20px;
    }
    .php-output {
            color: green;
            font-size: 18px;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 5px;
    }
  
</style>
</head>

<body>
    <h1>swapping two numbers </h1>
    <h2>
        value of a =20;
        value of b=30;
    </h2>
</body>
</html>




<p class="php-output">
<?php
$a=20;
$b=30;
$c= $a;
$a=$b;
$b=$c;


echo"Value of a=$a and value of b=$b";
?></p>

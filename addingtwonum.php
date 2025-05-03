<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding two numbers</title>
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
    <h1>Adding two num and result from php</h1>
</body>
</html>




<p class="php-output">
<?php

$a=10;
$b=20;
$c=$a+$b;

echo"Value of $a and $b after sum is $c";

?></p>

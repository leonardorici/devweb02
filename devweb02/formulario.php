<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Dados preenchidos: </h1>
<?php
    echo print_r($_POST, true);
    echo "<br>";
    echo "Nome: ". $_POST['Nome'] . '<br>';
    echo "Sobrenome: ". $_POST['Sobrenome'] . '<br>';
 ?>
    
</body>
</html>
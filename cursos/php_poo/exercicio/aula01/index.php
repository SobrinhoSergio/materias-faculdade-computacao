<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset="utf-8">
    <title>Primeira aula prática</title>
</head>

<body>

<?php

require_once 'Caneta.php';

$c1 = new Caneta;
$c1->cor = 'Azul';
$c1->ponta = 0.5;
$c1->destampar();

$c1->rabiscar();
print_r($c1);

echo "<br/>";
echo "<br/>";

$c2 = new Caneta;
$c2->cor = 'Verde';
$c2->carga = 50;
$c2->tampar();
$c2->rabiscar();
print_r($c2);

?>

<body>
</html>
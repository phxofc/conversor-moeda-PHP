<?php

$valorDigitado = $_POST['valorDigitado'];

$dolar = 0.19;
$euro = 0.18;
$pesoArgentino = 37.37;

//PARA DOLAR
if($_POST['tipoMoedaResultado'] == "dolar"){
    echo "$valorDigitado em dolar é :";
    echo "<h1>".$valorDigitado * $dolar;"</h1>";
}

//PARA EURO
if($_POST['tipoMoedaResultado'] == "euro"){
    echo "$valorDigitado em euro é :";
    echo "<h1>".$valorDigitado * $euro;"</h1>";
}

//PARA pesoArg
if($_POST['tipoMoedaResultado'] == "pesoArgentino"){
    echo "$valorDigitado em peso Argentino é :";
    echo "<h1>".$valorDigitado * $pesoArgentino;"</h1>";
}


if($_POST['tipoMoedaResultado'] == "todos"){
    echo "$valorDigitado em dolar é :";
    echo "<h1>" . $valorDigitado * $dolar ."</h1>";
    echo "<br><br>";

    echo "$valorDigitado em euro é :";
    echo "<h1> " . $valorDigitado * $euro ."</h1>";
    echo "<br><br>";

    echo "$valorDigitado em pesoArgentino é :";
    echo "<h1>" . $valorDigitado * $pesoArgentino ."</h1>";
    echo "<br><br>";
}









?>
<br><br>
<a href="../views/index.php">Voltar</a>
<?php
/*
Comandos condicionais = Condição

if - else

se - senão

sintaxe:

if (condition) {

[statements true]

} else {

[staments false]
}

*/


$idade = 8;
if ($idade>=18){
echo "maior de idade";
} else {
echo "menor de idade";
}

echo"<hr>";

# se o sal <5000 inss - 9%
# senao inss - 11%

$func = "Ignez";
$sal = 5200;

if ($sal<5000) {
    echo "Inss: 9%<br>";
    $inss = $sal * (9/100);
    $salLiq = $sal - $inss;
    echo "Funcionário: {$func}<br>";
    echo "O valor de inss é de: {$inss}<br>";
    echo "Salário Líquido: {$salLiq}";
} else {
    echo "Funcionário: {$func}<br>";
    echo "Inss: 11%<br>";
    $inss = $sal * (11/100);
    $salLiq = $sal - $inss;
    echo "O valor de inss é de: {$inss}<br>";
    echo "Salário Líquido: {$salLiq}";
}

echo "<hr>";
echo "<h1>Acesso ao Sistema</h1>";

$log = "Eduardo";
$pass = 123;

if ($log=="Eduardo") {
    if($pass==123)
    {
        echo "<h2>Conectado ao Sistema</h2>";
    } else
       {
          echo "<h2> Senha Errada</h2>";
          echo "<h3>Não Conectou</h3>";
       } 
} else {
    echo "<h2>login errado</h2>";
    echo "<h3>Não Conectou</h3>";
}
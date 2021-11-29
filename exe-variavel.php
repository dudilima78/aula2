<?php
/* criar um programa que receba 2 nome de produto, seu respectivo valor
a quantidade e o total da venda */

$produto = "sabão em pó";
$preco = 10.50;
$quantidade = 5;
$totaldavenda = $preco * $quantidade;
echo "O valor total do {$produto} vendido é: R$ {$totaldavenda}";

$produto = "detergente";
$preco = 2.50;
$quantidade = 5;
$totaldavenda = $preco * $quantidade;
echo "<br>O valor total do {$produto} vendido é: R$ {$totaldavenda}";

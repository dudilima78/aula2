<?php

/* Criar variaveis

nomedavariavel = conteúdo;

Regras:
- iniciar com $
- Não pode começar por número
- utilizar o tratamento CamelCase (depois da 1ª palavra, todas começam com letra maiúscula)
- Não pode ter acentos, espaços, símbolos
- terminar com ;
- Colocar entre aspas quando tiver textos além da variável;
$nomeDoAluno = "Pedro";
*/
$bim1 = 5.4;
$nome = "Eduardo Lima";
$idade = 42;
$profissao = "empresário";
$salario = 5500;
/*comando de saída de tela - echo e colocar variáveis entre chaves*/

echo "Seu nome é: {$nome}<br>";
echo "Sua idade é: {$idade}<br>";
echo "Sua nota é: {$bim1}<br>";
echo "Profissão: {$profissao}<br>";
echo"Seu salário é: {$salario}";
echo "<hr>";

$nota1 = 6.5;
$nota2 = 5.5;
$nota3 = 6.0;
$media = ($nota1+$nota2+$nota3)/3;
echo "Sua nota final foi: {$media}";
echo "<hr>";

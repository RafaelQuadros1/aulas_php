<?php

echo"<ul><li><a href='index.html'>home</a></li></ul>";
#print do php
echo ("variaveis e tipos de dados<br><br><br>");


#como contatenar
$valor1 = "10";
$valor2 = "20";
echo ("contatenar: $valor1 + $valor2 = " . $valor1 + $valor2 . "<br><br>");

#inteiro
$inteiro = 10;
echo (" int : $inteiro<br><br>");

#flutuante
$flutuante = 10.5;
echo ("flutuante: $flutuante<br><br>");
#somavalores
$somavalores = $inteiro + $flutuante;
echo ("somavalores: $somavalores<br><br>");

#booleano true/false
$booleano = true;
echo ("booleano: $booleano<br><br>");

#array
$lista = [1, 2, 3, 4, 5];
echo ("array: $lista[0]<br><br>");

#add na lista 
$lista[] = 6;
echo ("add na lista: $lista[5]<br><br>");

#operadores
# +, -, *, /,

/*
+ = somar
- = subtrair
* = multiplicar
/ = dividir
% = modulo
*/

$a = 10;
$b = 5;
$c =5;

echo ("operadores: $a + $b = " . $a + $b . "<br>");
echo ("operadores: $a - $b = " . $a - $b . "<br>");
echo ("operadores: $a * $b = " . $a * $b . "<br>");
echo ("operadores: $a / $b = " . $a / $b . "<br>");
echo ("operadores: $a % $b = " . $c % $b . "<br><br>");

#operadores relacionais
# ==,===, !=, >, <, >=, <=
/*
== = igual
=== = idêntico
!= = diferente
> = maior que
< = menor que
>= = maior ou igual
<= = menor ou igual
*/


#uso da condição ternaria
echo "test de operadores:"." ".($b === $c ? 'verdadeiro' : 'falso')."<br><br>";

#operadores logicos
# && = e/AND -> DEPENDE DE AMBOS VALORES = VALOR VERDADEIRO
# || = ou/OR -> DEPENDE DE UM VALOR POSITIVO = VALOR VERDADEIRO
# ! = não/NOT -> INVERTE O VALOR = VALOR VERDADEIRO/NEGATIVO

#verificar idade
$idade = 17;
$idademin = 18;
$carteira = false;

#precisa de ambas condições serem verdadeiras
echo "test de operadores logicos:"." ".($idade >= $idademin && $carteira ? 'sim' : 'não')."<br>";

#precisa de quer uma das condições seja verdadeira
echo "idade é maior que a idade minima?:"."".($idade >= $idademin || $carteira ? 'sim' : 'não')."<br><br>";


#operadores de atribuição
# =, +=, -=, *=, /=, %=
/*
= = atribuir
+= = somar e atribuir
-= = subtrair e atribuir
*= = multiplicar e atribuir
/= = dividir e atribuir
%= = modulo e atribuir
*/
echo "operadores de atribuição:"." ".($a -= $b)."<br>";
echo "operadores de atribuição:"." ".($a *= $b)."<br>";
echo "operadores de atribuição:"." ".($a /= $b)."<br>";
echo "operadores de atribuição:"." ".($a %= $b)."<br><br>";



?>
<?php

echo"<ul><li><a href='index.html'>home</a></li></ul>";
echo"estruturas condicionais<br><br>";

$qlinha = "<br><br>";

#estruturas condicionais
# if, else, elseif, switch

$idade = 15;

#condiçao booleano(T/F) { Executar }
if ($idade >= 18) {
    echo "maior de idade!$qlinha";
} else {
    echo "menor de idade!$qlinha";
}

/*
if -> se o valor for verdadeiro executar 
else -> se o valor for falso executar
*/

#add novo caso a estrutura de condiçao
if ($idade >= 18) {
    echo "maior de idade!$qlinha";
} elseif ($idade >= 15) {
    echo "adolescente!$qlinha";
} else {
    echo "menor de idade!$qlinha";
}

?>
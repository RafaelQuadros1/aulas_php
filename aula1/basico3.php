<?PHP


$qlinha = "<br><br>";
echo"estruturas de repetição$qlinha";

#repeter um codigo baseado em uma condiçao saimos do loop quando a condiçao for falsa

# while -> enquanto
# do while -> enquanto
# for -> enquanto
# foreach -> enquanto

#for(incremento, condiçao, incremento/decremento)
#incremento
for ($i = 0; $i <= 10; $i++) {

    #podemos add condiçao
    if ($i === 5) {
        echo "metade do loop, ";
    } else {
        echo "$i, ";
    }

}

#decremento
for ($i = 10; $i >= 0; $i--) {
    #podemos add condiçao
    if ($i === 5) {
        echo "metade do loop, ";
    } else {
        echo "$i, ";
    }
}


#while
$contador = 0;
while($contador <= 10) {
    $contador++;
}


#foreach
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numeros as $fruta){
    echo "$fruta, ";
}


#arrays associativos
$frutas = [
    "banana" => "amarela",
    "maçã" => "vermelha",
    "uva" => "roxa",
    "laranja" => "laranja"
];

foreach($frutas as $fruta => $cor){
    echo "<br>A fruta $fruta é da cor $cor.<br> ";
}

?>
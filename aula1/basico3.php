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


?>
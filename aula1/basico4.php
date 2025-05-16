<?PHP

echo"<ul><li><a href='index.html'>home</a></li></ul>";
$qlinha = "<br><br>";
echo "Funções$qlinha";


# Funções são blocos de código que podem ser reutilizados

function saudacao() {

    
    echo "Olá, seja bem-vindo ao  PHP!". $GLOBALS['qlinha'];
}

# Chamando a função
saudacao();


function boasvicas($nome){
    echo "olá $nome, seja bem-vindo ao PHP!". $GLOBALS['qlinha'];
}

# Chamando a função com parâmetro
boasvicas("João");


#soma pela funçao

function soma($a, $b) {
    return $a + $b;
}

echo "A soma de 5 e 10 é: " . soma(5, 10) . $qlinha;


#funçao da linguagem

$tamanho = strlen("Olá, PHP!"); // Retorna o tamanho da string
echo "O tamanho da string 'Olá, PHP!' é: $tamanho". $qlinha;
$maior = max(10, 20, 30, 40); // Retorna o maior valor
echo "O maior valor entre 10, 20, 30 e 40 é: $maior". $qlinha;
$menor = min(10, 20, 30, 40); // Retorna o menor valor
echo "O menor valor entre 10, 20, 30 e 40 é: $menor". $qlinha;

/* 
#print_r(get_defined_functions()); // Retorna todas as funções definidas no PHP
echo $qlinha . "Funções definidas pelo usuário: " . $qlinha. "<br><br>";
print_r(get_defined_functions()['user']); // Retorna as funções definidas pelo usuário
echo $qlinha . "Funções internas do PHP: " . $qlinha;
print_r(get_defined_functions()['internal']); // Retorna as funções internas do PHP
*/

?>
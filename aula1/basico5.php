<?PHP
$host = "localhost"; // Endereço do servidor
$usuario = "root"; // Usuário do banco de dados
$senha = ""; // Senha do banco de dados
$banco = "php"; // Nome do banco de dados

$con = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($con->connect_error) {
    die("Falha na conexão: " . $con->connect_error);
} else {
    echo "Conexão bem-sucedida ao banco de dados!<br>";
}


if (!empty($_GET['name'])) {
    // Verifica se o parâmetro 'name' foi enviado via GET
    // Sanitiza a entrada para evitar XSS
    $name = htmlspecialchars($_GET['name']);
    echo "<br>Olá, $name! Seja bem-vindo ao PHP!";
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            width: 200px;
            padding: 5px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<ul>
    <li><a href="index.html">home</a></li>
</ul>

    <h1>form aula</h1>

    <form action="basico5.php" method="get">
        <label for="name"></label>
        <input type="text" name="name" id="name" placeholder="Digite seu nome">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
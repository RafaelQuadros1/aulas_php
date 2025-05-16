<?PHP


$host = "localhost"; // Endereço do servidor
$usuario = "root"; // Usuário do banco de dados
$senha = ""; // Senha do banco de dados
$banco = "todolist"; // Nome do banco de dados

$con = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($con->connect_error) {
    die("Falha na conexão: " . $con->connect_error);
} else {
    echo "Conexão bem-sucedida ao banco de dados!<br>";
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $con->query("DELETE FROM tarefas WHERE id = $id");
}


# Recupera todas as tarefas
$tarefas = [];
#bucar todas as tarefas
$result = $con->query("SELECT * FROM tarefas ORDER BY data_create DESC");
#se houver tarefas
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tarefas[] = $row;
    }
}
#adicionar tarefa
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['description'])) {

    $title = $con->real_escape_string($_POST['title']);
    $description = $con->real_escape_string($_POST['description']);

    if ($con->query("INSERT INTO tarefas (title, description) VALUES ('$title', '$description')")) {
        header("Location: basico6.php");
        exit;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todolist</title>
    <style>
        body {
            text-align: center;
            margin-top: 50px;
        }

        input {
            margin: 10px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <form action="basico6.php" method="post">
        <label for="title"></label>
        <input type="text" name="title" id="title" placeholder="Digite seu title">
        <br>
        <label for="description"></label>
        <input type="text" name="description" id="description" placeholder="Digite sua descrição">
        <br>

        <input type="submit" value="Enviar">
    </form>

    <h2>suas tarefas</h2>

    <?php if (!empty($tarefas)): ?>
        <?PHP foreach ($tarefas as $tarefa): ?>
            <div style="border: 1px solid #ccc; padding: 10px; margin: 10px;">
                <ul style="list-style-type: none; margin: 0; padding: 0;">
                    <li><?PHP echo $tarefa['title']; ?></li>
                    <li><?PHP echo $tarefa['description']; ?></li>
                    <li><?PHP echo $tarefa['data_create']; ?></li>
                </ul>
                <a href="basico6.php?delete=<?PHP echo $tarefa['id']; ?>">delet</a>
            </div>

        <?PHP endforeach; ?>
    <?PHP else: ?>
        <h1>sem tarefas</h1>
    <?PHP endif; ?>
</body>

</html>
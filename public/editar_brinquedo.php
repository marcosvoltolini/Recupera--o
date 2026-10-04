<?php
require "../infra/conexao.php";

if (isset($_POST["id"])) {

    $id          = $_POST["id"];
    $nome        = $_POST["nome"];
    $faixa       = $_POST["faixa"];
    $categoria   = $_POST["categoria"];
    $preco       = $_POST["preco"];
    $quantidade  = $_POST["quantidade"];

    $sql = "UPDATE Brinquedos
            SET nome = '$nome', faixa = '$faixa', categoria = '$categoria', preco = '$preco', quantidade = '$quantidade'
            WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        echo "Brinquedo atualizado com sucesso! <a href='listar.php'>Ver Brinquedos</a>";
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }

    exit;
}

$id = $_GET["id"];

$sql = "SELECT * FROM Brinquedos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$brinquedo = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Brinquedo</title>
</head>
<body>

<h1>Editar Brinquedo</h1>

<form method="POST" action="editar_brinquedo.php">

    <input type="hidden" name="id" value="<?php echo $brinquedo["id"]; ?>">

    Nome do Brinquedo: <br>
    <input type="text" name="nome" value="<?php echo $brinquedo["nome"]; ?>" required><br><br>

    Faixa etaria: <br>
    <textarea name="faixa"><?php echo $brinquedo["faixa"]; ?></textarea><br><br>

    Categoria: <br>
    <input type="text" name="categoria" value="<?php echo $brinquedo["categoria"]; ?>" required><br><br>

    Preço: <br>
    <input type="number" step="0.01" name="preco" value="<?php echo $brinquedo["preco"]; ?>" required><br><br>;

    Quantidade: <br>
    <input type="number" step="0.01" name="preco" value="<?php echo $brinquedo["quantidade"]; ?>" required><br><br>;

    <button type="submit">Salvar alterações</button>
</form>

<a href="listar_brinquedo.php">Voltar</a>

</body>
</html>
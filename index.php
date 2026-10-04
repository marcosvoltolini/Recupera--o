<?php

include "infra/conexao.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação_brinquedos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
<header>
        <h1>Recuperação_brinquedos</h1>
    </header>
    <main>
</form>

    
        <h2>Adicione um novo brinquedo!</h2>
        <form action="public/cadastrar_brinquedo.php" method="POST">
    <label for="prato">Nome do brinquedo:</label>
    <input type="text" name="nome" required>
    <br>
    <label for="Descri">Faixa etaria:</label>
    <input type="text" name="descri" required>
    <br>
    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" required>
    <br>
    <label for="preco">Preço:</label>
    <input type="number" step="0.01" name="preco" required>
    <br>
    <label for="preco">Quantidade:</label>
    <input type="number" step="0.01" name="quanti" required>
    <br>

    <button type="submit">Cadastrar brinquedo</button>
</form>
        <div>
            <h2>brinquedos Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>faixa etaria</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
                <?php while ($Brinquedos = mysqli_fetch_assoc($ResuBrinquedos)) { ?>
                    <tr>
                        <td><?php echo $Brinquedos["id"] ?></td>
                        <td><?php echo $Brinquedos["nome"] ?></td>
                        <td><?php echo $Brinquedos["faixa"] ?></td>
                        <td><?php echo $Brinquedos["categoria"] ?></td>
                        <td><?php echo $Brinquedos["preco"] ?></td>
                        <td><?php echo $Brinquedos["quantidade"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $Brinquedos["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $Brinquedos["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </main>
    <footer>

    </footer>


</body>

</html>
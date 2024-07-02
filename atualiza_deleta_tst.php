<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização/Deleção de T.S.T</title>
</head>

<body>
    <center>
        <h1>CONFIRME SEU NOME E SOBRENOME!</h1>

        <?php
        require("conectatst.php");

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nome']) && isset($_GET['sobrenome'])) {
            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome'];

            // Verifica se nome e sobrenome existem na tabela
            $sql_check = "SELECT * FROM tst WHERE NOME = '$nome' AND SOBRENOME = '$sobrenome'";
            $result_check = $conn->query($sql_check);

            if ($result_check->num_rows > 0) {
                // Exibe o formulário para atualizar ou deletar
                echo "<form method='post' action='processa_atualiza_deleta.php'>";
                echo "<input type='hidden' name='nome' value='$nome'>";
                echo "<input type='hidden' name='sobrenome' value='$sobrenome'>";
                echo "<label for='email'>Email:</label>";
                echo "<input type='email' id='email' name='email'><br>";
                echo "<input type='submit' name='atualizar' value='Atualizar'>";
                echo "<input type='submit' name='deletar' value='Deletar'>";
                echo "</form>";
            } else {
                echo "Nenhum registro encontrado com o nome '$nome' e sobrenome '$sobrenome'";
            }
        }
        ?>

        <br />
        <a href="visualiza_tst.php"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>
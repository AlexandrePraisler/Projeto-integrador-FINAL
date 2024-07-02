<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de t.s.t</title>
</head>

<body>
    <center>
        <h1>t.s.t Cadastrados</h1>

        <table border="4">
            <tr>
                <td>NOME</td>
                <td>SOBRENOME</td>
                <td>EMAIL</td>
                <td>AÇÃO</td>
            </tr>
            <?php
            require("conectatst.php");

            // Função para exibir os dados
            function exibirDados() {
                global $conn;
                $sql = "SELECT NOME, SOBRENOME, EMAIL FROM tst";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["NOME"] . "</td>";
                        echo "<td>" . $row["SOBRENOME"] . "</td>";
                        echo "<td>" . $row["EMAIL"] . "</td>";
                        echo "<td><a href='atualiza_deleta_tst.php?email=" . $row["EMAIL"] . "'>Atualizar/Deletar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nenhum registro encontrado.</td></tr>";
                }
            }

            // Chama a função para exibir os dados
            exibirDados();
            ?>
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>

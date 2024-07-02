<?php
require("conectatst.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    if (isset($_POST['atualizar'])) {
        // Ação de atualizar
        $novo_nome = $_POST['novo_nome'];
        $novo_sobrenome = $_POST['novo_sobrenome'];

        $sql_update = "UPDATE tst SET NOME='$novo_nome', SOBRENOME='$novo_sobrenome' WHERE NOME='$nome' AND SOBRENOME='$sobrenome'";

        if ($conn->query($sql_update) === TRUE) {
            echo "Registro atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar registro: " . $conn->error;
        }
    } elseif (isset($_POST['deletar'])) {
        // Ação de deletar
        $sql_delete = "DELETE FROM tst WHERE NOME='$nome' AND SOBRENOME='$sobrenome'";

        if ($conn->query($sql_delete) === TRUE) {
            echo "Registro deletado com sucesso!";
        } else {
            echo "Erro ao deletar registro: " . $conn->error;
        }
    }

    // Redirecionamento após a ação
    echo "<br><a href='visualiza_tst.php'>Voltar para a visualização</a>";
}
?>

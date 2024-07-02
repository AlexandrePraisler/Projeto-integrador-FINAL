<?php
// Recebendo e sanitizando os dados do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$LinkedIn = isset($_POST['LinkedIn']) ? $_POST['LinkedIn'] : '';
$senioridade = isset($_POST['senioridade']) ? $_POST['senioridade'] : '';
$experiencia = isset($_POST['experiencia']) ? $_POST['experiencia'] : '';

// Variáveis para normas
$normas = array(
    'norma1' => isset($_POST['norma1']) ? $_POST['norma1'] : '',
    'norma2' => isset($_POST['norma2']) ? $_POST['norma2'] : '',
    'norma3' => isset($_POST['norma3']) ? $_POST['norma3'] : '',
    'norma4' => isset($_POST['norma4']) ? $_POST['norma4'] : '',
    'norma5' => isset($_POST['norma5']) ? $_POST['norma5'] : '',
    'norma6' => isset($_POST['norma6']) ? $_POST['norma6'] : '',
    'norma7' => isset($_POST['norma7']) ? $_POST['norma7'] : ''
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de T.S.T</title>
</head>
<body>
    <h1>Cadastro de T.S.T</h1>

    <?php
    require("conectatst.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se nome e sobrenome já estão cadastrados
        $sql_check = "SELECT * FROM tst WHERE NOME = '$nome' AND SOBRENOME = '$sobrenome'";
        $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
            // Usuário já cadastrado, mostrar opções para atualizar ou deletar
            echo "Usuário já cadastrado com o nome '$nome' e sobrenome '$sobrenome'";
            echo "<br>";
            echo "<a href='atualiza_deleta_tst.php?nome=$nome&sobrenome=$sobrenome'>Atualizar/Deletar cadastro</a>";
        } else {
            // Insere os dados na tabela
            $sql_insert = "INSERT INTO tst (NOME, SOBRENOME, EMAIL, LINKEDIN, SENIORIDADE, NORMA1, NORMA2, NORMA3, NORMA4, NORMA5, NORMA6, NORMA7, EXPERIENCIA) 
                           VALUES ('$nome', '$sobrenome', '$email', '$LinkedIn', '$senioridade', 
                                   '{$normas['norma1']}', '{$normas['norma2']}', '{$normas['norma3']}', '{$normas['norma4']}', 
                                   '{$normas['norma5']}', '{$normas['norma6']}', '{$normas['norma7']}', '$experiencia')";

            if ($conn->query($sql_insert) === TRUE) {
                echo "Novo registro inserido com sucesso!";
            } else {
                echo "Erro ao inserir registro: " . $conn->error;
            }
        }
    }
    ?>

    <br />
    <a href="index.html"><input type="button" value="Voltar"></a>
</body>
</html>

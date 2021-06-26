<?php

include_once '../Config/database.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['data_nasc'];
$sexo = $_POST['sexo'];
$tel = $_POST['tel'];
$tel2 = $_POST['tel2'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$estado_civil = $_POST['estado_civil'];
$escolaridade = $_POST['escolaridade'];
$profissao = $_POST['profissao'];
$status = $_POST['status'];
$senha = $_POST['senha'];

try {
    $stmt = $pdo->prepare("INSERT INTO usuarios("
            . "nome"
            . "cpf"
            . "data_nasc"
            . "sexo"
            . "tel"
            . "tel2"
            . "email"
            . "rua"
            . "num"
            . "bairro"
            . "cidade"
            . "estado"
            . "estado_civil"
            . "escolaridade"
            . "profissao"
            . "status"
            . "senha)"
            . "VALUES ("
            . ":nome"
            . ":cpf"
            . ":data_nasc"
            . ":sexo"
            . ":tel"
            . ":tel2"
            . ":email"
            . ":rua"
            . ":num"
            . ":bairro:"
            . ":cidade"
            . ":estado"
            . ":estado_civil"
            . ":escolaridade"
            . ":profissao"
            . ":status:"
            . "senha )");
    $stmt->execute(array(
        ':nome' => $nome,
        ':cpf' => $cpf,
        ':data_nasc' => $data_nasc,
        ':sexo' => $sexo,
        ':tel' => $tel,
        ':tel2' => $tel2,
        ':email' => $email,
        ':rua' => $rua,
        ':num' => $num,
        ':bairro' => $bairro,
        ':cidade' => $cidade,
        ':estado' => $estado,
        ':estado_civil' => $estado_civil,
        ':escolaridade' => $escolaridade,
        ':profissao' => $profissao,
        ':status' => $status,
        ':senha' => $senha
    ));

    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
            


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
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, cpf, data_nasc, sexo,  tel, tel2, email, rua, num, bairro, cidade, estado, estado_civil, escolaridade, profissao, senha) VALUES (:nome, :cpf, :data_nasc, :sexo, :tel, :tel2, :email, :rua, :num, :bairro, :cidade, :estado, :estado_civil, :escolaridade, :profissao, :senha)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':data_nasc', $data_nasc);
$stmt->bindParam(':sexo', $sexo);
$stmt->bindParam(':tel', $tel);
$stmt->bindParam(':tel2', $tel2);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':rua', $rua);
$stmt->bindParam(':num', $num);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':estado_civil', $estado_civil);
$stmt->bindParam(':escolaridade', $escolaridade);
$stmt->bindParam(':profissao', $profissao);
$stmt->bindParam(':senha', $senha);

if ($stmt->execute()) {
    echo "<script> alert('Usuário Inserido com Sucesso!'); window.location.href = '../index.php';</script>";
}else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}









 
            


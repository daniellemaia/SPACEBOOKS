<?php

// Variáveis que irão armazenar os dados informados pelo usuário:

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// Conexão com o banco de dados:

$host = "localhost";
$UserName = "root";
$password = "";
$bdname = "clientes";

$conexao = mysqli_connect($host, $UserName, $password, $bdname);

$query = "insert into dados(nome, cpf, endereco, cep, telefone, email) values ('$nome','$cpf', '$endereco', '$cep', '$telefone', '$email')";

// Verifica se o usuário já está cadastrado
$search = "SELECT * FROM dados WHERE cpf = '$cpf'";

$querySelect = mysqli_query($conexao, $search);

if (mysqli_num_rows($querySelect) > 0) {

    header('Location: ../pages/erro.html');
} else if (mysqli_query($conexao, $query)) {

    header('Location: consulta.php');
}

mysqli_close($conexao);

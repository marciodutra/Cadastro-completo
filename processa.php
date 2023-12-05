<?php
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";

$result_usuarios = "INSERT INTO usuarios (nome, email, created) values('$nome', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuarios);

<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
//cadastrar usuario no BD


//conexão com banco de dados 
include "conexao.php";

    //sql de inserção

    $sql_buscar = "select * from jogo"; //mudar 

    //executar o sql no BD

    $todos_os_jogos = mysqli_query($conexao, $sql_buscar);
   
    //cadastrando usuario

    
    $sql_inserir_usuario = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";


    $um_usuario = mysqli_query($conexao, $sql_inserir_usuario);


    //fechar a conexão
    mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");
    // exibir a mensagem de cadastro com sucesso

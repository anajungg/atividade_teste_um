<?php
    session_start();

    $host = "localhost";
    // Define o endereço do servidor do banco de dados.
    $user = "root";
    // Define o nome do usuário do banco de dados.
    $pass = "root";
    // Define a senha do banco de dados.
    $db = "sistema_simples_ana";
    // Define o nome do banco de dados que será utilizado.
    
    $conn = new mysqli($host,$user,$pass,$db);
    // Cria a conexão entre o PHP e o banco de dados MySQL.

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }

    //  Conecta o sistema ao banco de dados usando o servidor, usuário, senha e nome do banco.
?>
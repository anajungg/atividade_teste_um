<?php

include("infra/db/connect.php");
// Inclui o arquivo responsável pela conexão com o banco de dados.

if($_SERVER["REQUEST_METHOD"] == "POST"){
// Verifica se o formulário foi enviado pelo método POST.

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
// Recebe o usuário e a senha digitados no formulário.

    $sql = "SELECT * FROM usuarios
    WHERE usuario = '$usuario' 
    AND senha = '$senha'";
    // Cria uma consulta SQL para verificar se existe um usuário
    // com o nome e a senha informados.

    $resultado = $conn -> query($sql);
    // Executa a consulta no banco de dados.

    if($resultado -> num_rows > 0){
    // Verifica se foi encontrado algum usuário com esses dados.
        $_SESSION["usuario"] = $usuario;
    // Armazena o nome do usuário na sessão.
        header("Location: public/home.php");
    // Redireciona para a página inicial do sistema.
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
     <?php
    include("public/component/navbar.php");
    ?>
    <h2>Login com PHP</h2><form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){
                echo $erro;
        // isset($erro)- verifica se a variável $erro foi criada e possui algum valor.
        // echo $erro- mostra a mensagem armazenada na variável.
            }
        ?>
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>
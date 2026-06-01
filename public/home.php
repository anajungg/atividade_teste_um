<?php
    include("../infra/db/connect.php");
    // Inclui o arquivo responsável pela conexão com o banco de dados.
    if(!isset($_SESSION["usuario"])){
        header("Location: ../index.php");
        exit();
        // Verifica se existe um usuário logado na sessão.
        // Se não existir, redireciona para a página de login.
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Verifica se o formulário foi enviado pelo método POST. (O método POST é uma forma de enviar dados de um formulário para o servidor.)
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        // Recebe os dados digitados no formulário.
        $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario','$senha')";
         // Cria o comando SQL para cadastrar um novo usuário no banco de dados. (Sem precisar colocar manualmente no banco de dados)
        if($conn -> query($sql) === TRUE){
        // Executa o comando SQL e verifica se o cadastro foi realizado com sucesso.
            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
        }else{
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
        // Exibe uma mensagem informando que o usuário foi cadastrado ou que ocorreu um erro no cadastro. 
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php
        include("../public/component/navbar.php");
    // Significa que o PHP vai incluir e executar o conteúdo do arquivo nav.bar dentro da página atual.

    ?>
    <h2>Bem-vindo!</h2>
    <p> Usuário logado: 
        <?php echo $_SESSION["usuario"];?>
    <!-- Significa que o PHP vai mostrar na tela o valor armazenado na sessão com o nome "usuario".

    $_SESSION- guarda informações do usuário enquanto ele navega pelo site.
    ["usuario"]- acessa o valor salvo com a chave "usuario".
    echo- exibe esse valor na página. -->

    </p>

    <h4>Cadastrar Novo Usuário</h4>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
    
    include("../public/component/table.php");
    // Significa que o PHP vai incluir e executar o conteúdo do arquivo table.php dentro da página atual.
    ?>


    <a href="logout.php">Sair</a>
    
</body>
</html>
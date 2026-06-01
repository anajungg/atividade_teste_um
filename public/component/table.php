<hr>

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php

    $sqlUsuarios = "SELECT * FROM usuarios";

    $resultadoUsuarios = $conn -> query($sqlUsuarios);
    // Faz a busca das informações no banco de dados usando o comando SQL e salva o resultado em $resultadoUsuarios.
    // $conn- é a variável que guarda a conexão com o banco de dados.
    // query()- é o método que executa um comando SQL.
    // $sqlUsuarios- é a variável que contém o comando SQL que será executado.

    while($linha = $resultadoUsuarios->fetch_assoc()){
// while- cria um laço de repetição.
// $resultadoUsuarios- resultado de uma consulta SQL (SELECT).
// fetch_assoc()- pega uma linha do resultado e a transforma em um array associativo, onde as chaves são os nomes das colunas da tabela.
// $linha → variável que armazenará os dados de cada registro.

// Funciona assim:
// fetch_assoc() pega a primeira linha → $linha = ['id'=>1, 'nome'=>'Ana']
// O while executa o bloco.
// fetch_assoc() pega a segunda linha.
// Repete até não haver mais registros.
// Quando não existem mais linhas, fetch_assoc() retorna null (ou false) e o while termina.
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["usuario"] . "</td>
            <td>" . $linha["senha"] . "</td>
        
        </tr>";
    }
    
    ?>
<!-- Nesta página fizemos uma tabela que aparece na nossa página mostrando todos os usuarios que ja cadastramos em nosso banco de dados -->
</table >


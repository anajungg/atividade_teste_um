## Página de Login utilizando o php

Desenvolvi a minha primeira página utilizando a linguagem PHP e com os conhecimentos adquiridos em sala sobre o XAMPP. Durante o projeto, foi criada uma página de Login e Logout, além da implementação da conexão com o banco de dados e do redirecionamento de páginas após a autenticação do usuário.

### Tecnologias Utilizadas
* PHP
* HTML
* CSS
* MySQL
* XAMPP
* Git e GitHub

### Funcionamento da Aplicação
* O usuário acessa a página de login (index.php).
* Os dados digitados são enviados pelo método POST.
* O sistema verifica no banco de dados se o usuário e a senha existem.
* Caso os dados estejam corretos:Uma sessão é criada.
* O usuário é redirecionado para a página inicial (home.php).
* Caso os dados estejam incorretos:
Uma mensagem de erro é exibida.
* Ao clicar em logout:
* A sessão é destruída.
* O usuário é redirecionado para a tela de login.
* O sistema impede que usuários não autenticados acessem páginas protegidas.

### Principais Aprendizados

Durante o desenvolvimento e análise deste projeto, foram adquiridos conhecimentos sobre:

* Estrutura básica da linguagem PHP.
* Criação e utilização de sessões com session_start().
* Controle de acesso utilizando autenticação de usuários.
* Uso do método POST para envio de formulários.
* Conexão entre PHP e MySQL utilizando mysqli.
* Execução de consultas SQL com SELECT e INSERT.
* Redirecionamento de páginas utilizando header().
* Organização de arquivos em pastas para melhor estrutura do projeto.
* Utilização do XAMPP para hospedar aplicações localmente.

### Considerações Finais

Este projeto foi importante para compreender o funcionamento básico de sistemas de login e a integração entre PHP e banco de dados. Além disso, permitiu colocar em prática conceitos fundamentais de desenvolvimento web, servindo como base para projetos mais completos e seguros no futuro.

### Estrutura Básica dos Arquivos

O arquivo index.php é a página de login do sistema. Na pasta infra/db, estão os arquivos do banco de dados, sendo o connect.php responsável pela conexão e o script.sql pela criação do banco e da tabela de usuários.

Na pasta public, ficam as páginas do sistema, como a home.php, exibida após o login, e a logout.php, responsável por encerrar a sessão do usuário. A pasta component contém componentes reutilizáveis da aplicação.

O arquivo style.css é responsável pela aparência visual das páginas, e o README.md contém a documentação do projeto.

## Funcionalidade de Exclusão de Usuários (Não Concluída)
A funcionalidade de exclusão não foi concluída durante o desenvolvimento do projeto. Entretanto, foi realizado o estudo da lógica que era necessária para concluir a atividade proposta

### Como a Funcionalidade Poderia Ser Implementada
Seria necessário adicionar um botão de exclusão na tabela de usuários cadastrados. Ao clicar nesse botão, o ID do usuário seria enviado para um arquivo PHP responsável por executar o comando SQL de remoção no banco de dados.

### Arquivos que Precisariam Ser Modificados
* index.php – inclusão do botão de exclusão na listagem de usuários.
* excluir.php – criação da lógica de remoção dos registros.


### Lógica Necessária
* Capturar o ID do usuário selecionado.
* Executar o comando SQL:
* DELETE FROM usuarios WHERE id = ID_DO_USUARIO;
* Atualizar a listagem de usuários após a exclusão.



<?php

session_start();
// Inicia a sessão atual para que ela possa ser encerrada.
session_destroy ();
// Remove todos os dados armazenados na sessão.
header ("Location: ../index.php");
// Redireciona o usuário para a página de login.
exit();
// Encerra a execução do script.

?>
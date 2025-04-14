<?php
require_once 'classes/Sessao.php';

Sessao::iniciar();

$usuario = Sessao::get('usuario');

if (!$usuario) {
    header('Location: login.php');
    exit;
}

echo "Bem-vindo, " . $usuario->getNome() . "!<br>";
if (isset($_COOKIE['email'])) {
    echo "Seu e-mail salvo é: " . $_COOKIE['email'] . "<br>";
}
echo '<a href="logout.php">Sair</a>';
?>
<?php
require_once 'classes/Sessao.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = Autenticador::logar($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario);
    if (isset($_POST['lembrar'])) {
        setcookie('email', $email, time() + 3600);
    }
    header('Location: dashboard.php');
} else {
    echo "Login inválido!";
}
?>
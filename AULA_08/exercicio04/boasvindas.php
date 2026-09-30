<?php
session_start();

$nome = $_SESSION['nome'];

echo "<h2>Bem-vindo!</h2>";
echo "<p>Olá, $nome!</p>";
?>
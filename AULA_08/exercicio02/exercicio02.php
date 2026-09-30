<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

echo "<h3>Dados recebidos:</h3>";
echo "<p>Nome: $nome</p>";
echo "<p>Cidade: $cidade</p>";

if ($cidade == "Curitiba") {
    echo "<p>Curitibano!</p>";
}
?>
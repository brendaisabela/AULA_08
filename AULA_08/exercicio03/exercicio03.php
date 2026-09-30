<?php
$numero1 = (float)$_POST['numero1'];
$numero2 = (float)$_POST['numero2'];
$soma = $numero1 + $numero2;

print "<h3>Resultado:</h3>";
print "<p>A soma é: $soma</p>";

echo "<h4>Tipos:</h4>";
var_dump($numero1);
echo "<br>";
var_dump($numero2);
echo "<br>";
var_dump($soma);
?>
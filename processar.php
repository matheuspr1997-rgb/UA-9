<?php
$nome = $_POST["nome"];
$nascimento = $_POST["nascimento"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$sexo = $_POST["sexo"];
$bens = isset($_POST["bens"]) ? "Sim" : "Não";
echo "Nome: " . $nome;
echo "<br>";
echo "Data de Nascimento: " . $nascimento;
echo "<br>";
echo "Endereço: " . $endereco;
echo "<br>";
echo "Número: " . $numero;
echo "<br>";
echo "Cidade: " . $cidade;
echo "<br>";
echo "Estado: " . $estado;
echo "<br>";
echo "Bens Pessoais: " . $bens;
?>
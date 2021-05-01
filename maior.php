<?php
$dados = $_POST['dados'];
$arrayDados = json_decode($dados, true);


$valor = $arrayDados[0]["valor"];
$nome = $arrayDados[0]["nome"];

foreach ($arrayDados as $index => $item) {
    if($item["valor"] > $valor){
        $valor = $item["valor"];
        $nome = $item["nome"]; 
    }
}
echo $nome;
?>
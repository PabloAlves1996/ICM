<?php

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if($post['altura'] == '' || $post['peso'] == ''){
    echo "Adicione o peso e altura!";
    exit();
}

$altura = $post['altura'];
$peso = $post['peso'];

function imc($altura, $peso){
    $altura = str_replace(',', '.', $altura);
    $resultado = $peso / $altura**2;

    return $resultado;
}


// echo " seu imc é: ".imc($altura, $peso);
$resume = substr(imc($altura, $peso), 0,2);
header("Location: index.php?resultado=".$resume);

?>
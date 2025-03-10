<?php

session_start();

//

//define as variaveis e troca # por - que forem postos no chamado
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria =str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;







//abrindo o arquivo
    $arquivo = fopen('arquivo.txt', 'a+') ;
//escrevendo o texto
    fwrite($arquivo, $texto);
//fechando o arquivo
    fclose($arquivo);

    header('Location: home.php');
?>
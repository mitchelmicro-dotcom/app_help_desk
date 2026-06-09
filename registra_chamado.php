<?php
    // echo '<pre>';
    //     print_r($_POST);
    // echo '</pre>';

    session_start();

    //estamos trabalhando na montagem do texto que será gravado no arquivo de texto, ou seja, o chamado que foi aberto no formulário de abertura de chamado
    $titulo = str_replace('#', '-', $_POST['titulo']); // str_replace() - função para substituir um texto por outro texto em uma string
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', $_POST); // implode() - função para juntar os elementos de um array em uma string, utilizando um separador entre os elementos
    
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; // PHP_EOL - constante do PHP para representar a quebra de linha de acordo com o sistema operacional
    
    //abrindo o arquivo 
    $arquivo = fopen('arquivo.hd', 'a'); // a - para abrir o arquivo para escrita e posicionar o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tentar criar o arquivo.

    fwrite($arquivo, $texto); // fwrite() - função para escrever um texto em um arquivo

    fclose($arquivo); // fclose() - função para fechar um arquivo aberto
  
    //echo($texto);
    header('Location: abrir_chamado.php'); // header() - função para enviar um cabeçalho HTTP para o navegador, nesse caso estamos enviando um cabeçalho de redirecionamento para a página de abertura de chamado
   


?>
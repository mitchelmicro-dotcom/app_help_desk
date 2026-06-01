<?php

    session_start();
    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover índices do array de sessão
    //unset() - função para remover índices do array de sessão
    unset($_SESSION['x']); // para remover um índice específico do array de sessão se ele existir
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a variável de sessão
    //session_destroy() - função para destruir a variável de sessão
    session_destroy(); // será destruída a variável de sessão, ou seja, todos os índices do array de sessão serão destruídos
    // Forçar um redirecionamento para a página de login

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');





?>
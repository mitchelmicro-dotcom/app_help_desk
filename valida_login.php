<?php

    //Protegendo a página restringindo o acesso somente para usuários autenticados
    session_start();

   

    //variavel que verfica se a auteticação foi realizada com sucesso

    $usuarios_autenticados = false;

    //usuarios do sistema

    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    /* echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>'; */

    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuarios_autenticados = true;
        } 

    }

    if($usuarios_autenticados){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

    // print_r($_POST);

    // echo '<br />';

    // echo $_POST['email'];
    // echo '<br />';
    // echo $_POST['senha'];

    /* print_r($_POST);

    echo '<br />';

    echo $_POST['email'];
    echo '<br />';
    echo $_POST['senha']; */


?>
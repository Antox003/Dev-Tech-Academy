<?php

    session_start();

    $logged_in = $_SESSION['logged_in'] ?? false;

    function login($user_id, $user_name, $user_surname, $user_email, $user_phone, $user_role){
        session_regenerate_id(true);
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $user_id;
        $_SESSION['nome'] = $user_name;
        $_SESSION['email'] = $user_email;
        $_SESSION['cognome'] = $user_surname;
        $_SESSION['telefono'] = $user_phone;
        $_SESSION['ruolo'] = $user_role;
    }

    function logout(){
        $_SESSION= [];

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

        session_destroy();
    }

    if (isset($_GET['logout'])) {
        logout();
        header("Location: login");
    }

    function require_login($logged_in){

        if ($logged_in == false){
            header('Location: login');
            exit;
        }

    }

?>
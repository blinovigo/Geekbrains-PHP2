<?php
    function userIsAuth(){
        session_start();
        return ($_SESSION['auth'] == 'true');
    }

    function userAuth(){
        $_SESSION['auth'] = 'true';
    }

    function userExit(){
        $_SESSION['auth'] = 'false';
        session_destroy();
        $_GET['view'] = 'auth';
    }
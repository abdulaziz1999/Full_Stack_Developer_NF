<?php
    @$req = $_REQUEST['materi'];
    if(empty($req)){
        include_once 'home.php';
    }elseif ($req == 'home' || $req == 'php' || $req == 'javascript' || $req == 'designweb' || 
             $req == 'uiux' || $req == 'github' || $req == 'laravel' || $req == 'mysql' || $req == 'restapi') {
        include_once $req . '.php';
    } else {
        include_once '404.php';
    } 
?>
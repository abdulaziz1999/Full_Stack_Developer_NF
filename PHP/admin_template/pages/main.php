<?php
    @$hal = $_REQUEST['hal'];
    if(empty($hal)){
        include_once 'dashboard.php';
    }elseif ($hal == 'dashboard' || $hal == 'profile' || $hal == 'pendidikan' || $hal == 'gallery' || $hal == 'contact') {
        include_once $hal . '.php';
    } else {
        include_once '404.php';
    } 
    ?>

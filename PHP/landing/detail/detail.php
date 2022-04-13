<?php
    @$req = $_REQUEST['materi'];
    if ($req == 'php') {
        $img = './assets/img/logos/php.png';
        $judul = 'Hypertext Preprocessor';
    }elseif($req == 'javascript'){
        $img = './assets/img/logos/js.png';
        $judul = 'JavaScript';
    }elseif($req == 'designweb'){
        $img = './assets/img/logos/web.png';
        $judul = 'Design Web';
    }elseif($req == 'uiux'){
        $img = './assets/img/logos/figma.png';
        $judul = 'UI/UX';
    }elseif($req == 'github'){
        $img = './assets/img/logos/github.png';
        $judul = 'GitHub';
    }elseif($req == 'laravel'){
        $img = './assets/img/logos/laravel.png';
        $judul = 'Laravel';
    }elseif($req == 'mysql'){
        $img = './assets/img/logos/mysql.png';
        $judul = 'MySQL';
    }elseif($req == 'restapi'){
        $img = './assets/img/logos/rest.png';
        $judul = 'REST API';
    }

?>
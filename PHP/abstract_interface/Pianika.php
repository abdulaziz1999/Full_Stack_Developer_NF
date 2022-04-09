<?php
require_once 'MusikTiup.php';
require_once 'MusikTekan.php';

class Pianika implements MusikTiup, MusikTekan{
    public function tiup()
    {
        echo '<br/>Suara Pianika ditiup saja pfuuuufffffff....';
    }

    public function tekan()
    {
        echo '<br/>Suara Pianika ditiup lalu ditekan net...not...net...not';
    }
}
<?php
require_once 'MusikPetik.php';

class Gitar implements MusikPetik{
    public function petik()
    {
        echo '<br/>Suara Gitar jreng...jreng...jret';
    }
}
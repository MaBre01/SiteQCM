<?php
    require_once("/classes/Qcm.php");
    $inti=$_POST['inti'];
    $desc=$_POST['desc'];
    $qcm = new Qcm($inti,$desc);
    $qcm->displayQcm();
?>	
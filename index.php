<?php

session_start();

require_once(__DIR__.'/Displayer.php');
$displayer = new Displayer();

$displayer->display();

?>
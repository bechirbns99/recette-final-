<?php
include "recette.php";


$use= new recette();
$use->nom= $_GET['nom'];
$use->type=$_GET['type'];
$use->comp=$_GET['compos'];
$use->etap=$_GET['etap'];
$use->insertRecette1();


?>
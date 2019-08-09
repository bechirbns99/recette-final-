<?php
include "recette.php";
if($_GET['type'] == "Choose..."){
    header('location: recette1.php?x=selectionner un type');
}
else{

$use= new recette();
$use->nom= $_GET['nom'];
$use->type=$_GET['type'];
$use->comp=$_GET['compos'];
$use->etap=$_GET['etap'];
$use->insertRecette();

}
?>
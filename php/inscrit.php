<?php
include "user.php";
$n=$_GET['nom'];
$p=$_GET['prenom'];
$e=$_GET['email'];
$t=$_GET['telephone'];
$ps=$_GET['password'];
$com=$_GET['confirm'];

if(empty($n)){
    echo"remplir votre nom ";
}else{
    
}
if(empty($p)){
    echo"remplir votre prenom ";
}
if(empty($e)){
    echo"remplir votre email ";
}
if(empty($t)){
    echo"remplir votre telephone ";
}
if(empty($ps)){
    echo"remplir votre password ";

}
if(empty($com)){
    echo"remplir votre confirm password ";
}
else if($ps!= $com)
{
header('location: inscritx.php?x=verifier votre password');
}
else{
$use= new user();
$use->nom=$n;
$use->prenom=$p;
$use->email=$e;
$use->tel=$t;
$use->pass=$ps;
$use->insertUser();
}


?>
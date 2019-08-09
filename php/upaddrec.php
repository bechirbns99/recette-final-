


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Log In Admin</title>
</head>

<body>
    <div class="card mb-3 bg-danger" style="max-width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <a href="#"> <img src="../img/logo.png" class="card-img s" alt="..."></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title titre">Bienvenue Admin</h3>
                    <div class="input">


                        <a href="conadd.html"> <input type="button" name="admin" value="deconexion" class="btn btn-warning"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../html/profileadd.html">Admin</a>
            </li>
           

            <li class="nav-item active">
                <a class="nav-link" href="../html/recette.html">Ajouter recette</a>
        
            <li class="nav-item active">
                <a class="nav-link" href="../html/afficherecet.html">Afficher recette </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/afficherallrec.php">Afficher tout recette </a>
            </li>
        </ul>
    </nav>
<?php
include "recette.php";


$rec = new recette();
$rec->id=$_GET['id'];
$rec->nom=$_GET['nom'];
$rec->type=$_GET['type'];
$rec->comp=$_GET['comp'];
$rec->etap=$_GET['etap'];

$x = $rec->updateRecette();

if($x == true){
    ?>
    <div class="alert alert-danger">
      update echouer
    </div>
    <?php
}else{
    ?>
<div class="alert alert-success">
      update valider
    </div>
    <?php
}
?>

</body>

</html>
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
                <a href="../html/profuser.html"> <img src="../img/logo.png" class="card-img s" alt="..."></a>
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
                <a class="nav-link" href="../html/ajoutrecette.html">Ajouter recette</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../html/modifuser.html">Modifer recette </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="../html/suppuser.html">Supprimer recette </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="../php/name.php">Afficher  les recette </a>
            </li>
        </ul>
    </nav>
<?php
include "recette.php";


$rec = new recette();
$rec->id = $_GET['id'];
$base=$rec->deleteRecette();
header('location:name.php');

?>
</body>

</html>
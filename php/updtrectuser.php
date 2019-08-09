<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Log In Admin</title>
</head>

<body>
<?php
session_start();
?>
    <div class="card mb-3 bg-danger" style="max-width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <a href="../html/profileadd.hrml"> <img src="../img/logo.png" class="card-img s" alt="..."></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h4 class="card-title titre"> <?php if(isset($_SESSION['email'])){ echo"Bienvenue ".$_SESSION['email']."<br>";} ?> </h4>
                    <div class="input">
                       <a <?php echo 'href="./dex.php?dex"' ?> > <input type="button" name="user" value="deconexion" class="btn btn-warning"></a></div>
                </div></div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
        
            <li class="nav-item active">
                <a class="nav-link" href="../html/ajoutrecette">Ajouter recette</a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="../php/name.php">Afficher  les recette </a>
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
if($x == true ){
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
<?php
    session_start();
    if($_SESSION['email'] == NULL){
header('location: conx.php');
    }
    ?>
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
                <a href="./profileuser.php"> <img src="../img/logo.png" class="card-img s" alt="..."></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
               
                    <h4 class="card-title titre"> <?php if(isset($_SESSION['email'])){
                         include "user.php";

                         $u = new User();
                         $u->email=$_SESSION['email'];
                         $data = $u->readUserName();

                         while($x=$data->fetchObject()){
                            echo "Bienvenue ".$x->nom;
                         }
                         
                        ;} ?> </h4>
                    <div class="input">
                       <a <?php echo 'href="./dex.php?dex"' ?> > <input type="button" name="user" value="deconexion" class="btn btn-warning"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
        <li class="nav-item active">
                <a class="nav-link" href="../php/moncompte.php">Mon compte </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/ajoutrecette.php">Ajouter recette</a>
            </li>
            

            <li class="nav-item active">
                <a class="nav-link" href="../php/name.php">Afficher  les recette </a>
            </li>

        </ul>
    </nav>

</body>

</html>
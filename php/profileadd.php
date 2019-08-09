<?php
    session_start();
    if($_SESSION['email'] == NULL){
header('location: conadd.php');
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
                <a href="#"> <img src="../img/logo.png" class="card-img s" alt="..."></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title titre"><?php if(isset($_SESSION['email'])){ echo"Bienvenue admin <br>";} ?></h3>
                    <div class="input">


                        <a <?php echo 'href="./dex.php?dex"' ?>> <input type="button" name="admin" value="deconexion" class="btn btn-warning"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../php/profileadd.php">Admin</a>
            </li>
         
            
            <li class="nav-item active">
                <a class="nav-link" href="../php/recette1.php">Ajouter recette</a>
            </li>
          
            
            <li class="nav-item active">
                <a class="nav-link" href="../php/afficherallrec.php">Afficher tout recette </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/afficheralluser.php">Afficher tout users </a>
            </li>
        </ul>
    </nav>





</body>

</html>
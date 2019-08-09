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
    <script> function verif1() {
    n = document.f.nom.value;
    type = document.f.type.value;
    c = document.f.compos.value;
    etp = document.f.etap.value;

    if (n.length == '') {
        alert('remplir le  nom de recette');
        return false;
    } else {
        for (i = 0; i < n.length; i++) {
            if (isNaN(n[i]) == false) {
                alert(' verfier le nom  de recette ');
                return false;
            }
        }
        if (type.selectedIndex == false) {
        
            alert('choisir un type');
            return false;
        }
    }

    if ((c == "") || (isNaN(c) == false)) {
        alert(' donner les composents ');
        return false;
    }
    if ((etp == "") || (isNaN(etp) == false)) {
        alert(' donner les etape ');
        return false;
    }
  
}</script>
</head>

<body>
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

        <form name="f" method="GET " action="../php/insertrecett add.php">

            <div class="form-row ">
                <div class="form-group col-md-6 ">
                    <label for="inputEmail4 ">Nom de recette</label>
                    <input type="text " class="form-control " id="inputEmail4 " placeholder="Nom de recette " name="nom" required>
                </div>

                <div class="form-group col-md-4 ">
                    <label for="inputState ">Type de recette</label>
                    <select id="inputState " class="form-control " name="type" required >
                        <option selected>Choose...</option>
                        <option value="jus ">Jus</option>
                        <option value="gateau ">Gateau</option>
                        <option value="cake ">Cake</option>
                        <option value="macron ">Macaron</option>
                        <option value="sablé ">Sablé</option>
                        <option value="tarte ">Tarte</option>
                    </select>
                </div>

            </div>
            <div class="form-group purple-border ">
                <label for="exampleFormControlTextarea4 ">Les composents</label>
                <textarea class="form-control " id="exampleFormControlTextarea4 " rows="3 " name="compos"required></textarea>
            </div>

            <div class="form-group green-border-focus ">
                <label for="exampleFormControlTextarea5 ">Les etapes de preparation</label>
                <textarea class="form-control " id="exampleFormControlTextarea5 " rows="3 " name="etap"required></textarea>
            </div>
            <?php 
                        if(@$_GET['x']==true)
                        {
                    ?>
                        <div class="alert-danger text-dark text-center py-3"><?php echo $_GET['x'] ?></div>                                
                    <?php
                        }
                    ?>
            <button type="submit " class="btn btn-primary " onclick="verif1()">Ajout recette</button>
            <p id="error"></p>
        </form>
    </body>

    </html>
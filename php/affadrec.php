

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


                        <a href="../html/conadd.html"> <input type="button" name="admin" value="deconexion" class="btn btn-warning"></a>
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
                <a class="nav-link" href="../html/afficheuser.html">Afficher Users</a>
            </li>


            <li class="nav-item active">
                <a class="nav-link " href="../html/suppuseradd.html">Supprimer Users</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="../html/recette.html">Ajouter recette</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../html/modifad.html">Modifer recette </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="../html/suppadd.html">Supprimer recette </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../html/afficherecet.html">Afficher recette </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/afficherallrec.php">Afficher tout recette </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/afficheralluser.php">Afficher tout users </a>
            </li>
        </ul>
    </nav>
    <form>
        <?php
        include "recette.php";

        $re = new recette();
        
        $re->id = $_GET['id'];
        
        $data = $re-> readrecette();
        if(!$data){
            ?>
    
             <div class="alert alert-warning">
             Aucun recette 
         </div>
           <?php
       }else{
        ?>
              <?php
       while($rec = $data-> fetchObject()){

                echo $rec->nomrec."<br>";
                echo $rec->typerec."<br>";
                echo $rec->comp."<br>";
                echo $rec->etape."<br>";
                echo $rec->id."<br>";
                echo"<hr>";

}
       }
        ?>
    </form>

</body>

</html>
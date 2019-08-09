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
    <form>
        <?php
        include "recette.php";

        $re = new recette();
        
        $data = $re->selectName();
        
        if (!$data) {
            ?>
        <div class="alert alert-warning">
            Aucun recette
        </div>
        <?php
}else{
    ?>
    <table class="table table-striped"> 
        <thead>
            <tr>
                <th>Nom de recette</th>
                <th>type de recette</th>
                <th>les composants de recette</th>
                <th>les etapes de recett</th>
                <th>id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
while($user=$data->fetchObject()){
?>
<tr>
<tr>
<td><?php echo $user->nomrec; ?></td>
    <td><?php echo $user->typerec; ?></td>
    <td><?php echo $user->comp; ?></td>
    <td><?php echo $user->etape; ?></td>
    <td><?php echo $user->id; ?></td>
    <td>
        <a href="./deletrecet.php?id=<?php echo $user->id; ?>" class="btn btn-danger">Supprimer</a>
       
    </td>
    <td> <a href="./afficherecetteadmin.php?id=<?php echo $user->id; ?>" class="btn btn-warning">modifier</a></td>
</tr>
<?php
} 
}
?>
</tbody>
</table>
    </form>

</body>

</html>
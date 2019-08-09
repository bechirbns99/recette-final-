<?php
    session_start();
    if($_SESSION['email'] == NULL){
header('location: conx.php');
    }?>
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
                         
                        ;} ?> </h4>                    <div class="input">
                       <a <?php echo 'href="./dex.php?dex"' ?> > <input type="button" name="user" value="deconexion" class="btn btn-warning"></a></div>
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
       
    <form>
        <?php
        
        require_once('recette.php');
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
                <th>les composants de la recette</th>
                <th>les etapes de la recette</th>
                <th>Id</th>
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
        <a href="./dtltuserrec.php?id=<?php echo $user->id; ?>" class="btn btn-danger">Supprimer</a>
       
    </td>
    <td> <a href="./modifrecuser.php?id=<?php echo $user->id; ?>" class="btn btn-warning">modifier</a></td>
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
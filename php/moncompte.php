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

    <form>
        <?php
      

        $re = new User();
        $re->email=$_SESSION['email'];

        $data = $re->readUser();
        
    
    if (!$data) {
    ?>
<div class="alert alert-warning">
    Aucun utilisateur
</div>
    <?php
}else{
    ?>
    <table class="table table-striped"> 
        <thead>
            <tr>
                 <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

<?php
while($user=$data->fetchObject()){
?>
<tr>
    <td><?php echo $user->nom; ?></td>
    <td><?php echo $user->prenom; ?></td>
    <td><?php echo $user->tel; ?></td>
    <td><?php echo $user->email; ?></td>
    <td><?php echo $user->pass; ?></td>
    <td>
        <a href="./modifcompte.php?email=<?php echo $user->email; ?>" class="btn btn-danger">modifier</a>
    </td>
</tr>
<?php
} }

?>

</body>

</html>
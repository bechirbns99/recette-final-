<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>inscrit</title>
<link rel="stylesheet" href="../css/style.css">
<script src="../js/verif.js"></script>
<meta charset="utf-8">
</head>

<body>
    <div class="card mb-3 bg-danger" style="max-width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <a href="../html/index.html"> <img src="../img/logo.png" class="card-img s" alt="..."></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title titre">Recettes de patisserie</h3>
                    <div class="input">

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

include "recette.php";

$re = new recette();


$data = $re-> selectSable();

if(!$data){
    ?>
    <div class="alert alert-warning">
            Aucun recette de type sablé
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

</tr>
<?php
} 
}
?>
</tbody>
</table>
</body>

</html>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>inscrit</title>
<link rel="stylesheet" href="../css/style.css">
<script>
    function verif() {
            err=true;
        n = document.f.nom.value;
        p1 = document.f.prenom.value;
        e = document.f.email.value;
        t = document.f.telephone.value;
        p = document.f.password.value;
        c = document.f.confirm.value;

        if (n.length < 2) {
            alert("remplir le  nom ");
            n.focus;
            err= false;

        } else {

            for (i = 0; i < n.length; i++) {
                if (isNaN(n[i]) == false) {
                    alert(' verfier le nom  ');
                    n.focus;
                    err= false;
                }
            }

        }
        re = /^\w+$/;
        if (!re.test(n)) {
            alert("le nom conntien des symbole");
            n.focus;
            err= false;
        }

        if (p1.length < 2) {
            alert("remplir votre prenom");
            p1.focus;
            err= false;


        } else {
            for (j = 0; j < n.length; j++) {
                if (isNaN(p1) == false) {
                    alert("verfier votre prenom");
                    p1.focus;
                    return false;
                }
            }

        }
        re = /^\w+$/;
        if (!re.test(p1)) {
            alert("le prenom conntien des symbole");
            p1.focus;
            err= false;
        }

        if (e == "") {
            alert(' remplir votre email ');
            e.focus;
            err= false;

        } else {
            valide1 = false;
            for (var j = 1; j < (e.length); j++) {
                if (e.charAt(j) == '@') {
                    if (j < (e.length - 4)) {
                        for (var k = j; k < (e.length - 2); k++) {
                            if (e.charAt(k) == '.') valide1 = true;
                        }
                    }
                }
            }

            if (valide1 == false) {
                e.focus;
                alert("Veuillez saisir une adresse email valide.");
                return valide1;
            }

        }

        if (t.length < 8) {
            alert(' remplir votre  telephone ');
            t.focus;
            err= false;
        }
        if (isNaN(t)) {
            alert(' verfier votre  telephone ');
            t.focus;
            err= false;
        }
        if (p.length < 8) {
            alert(' verfier votre password ');
            p.focus;
            err= false;
        } else if (p != c) {
            alert(' votre password incorrect ');
            c.focus;
            err= false;
        } 
        if (err==false){
            alert('verifier votre formulaire');
        }else {
            alert("bien inscrit");
        }
 return err;

    }
</script>
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
                        <a href="../php/conadd.php"> <input type="button" name="admin" value="Admin" class="btn btn-warning"></a>
                        <a href="../php/conx.php"><input type="button" name="conex" value="Connexion" class="btn btn-primary"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <form name="f" action="../php/inscrit.php" method="GET">
        <div class="form-row">
            <div class="form-group col-md-6">
                <p>Nom</p>
                <input type="text" class="form-control mt-3" placeholder="Nom" required formControlName="nom" name="nom">

            </div>
            <div class="form-group col-md-6">
                <p>Prénom</p>
                <input type="text" class="form-control" placeholder="Prénom" required formControlName="prenom" name="prenom">

            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <p>Email</p>
                <input type="email" class="form-control" placeholder="Email" required formControlName="email" name="email">
            </div>
            <div class="form-group col-md-6">
                <p> Téléphone</p>
                <input type="tel" class="form-control" placeholder="Téléphone" required formControlName="telephone" name="telephone">

            </div>
        </div>




        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Mot de Passe</label>
                <input type="password" class="form-control" placeholder="Password" required name="password"></div>


            <div class="form-group col-md-6">
                <label>Confirmer Mot de Passe</label>
                <input type="password" class="form-control" placeholder="Password" required name="confirm" formControlName="confirm">
            </div>
        </div>
        <?php 
                        if(@$_GET['x']==true)
                        {
                    ?>
                        <div class="alert-danger text-dark text-center py-3"><?php echo $_GET['x'] ?></div>                                
                    <?php
                        }
                    ?>
        <input type="submit" value="Inscription" class="btn btn-success" onclick="verif() ">


    </form>


    <footer class="container">
        <p>&copy; Company 2017-2019</p>
    </footer>

</body>

</html>
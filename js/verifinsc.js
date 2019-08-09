function verif(){

    n = document.f.nom.value;
	p1 = document.f.prenom.value;
	e = document.f.email.value;
	t = document.f.telephone.value;
	p = document.f.password.value;
    c = document.f.confirm.value;
    
    if (n.length == "") {
        alert("remplir le  nom ");
        return false;

    } else {
        for (i = 0; i < n.length; i++) {
            if (isNaN(n[i]) == false) {
                alert(' verfier le nom  ');
                return false;
            }
        }

    }

    if (p1.length == "") {
        alert("remplir votre prenom");
        return false;

    } else {
        for (j = 0; j < n.length; j++) {
            if (isNaN(p1) == false) {
                alert("verfier votre prenom");
                return false;
            }
        }

    }

    if (e == "") {
        alert(' verfier votre email ');
        return false;

    }

    if (t == "") {
        alert(' remplir votre  telephone ');
        return false;
    }
    if (isNaN(t)) { 
        alert(' verfier votre  telephone ');
        return false;
      }
    if ((p.length < 8) || (p != c)) {
        alert(' verfier votre password ');
        return false;
    }
    


}
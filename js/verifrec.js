function verif1() {
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
  
}
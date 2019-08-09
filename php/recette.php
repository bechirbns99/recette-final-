<?php

include "connectrecette.php";


class recette{


public $nom;
public $type;
public $comp;
public $etap;
public $id;



function insertRecette(){
    $base= Connexionrec::getConnexion();
    $req = "INSERT INTO recette(nomrec, typerec, comp, etape) VALUES ('".$this->nom."','".$this->type."','".$this->comp."','".$this->etap."')";
   $nbLine= $base->exec($req);
   if($nbLine==1){
    echo "insertion avec succses";
    header('Location: profileadd.php');
}
}    

function insertRecette1(){
    $base= Connexionrec::getConnexion();
    $req = "INSERT INTO recette(nomrec, typerec, comp, etape) VALUES ('".$this->nom."','".$this->type."','".$this->comp."','".$this->etap."')";
   $nbLine= $base->exec($req);
   if($nbLine==1){
    echo "insertion avec succses";
    header('Location: http://localhost/projet/php/profileuser.php');
}
else{
 echo "insertion  echouer";
}
}    

public function updateRecette(){
    $base= Connexionrec::getConnexion();
    $req ="UPDATE recette SET nomrec='".$this->nom."',typerec='".$this->type."',comp='".$this->comp."',etape='".$this->etap."' WHERE id='".$this->id."'";
    $x=$base->exec($req);
     

          
}

public function readrecette(){
    $base= Connexionrec::getConnexion();

   $req ="SELECT * FROM recette WHERE id='".$this->id."'";

   $data=$base->query($req);

   if($data->rowCount()){

        return $data;
    }
    else{
      
    }
}
public function selectName(){
    $base= Connexionrec::getConnexion();
    $req ="SELECT * FROM recette";
    $data=$base->query($req);

    if($data->rowCount()){
 
         return $data;
     
}
}

public function deleteRecette(){
    $base= Connexionrec::getConnexion();
    $req="DELETE FROM recette WHERE id ='".$this->id."'";


    $data=$base->exec($req);
  
    return $data;

}
public function selectGateau(){
    $base= Connexionrec::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'gateau'  ";
    $data=$base->query($req);
   
    if($data->rowCount()){

        return $data;
    }
   
}
public function selectJus(){
    $base= Connexionrec::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec= 'jus'";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
 
   
}
public function selectcake(){
    $base= Connexionrec::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'cake'  ";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
    
}
public function selectMac(){
    $base= Connexionrec::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'macron'  ";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
   
}
public function selectSable(){
    $base= Connexionrec::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'sablé'  ";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
   

}
public function selectTart(){
    $base= Connexionrec::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'tarte'  ";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
   
}


}
?>
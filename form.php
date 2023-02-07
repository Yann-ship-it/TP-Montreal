<?php
    $serveur = "localhost";
    $dbname = "formulaire";
    $user = "root";
    $pass = "root";
    
    $prenom = $_POST["name"];
    $nom = $_POST["secondName"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO form(prenom, mail, age, sexe, pays)
            VALUES(:prenom, :mail, :age, :sexe, :pays)");
        $sth->bindParam(':name',$name);
        $sth->bindParam(':nom',$secondName);
        $sth->bindParam(':objet',$objet);
        $sth->bindParam(':message',$message);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:form-merci.html");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>
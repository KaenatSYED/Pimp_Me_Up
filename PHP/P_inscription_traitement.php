<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['date']) && !empty($_POST['telephone']) && !empty($_POST['candidature']))
    {
        // Patch XSS
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $date = htmlspecialchars($_POST['date']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $candidature = htmlspecialchars($_POST['candidature']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT * FROM prestataire WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($nom) <= 100){ // On verifie que la longueur du nom <= 100
                if(strlen($prenom) <= 100){ // On verifie que la longueur du prénom <= 100
                    if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                            if(strlen($date) <= 100){
                                if(strlen($telephone) <= 100){
                                    if(strlen($candidature) <= 100){



                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO prestataire(nom, prenom, email, date, telephone, candidature) VALUES(:nom, :prenom, :email, :date, :telephone, :candidature)');
                            $insert->execute(array(
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'email' => $email,
                                'date' => $date,
                                'telephone' => $telephone,
                                'candidature' => $candidature
                            ));
                            // On redirige avec le message de succès
                            header('Location:P_Inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: P_Inscription.php?reg_err=nom'); die();}
                    }else{ header('Location: P_Inscription.php?reg_err=prenom'); die();}
                }else{ header('Location: P_Inscription.php?reg_err=email'); die();}
            }else{ header('Location: P_Inscription.php?reg_err=date'); die();}
        }else{ header('Location: p_Inscription.php?reg_err=telephone'); die();}
    }else{ header('Location: P_Inscription.php?reg_err=candidature'); die();}
}

<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']) && !empty($_POST['candidature']))
    {
     
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $candidature = htmlspecialchars($_POST['candidature']);


        // On vérifie si client existe
        $check = $bdd->prepare('SELECT * FROM prestataire WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // Il permet d'ignorer les majuscules et les miniscules
        
       // Si row est égal à 0 ça veut dire que le compte il existe pas
        if($row == 0){ 
            if(strlen($nom) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($prenom) <= 100){
                    if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                            if($password === $password_retype){ // si les deux mdp saisis sont bon

                                    // On hash le mot de passe avec Bcrypt, via un coût de 12
                                    $cost = ['cost' => 12];
                                    $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                        

                                    // On insère dans la base de données
                                    $insert = $bdd->prepare('INSERT INTO prestataire(nom, prenom, email, password, candidature) 
                                    VALUES(:nom, :prenom, :email, :password, :candidature)');
                                    $insert->execute(array(
                                        'nom' => $nom,
                                        'prenom' => $prenom,
                                        'email' => $email,
                                        'password' => $password,
                                        'candidature' => $candidature
                                       ));
                                    // On redirige avec le message de succès
                                    header('Location:P_Inscription.php?reg_err=success');
                                    die();
                                    // Sinon on redirige avec des message d'erreurs
                                }else{ header('Location: P_Inscription.php?reg_err=password'); die();}
                            }else{ header('Location: P_Inscription.php?reg_err=email'); die();}
                        }else{ header('Location: P_Inscription.php?reg_err=email_length'); die();}
                }else{ header('Location: P_Inscription.php?reg_err=prenom_length'); die();}
            }else{ header('Location: P_Inscription.php?reg_err=nom_length'); die();}
        }else{ header('Location: P_Inscription.php?reg_err=already'); die();}
    }

    // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
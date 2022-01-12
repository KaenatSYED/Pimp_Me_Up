<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
      
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        
        // On regarde si l'utilisateur est inscrit dans la table client
        $check = $bdd->prepare('SELECT * FROM prestataire WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors client existe
        if($row == 1)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password =hash('sha256', $password);
                if($data['password'] === $password)
                {
                    
                    $_SESSION['user'] = $data['email'];
                    header('Location: landing.php');
                    
                    die();
                }else{ header('Location: P_Connexion.php?login_err=password'); die(); }
            }else{ header('Location: P_Connexion.php?login_err=email'); die(); }
        }else{ header('Location: P_Connexion.php?login_err=already'); die(); }
    }else{ header('Location: P_Connexion.php'); die();} // si le formulaire est envoyé sans aucune données

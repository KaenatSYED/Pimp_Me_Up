<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['email']))
    {
        $email = htmlspecialchars($_POST['email']);



        // On vérifie si client existe
        $check = $bdd->prepare('SELECT * FROM newsletters WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // Il permet d'ignorer les majuscules et les miniscules
        
        // Si row est égal à 0 ça veut dire que le compte il existe pas
            if($row == 0){ 
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                            
                        // On insère dans la base de données
                        $insert = $bdd->prepare('INSERT INTO newsletters(email) 
                        VALUES( :email)');
                        $insert->execute(array(
                            'email' => $email
                        ));

                        echo "Le mail a été envoyé !";

                    }else{ echo"Le mail n'a pas été envoyé !"; }
                }else{ echo"Le mail est trop long !!!"; }         
            }else{ echo"Le mail existe !!!!!"; }
    }

?>

<br><a href="../index.html">Retour</a>
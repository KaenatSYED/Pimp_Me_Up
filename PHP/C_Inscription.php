<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="../CSS/Form.css">
            <title>Inscription</title>
        </head>
        <body>
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès:</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur:</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur:</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur:</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'utilisateur_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur:</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
<<<<<<< HEAD
                                <strong>Erreur:</strong> compte deja existant
=======
                                <strong>Erreur:</strong> compte déjà existant
>>>>>>> 14dd66f48bc5463a159f0791999149999c5b77f7
                            </div>
                        <?php 

                    }
                }
                ?>
  <!-- Modal Content -->
  <form class="modal-content animate"  action="inscription_traitement.php" method="post">
    <div class="imgcontainer">
        <h1>Inscrivez-Vous</h1>

              <!-- Add font awesome icons -->
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google"></a>

         <p>...</p>
         <p>Ou avec votre compte</p>
    </div>

    <div class="container">
      <label for="utilisateur"><b>Utilisateur</b></label>
      <input type="text" name="utilisateur" placeholder="Entrer votre nom Utilisateur" required="required" autocomplete="off">

      <label for="pseudo"><b>Adresse e-mail</b></label>
      <input type="email" name="email" placeholder="Entrer votre Adresse e-mail" required="required" autocomplete="off">

      <label for="password"><b>Mot de passe</b></label>
      <input type="password" name="password" placeholder="Entrer votre Mot de passe" required="required" autocomplete="off">

      <label for="password_retype"><b>Retaper votre Mot de passe</b></label>
      <input type="password" name="password_retype" placeholder="Entrer à nouveau votre Mot de passe" required="required" autocomplete="off">

      <label>
        <input type="checkbox" id="checkbox" name="remember" required>Si vous cochez ceci, vous acceptez les Conditions utilisation et les reglements de Pimp Me Up.<br>
      </label><br>
      
      <button type="submit">Valider</button>
      

      <a href="C_Connexion.php">Vous avez déja un compte ?</a><br>
      <a href="../html/C_Choix.html">Retour</a>
    </div>
  </form>
</div>

    </body>
</html>
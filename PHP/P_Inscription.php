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
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'nom':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'prenom':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> mot de passe différent
                                </div>
                            <?php
                            break;

                        case 'mail':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'mail_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'telephone':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> numero de telephone incorrect
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
  <!-- Modal Content -->
  <form class="modal-content animate" action="P_inscription_traitement.php" method="post">
    <div class="imgcontainer">
        <h1>Inscrivez-Vous</h1>
        <img src="../img/Avatar.jpeg" alt="Avatar" class="avatar">
    </div>

    <div class="container" >
    <label for="nom"><b>Nom</b></label>
      <input type="text" name="nom" placeholder="Entrer votre nom Utilisateur" required="required" autocomplete="off">
      
      <label for="prenom"><b>Prenom</b></label>
      <input type="text" name="prenom" placeholder="Entrer votre nom Utilisateur" required="required" autocomplete="off">

      <label for="email"><b>Adresse e-mail</b></label>
      <input type="email" name="email" placeholder="Entrer votre Adresse e-mail" required="required" autocomplete="off">

      <label for="password"><b>Mot de passe</b></label>
      <input type="password" name="password" placeholder="Entrer votre Mot de passe" required="required" autocomplete="off">

      <label for="password_retype"><b>Retaper votre Mot de passe</b></label>
      <input type="password" name="password_retype" placeholder="Entrer à nouveau votre Mot de passe" required="required" autocomplete="off">

      <label for="candidature"><b>Pourquoi voulez-vous candidater?</b></label>
      <textarea type="text" name="candidature" placeholder="Je souhaite postuler à cette offre, car..." cols="43" rows="10" required></textarea>

      <label>
        <input type="checkbox" id="checkbox" name="remember" required>Si vous cochez ceci, vous acceptez les Conditions utilisation et les reglements de Pimp Me Up.</br><br>
      </label>

      <button type="submit">Valider</button>

      <a href="P_Connexion.php">Vous avez déja un compte ?</a><br>
      <a href="../html/P_Choix.html">Retour</a>
    </div>
  </form>
</div>

    </body>
</html>
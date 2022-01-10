<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Connexion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="../CSS/Formulaire.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

   <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 

  <!-- Modal Content -->
  <form class="modal-content2 animate" action="P_connexion_traitement.php" method="post">
    <div class="imgcontainer">
        <h1>Connectez-Vous</h1>

       <img src="../img/Avatar.jpeg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label for="uname"><b>Adresse e-mail</b></label>
      <input type="email" placeholder="Entrer votre Adresse e-mail" name="uname" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer votre Mot de passe" name="psw" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember">Se souvenir de moi
      </label><br>
      
      <button type="submit">Valider</button>
      

      <br><a href="P_Pass_Oublier.php">Avez-vous oublié votre mot de passe ?</a><br>
      <a href="P_Inscription.php">Vous n'avez pas de compte ?</a><br>
      <a href="../html/P_Choix.html">Retour</a><br>
    </div>

  </form>
</div>
</body>
</html>




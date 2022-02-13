<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Newsletter </title>
      <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/index.css"><!--path change-->
      <link rel="stylesheet" href="../css/newsletter.css"><!--path change-->

   </head>
   <body class="body">
      <header class="section">
         <nav class="navbar"> </nav>
         <script lang="javascript" src="../javascript/nav_html.js"></script><!--path change-->
      </header>
      <div class="col-2"><br><h1>Bonjour</h1><br>
<?php
    require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['email']))
    {
        $email = htmlspecialchars($_POST['email']);



        // On vérifie si newsletters existe
        $check = $bdd->prepare('SELECT * FROM newsletters WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // Il permet d'ignorer les majuscules et les miniscules


            if($row == 0){ // Si row est égal à 0 ça veut dire que le compte il existe pas
                if(strlen($email) <= 30){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme

                        // On insère dans la base de données
                        $insert = $bdd->prepare('INSERT INTO newsletters(email)
                        VALUES( :email)');
                        $insert->execute(array(
                            'email' => $email
                        ));

                        echo "<p>Merci d'avoir inscrit à notre newsletters, votre mail a bien été envoyé !<p>";

                      }else{ echo"<p>Je suis dans le regret de vous annoncer que l'inscription de la newsletters n'a pas pu être valider pour la raison : Le mail n'est pas de la bonne forme !</p>"; }
                  }else{ echo"<p>Je suis dans le regret de vous annoncer que l'inscription de la newsletters n'a pas pu être valider pour la raison : Le mail est trop long !</p>"; }
              }else{ echo"<p>Je suis dans le regret de vous annoncer que l'inscription de la newsletters n'a pas pu être valider pour la raison : Le mail existe déjà !</p>"; }
    }

?>
<br><a class="retour" href="../html/index.html">Retour</a></div>
    </body>


<footer class="footer"> </footer>
      <script lang="javascript" src="../javascript/footer_html.js"></script><!--path change-->
      <div class="copyright">
         <p><i class='bx bx-registered'></i>2022 Pimp Me Up.</p>
      </div>

<style>
    .col-2 {
    background-color: black;
    margin: 45px auto; /* 15% from the top and centered */
    padding: 0 15px;
    border: 1px solid #888;
    width: 380px; /* Could be more or less, depending on screen size */
    height: 300px;
    color :white;
  }
</style>
</html>

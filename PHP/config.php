<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=pimpmeup;charset=utf8','root','2413069633A');
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>

<?php
    $host = 'localhost';
    $dbname = 'florist';
    $user = 'root';
    $passwd = '';
    try {
        $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $passwd);
        //echo "Connexion réalisée avec succès";
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>
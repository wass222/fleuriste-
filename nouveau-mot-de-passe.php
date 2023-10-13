
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    if ($password === $confirmPassword) {
        // Mot de passe valide, vous pouvez le traiter comme vous le souhaitez

        echo "Mot de passe créé avec succès !";
    } else {
        echo "Les mots de passe ne correspondent pas. Veuillez réessayer.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Créer un nouveau mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="password"], input[type="submit"] {
            padding: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Créer un nouveau mot de passe</h2>
    <form action="nouveau-mot-de-passe.php" method="POST">
        <label for="password">Nouveau mot de passe :</label>
        <input type="password" name="password" id="password" required>
        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
        <input type="submit" value="Créer le mot de passe">
    </form>
</body>
</html>

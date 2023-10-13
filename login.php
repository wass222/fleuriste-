<?php
require_once('dbconnect.php');

function chercher_email($mail,$champs){
  global $connexion;
  $stmt = $connexion->prepare("SELECT * FROM utilisateur WHERE ".$champs."=?");
  $stmt->execute([$mail]); 
  $user = $stmt->fetch();
  if ($user) {
      return true;
  }else{
  return false;
  }
}

function chercher_password($password, $userEmail, $champs){
  global $connexion;
  $stmt = $connexion->prepare("SELECT `id_utilisateur`, `nom_utilisateur`, `email_utilisateur`, `mot_de_passe` FROM utilisateur WHERE ".$champs."=?");
  $stmt->execute([$userEmail]); 
  $hash = $stmt->fetch();   
  if (password_verify($password, $hash['mot_de_passe'])) {
    $_SESSION['id_utilisateur']=$hash['id_utilisateur'];
    return true;
  } else {
    return false;
  }
}

session_start();
include('dbconnect.php');
if(isset($_POST['connecter'])){
  $uname = $_POST['email_utilisateur'];
  $password = $_POST['mot_de_passe'];
  $remember = isset($_POST['remember']);
  
  if (empty($uname)) {
      $resmail='<div class="alert alert-danger " role="alert">
      Champ Email est obligatoire !</div>';
  }elseif (empty($password)) {
      $respw='<div class="alert alert-danger " role="alert">
      Champ mot de passe est obligatoire !</div>';
  }

  $userEmail = (isset($_POST['email_utilisateur'])) ? $_POST['email_utilisateur'] : null;
  $userPassword = (isset($_POST['mot_de_passe'])) ? $_POST['mot_de_passe'] : null;

  if(!empty($userEmail) && !empty($userPassword)){
    if (chercher_email($userEmail, 'email_utilisateur')) {
      if (chercher_password($userPassword, $userEmail, 'email_utilisateur')) {
        $_SESSION['id_utilisateur']=$hash['id_utilisateur'];

        // If "remember me" is checked, set a cookie with the user's email
        if ($remember) {
          setcookie('remember_me', $userEmail, time() + (86400 * 30), "/"); // 30 days
        }

        header('Location: index.php');
      } else {
        echo '<script type="text/javascript">alert("Le mot de passe est invalide."); </script>';
      }
    } else {
      echo '<script type="text/javascript">alert("L\'email n\'existe pas"); </script>';
    }
  }
}

// If the "remember me" cookie is set, fill in the email field
if (isset($_COOKIE['remember_me'])) {
  $rememberedEmail = $_COOKIE['remember_me'];
  echo "<script>document.getElementsByName('email_utilisateur')[0].value = '$rememberedEmail';</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet 06</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style> 
/* styles.css */
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f5f5f5;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  margin: 0;
}

.card {
  width: 400px;
  border: none;
  border-radius: 10px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  padding: 20px;
  transition: all 0.3s ease;
}

.card:hover {
  transform: scale(1.03);
  }

.card-header {
  text-align: center;
  background-color: #f47a7a;
  color: #fff;
  border-radius: 10px 10px 0 0;
  padding: 10px 0;
}

.card-body {
  padding: 20px 0;
}

.form-group {
  margin-bottom: 20px;
}

.input-group {
  width: 100%;
  margin-bottom: 20px;
}

.input-group-prepend {
  background-color: #f47a7a;
  color: #fff;
  border-radius: 10px 0 0 10px;
  padding: 10px;
}

.form-control {
  border-radius: 0 10px 10px 0;
  border: 1px solid #f47a7a;
  padding: 10px;
}

.login_btn {
  background-color: #f47a7a;
  color: #fff;
  width: 100%;
  border: none;
  border-radius: 10px;
  padding: 15px;
  cursor: pointer;
  font-weight: bold;
  transition: all 0.3s ease;
}

.login_btn:hover {
  background-color: #d24343;
}

.remember {
  margin-bottom: 15px;
}

.links a {
  color: #f47a7a;
  text-decoration: none;
  margin-right: 10px;
  transition: color 0.3s ease;
}

.links a:hover {
  color: #d24343;
}

.g-recaptcha {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}  
        </style>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<!-- Add necessary CSS and JS files here -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
  <div class="container">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Sign In</h3>
        </div>
        <div class="card-body">
          <form action="login.php" method="post">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Email" name="email_utilisateur" required>
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="Password" name="mot_de_passe" required>
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox" name="remember">Remember Me
            </div>
            <div class="form-group">
              <input type="submit" value="Login" class="btn float-right login_btn" name="connecter">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            Don't have an account?<a href="inscription.php">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="mot-de-passe-oublie.php">Forgot your password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>


<?php
require_once('dbconnect.php');
require_once('config.php');
?>
<?php
if (isset($_POST['signup_submit'])) {
  $nom_utilisateur = $_POST['nom_utilisateur'];
  $email_utilisateur = $_POST['email_utilisateur'];
  $mot_de_passe = $_POST['mot_de_passe'];
  $confirmepassw = $_POST['confirmepassw'];
  $stmt = $connexion->prepare("SELECT * FROM utilisateur WHERE email_utilisateur= :email_utilisateur");
  $stmt->execute(['email_utilisateur' => $email_utilisateur]); 
  $user = $stmt->fetch();

  if ($user) {
    
    echo 'Cet email est déjà utilisé.';
  } else {

    $stmt = $connexion->prepare('INSERT INTO utilisateur (nom_utilisateur, email_utilisateur, mot_de_passe) VALUES ( :nom_utilisateur ,  :email_utilisateur, :mot_de_passe )');
    $stmt->execute(array(
      
      'nom_utilisateur' => $nom_utilisateur,
      'email_utilisateur' => $email_utilisateur,
      'mot_de_passe' => password_hash($mot_de_passe, PASSWORD_DEFAULT),
     
    
    ));
    header('Location: login.php');
    exit();
  }
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

.main {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  margin: 0;
}

.signup {
  width: 400px;
}

.signup-content {
  border: none;
  border-radius: 10px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  padding: 20px;
  transition: all 0.3s ease;
}

.signup-content:hover {
  transform: scale(1.03);
}

.form-title {
  text-align: center;
  background-color: #f47a7a;
  color: #fff;
  border-radius: 10px 10px 0 0;
  padding: 10px 0;
}

.form-group {
  margin-bottom: 20px;
}

.form-input {
  width: 100%;
  border: 1px solid #f47a7a;
  border-radius: 10px;
  padding: 10px;
}

.field-icon {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}

.form-submit {
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

.form-submit:hover {
  background-color: #d24343;
}

.loginhere {
  text-align: center;
  margin-top: 20px;
}

.loginhere-link {
  color: #f47a7a;
  text-decoration: none;
  transition: color 0.3s ease;
}

.loginhere-link:hover {
  color: #d24343;
}

           
           
         

        



        </style>
<body>
  <div class="main">
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <form method="POST" id="signup-form" class="signup-form">
            <h2 class="form-title">Create account</h2>
            <div class="form-group">
              <input type="text" class="form-input" name="nom_utilisateur" id="nom_utilisateur" placeholder="Your Name" required/>
            </div>
            <div class="form-group">
              <input type="email" class="form-input" name="email_utilisateur" id="email_utilisateur" placeholder="Your Email" required/>
            </div>
            <div class="form-group">
              <input type="password" class="form-input" name="mot_de_passe" id="mot_de_passe" placeholder="Password" required/>
              <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
              <input type="password" class="form-input" name="confirmepassw" id="confirmepassw" placeholder="Repeat your password" required/>
            </div>

            <div class="form-group">
              <input type="submit" name="signup_submit" id="submit" class="form-submit" value="Sign up"/>
            </div>
            <p class="loginhere">
              Have already an account? <a href="login.php" class="loginhere-link">Login here</a>
            </p>
          </form>
        </div>
      </div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/4d3ae3eaa5.js" crossorigin="anonymous"></script>
</body>
</html>
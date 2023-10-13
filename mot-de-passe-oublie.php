<?php
session_start();
require 'dbconnect.php';
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if (isset($_POST['btnSubmit'])) {
    // Get email from the form
    $email_utilisateur = isset($_POST['email_utilisateur']) ? $_POST['email_utilisateur'] : null;

    // Check if the email is not empty
    if (!empty($email_utilisateur)) {
        // Check if the email exists in the database
        $stmt = $connexion->prepare('SELECT COUNT(*) FROM utilisateur WHERE email_utilisateur = ?');
        $stmt->execute([$email_utilisateur]);
        $emailExists = $stmt->fetchColumn();

        if ($emailExists) {
            // Create a new PHPMailer instance
            $mail = new PHPMailer(true);

            // Server settings
            $mail->SMTPDebug = 0; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'wassimosbenfraj@gmail.com'; // SMTP username
            $mail->Password = 'skawxctlbjwezlyg'; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable SSL encryption
            $mail->Port = 465; // TCP port to connect to

            // Sender and recipient
            $mail->setFrom('wassimosbenfraj@gmail.com', 'florist');
            $mail->addAddress($email_utilisateur); // Add a recipient

            // Email content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Password Reset';
            $mail->Body = 'Please click the link below to reset your password: <br><a href="nouveau-mot-de-passe.php">Reset Password</a>';

            // Send the email
            try {
                $mail->send();
                echo 'Email sent successfully!';
            } catch (Exception $e) {
                echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
            }
        } else {
            echo 'Email not found in the database.';
        }
    } else {
        echo 'Email field is empty.';
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Main css -->
    
</head>
<style>
  /* styles.css */
body {
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
  <div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="forgot">
          <h2>Forgot your password?</h2>
          <p>Change your password in three easy steps. This will help you to secure your password!</p>
          <ol class="list-unstyled">
            <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
            <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
            <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
          </ol>
        </div>	
        <form class="card mt-4" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="email-for-pass">Enter your email address</label>
              <input class="form-control" type="text" name="email_utilisateur" required=""><small class="form-text text-muted"></small>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-success" type="submit" name="btnSubmit">Get New Password</button>
            <a href="login.php" class="btn btn-danger">Back to Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>



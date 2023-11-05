<?php
session_start();
require_once('connection.php');

if ('Connection') {
  if (!empty($_POST)) {
    if ((!empty($_POST['email1'])) && (!empty($_POST['password1']))) {
      if (isset($_POST['email1']) && isset($_POST['password1'])) {

        $query = $db->prepare('SELECT email,nom,password FROM etudiant WHERE email = :email AND password = :password');
        $query->execute([
          ':email' => $_POST['email1'],
          ':password' => md5($_POST['password1'])
        ]);
        $user = $query->fetch();
        if ($user==true) {
          $_SESSION['loggedIn'] = true;
          $_SESSION['email'] = $user['email'];
          $_SESSION['nom'] = $user['nom'];

          header('location: ../profil.php');
          
          
        } else {
          $_SESSION['error'] = "mot de passe ou email incorrects";
          header('location: ../index.php');
        }
      }
    }
  }
}
?>

 

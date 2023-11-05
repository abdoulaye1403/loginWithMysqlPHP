<?php
 session_start();
require_once('connection.php');

if(isset($_SESSION['loggedIn']) and $_SESSION['loggedIn']==true){
  header('location: ../profil.php');
}

  if('enregister'){
    if(!empty($_POST)){
      if((!empty($_POST['nom'])) && (!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['genre']))){
        if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['genre'])){
          $password = md5($_POST['password']);
          $nom = $_POST['nom'];
          $email = $_POST['email'];
          $genre = $_POST['genre'];

        $query = $db->prepare('INSERT INTO etudiant(id,nom,email,password,genre) VALUES (NULL,:nom,:email,:password,:genre)');
        $query->execute(
          [
            ':nom' => $nom,
            ':email' => $email,
            ':password' => $password,
            ':genre' => $genre,
          ]
        );    
        $_SESSION['succes']= "Compte creer avec succes connectez-vous";         
        header('location: ../index.php');

          }
            
      }else{
        $_SESSION['error1'] =  "Veuillez remplir tous les champs";
        header('location: ../index.php');
      } 
    }   
  }
?>

 

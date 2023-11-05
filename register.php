<?php
 session_start();
 if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true) {
  header('location: profil.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login_with_mysql</title>
  <link rel="stylesheet" href="./Assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./Assets/css/style.css">
</head>
<body>
<h1 class="mt-5 text-center">Créer un compte</h1>
<?php  
    if(isset($_SESSION['error'])){
      ?>
      <span class="text-danger  d-block small mb-3 text-center">
        <?php  echo $_SESSION['error']; ?>

      </span>
      <?php 
      unset($_SESSION['error']);
    }
  
  ?>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6  mt-5">
        <img src="Assets/images/register.webp" alt="photo" class="w-100  p-3 mt-3 ">
      </div>
      <div class="col-md-6 mt-3 p-1">
          <form action="data/register.php" method="post" >
               <fieldset>
                 <legend>Formulaire d'inscription</legend>
                 <div class="form-group">
                   <label for="nom">Entrez votre nom :</label>
                   <input type="text" class="form-control mt-1 mb-1" id="nom" name="nom" placeholder="Abdoulaye" required>
                 </div>                
                 <div class="form-group">
                   <label for="email">Entrez votre mail :</label>
                   <input type="email" class="form-control mt-1 mb-1" id="email" name="email" placeholder="abdelraul@yahoo.fr" required>
                 </div>
                 <div class="form-group">
                   <label for="password">Entrez votre mot de passe :</label>
                   <input type="password" class="form-control mt-1 mb-2" id="password" name="password" placeholder="mot de passe" required>
                 </div>
                 <div class="form-group mb-3">
                  <label for="genre">Choisissez votre sexe :</label>
                  <select name="genre" id="genre" >
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Feminin</option>
                   </select>
                 </div>
                 <input type="submit" value="Créer votre Compte" class="btn btn-primary w-100 mt-1">
                 <p class="p-2 m-2">Déjà membre ? <a href="index.php">Connectez-vous</a></p>
            </form>         
      </div>
    </div>
  </div>
<link rel="stylesheet" href="./Assets/bootstrap/js/bootstrap.min.js">
<script src="Assets/js/script.js"></script>
</body>
</html>

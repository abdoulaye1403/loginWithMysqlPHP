<?php    
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Assets/bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <!-- <link rel="stylesheet" href="Assets/css/style.css"> -->
  <title>Home</title>

  <style>
    html,
body {
  height: 100%
}

body {
  background-color: gainsboro;
}

p{
  font-size: 20px;
}
.material-icons{
  display: block;
  font-size: 150px;
}
  </style>
</head>
<body>
  
   

  <?php  
    if(isset($_SESSION['nom']) && isset($_SESSION['email']) && isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
      ?>
      <div class="container h-100 d-flex justify-content-center align-items-center">
        
          <div class="col-md-6">
            <div class="text-center">
              <span class="material-icons p-5">account_circle</span> 
              <p><?php echo "Bienvenue M ".$_SESSION['nom']; ?></p>
              <p><?php echo $_SESSION['email']; ?></p>
            </div>
            <a href="data/logout.php"><input type="submit" value="Déconnexion" class="btn btn-danger w-100 mt-1 mb-1"></a>
          </div>
          
        
       </div> 

      <?php 
      
    }else{
      $_SESSION['error']= "Veuillez creer un compte svp ou connectez-vous";
      header('location: index.php');
    }
  ?>
            
  
</body>
</html>

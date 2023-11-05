<?php    
  session_start();
  
  if(isset($_SESSION['loggedIn']) and $_SESSION['loggedIn']==true){
    header('location: profil.php');
  } 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>gestionSession</title>
      <meta charset="utf-8" />
      <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->
      <style>body{padding-top: 60px;}</style>
      <link href="./Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
      <link href="./Assets/css/login-register.css" rel="stylesheet" />
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-2 "></div>
        <div class="col-sm-8 d-flex justify-content-center align-content-center">
           <a class="btn big-login m-3 d-block " data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Connectez-vous</a>
           <a class="btn big-register m-3 d-block" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Créer un compte</a>
        </div>
      <div class="col-sm-2 "></div>
    </div>
    <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h4 class="modal-title m-3"></h4>
          </div>
          <div class="modal-body">
            <div class="box">
              <div class="content">
                <div class="social">
                  <a class="circle github" href="#">
                    <i class="fa fa-github fa-fw"></i>
                  </a>
                  <a id="google_login" class="circle google" href="#">
                    <i class="fa fa-google-plus fa-fw"></i>
                  </a>
                  <a id="facebook_login" class="circle facebook" href="#">
                    <i class="fa fa-facebook fa-fw"></i>
                  </a>
                </div>
                <div class="division">
                  <div class="line l"></div>
                    <span>ou</span>
                  <div class="line r"></div>
                </div>
                
                <div class="form loginBox">
                  <div>
                  

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

                  <?php  
                      if(isset($_SESSION['succes'])){
                        ?>
                        <span class="text-success  d-block small mb-3 text-center">
                          <?php  echo $_SESSION['succes']; ?>
                        </span>
                        <?php 
                        unset($_SESSION['succes']);
                      }
                    
                  ?>
                  </div>
                  <form method="post" action="data/login.php" accept-charset="UTF-8">
                  <div class="form-group">
                   <label for="email1">Entrez votre mail :</label>
                   <input type="email" class="form-control mt-1 mb-1" id="email1" name="email1" placeholder="abdelraul@yahoo.fr" required>
                 </div>                 
                    <div class="form-group">
                      <label for="password1">Entrez votre mot de passe :</label>
                      <input type="password" class="form-control mt-1 mb-1" id="password1" name="password1" placeholder="mot de passe" required>
                      </div>
                    <input class="btn btn-default btn-login" type="submit" value="Connectez-vous"  name="Connection">
                  </form>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="content registerBox" style="display:none;">
              <div>
                  <?php  
                      if(isset($_SESSION['error1'])){
                        ?>
                        <span class="text-danger  d-block small mb-3 text-center">
                          <?php  echo $_SESSION['error1']; ?>
                        </span>
                        <?php 
                        unset($_SESSION['error1']);
                      }
                    
                  ?>

                  
                  
                </div>
                <div class="form">
                  <form method="post" html="{:multipart=>true}" data-remote="true" action="data/register.php" accept-charset="UTF-8">
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
                  <input class="btn btn-default btn-register" type="submit" name="enregister" value="Créer">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>Vous cherchez
                <a href="javascript: showRegisterForm();">créer un compte</a>
              </span>
            </div>
            <div class="forgot register-footer" style="display:none">
              <span>avez-vous déjà un compte?</span>
              <a href="javascript: showLoginForm();">Connection</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="./Assets/bootstrap/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="./Assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/login-register.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script> 

</body>
</html>

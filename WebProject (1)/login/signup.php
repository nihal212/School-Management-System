<!DOCTYPE html>
<html>
<head>
	<title>s'inscrire</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
</head>
<body>
   <header class="loginR">
      <img href="ensa.png" />
      <nav class="navigation">
        <a class="n" href="#">Accueil</a>
        <a class="n" href="#">A propos de nous</a>
        <a class="n" href="#">Services</a>
        <a class="n" href="#">Contact</a>
        <!-- <buttona class="btnLogin-popup">connexion</buttona> -->
      </nav>
    </header>

     <form  class="form-box register" action="signup-check.php" method="post">
     	<h2>s'inscrire</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


          <div class="input-box">
        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname"><br>
          <?php }?>
          <label>Nom et prenom</label>
          </div>

          <div class="input-box">
        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" name="email"><br>
          <?php }?>
          <label>Email</label>
          </div>


          <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
     	<input type="password" 
                 name="password" ><br>
                 <label>Mot de passe</label>
           </div>


      <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <input type="password" name="re_password"><br>
          <label>Confirmer le mot de passe</label>
      </div>
      <div class="input-box">
          <input list="role" name="role">
          <datalist id="role">
            <option value="Adiminstrateur">
            <option value="Professeur">
            <option value="Coordinateur">
            <option value="Chef de departement">
          </datalist>
          <label for="role"> Choisir votre role </label>

       </div>
     	<button type="submit">S'inscrire</button>
          <a href="index.php" class="ca">Avez-vous deja un compte ?</a>
     </form>
</body>
</html>
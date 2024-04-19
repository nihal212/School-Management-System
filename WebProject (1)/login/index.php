<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
   <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
</head>
<body>
    <header class="ha" class="loginH">
    <img  href="ensah.png" />
      <nav class="navigation">
        <a class="n" href="#">Accueil</a>
        <a class="n" href="#">A propos de nous</a>
        <a class="n" href="#">Services</a>
        <a class="n" href="#">Contact</a>
        <!-- <buttona class="btnLogin-popup">connexion</buttona> -->
      </nav>
    </header>
   <section>
    <form class="form-box login" action="login1.php" method="post">
     	<h2>Connexion</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
	   <div class="input-box">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <input type="email" name="email" /><br />
          <label>Email</label>
      </div>
      <div class="input-box">
          <span class="icon"
          ><ion-icon name="lock-closed-outline"></ion-icon
          ></span>
          <input type="password" name="password" /><br />
          <label>Mot de passe</label>
      </div>
     	<button type="submit">se connecter</button>
      <a href="signup.php" class="ca">Creer un nouveau compte</a>
  </form>
 </section>
</body>
</html>
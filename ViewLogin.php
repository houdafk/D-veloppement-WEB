<?php session_start(); ?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <link rel="shortcut icon " href="logonav.png">
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="ControllerLogin.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="UsernameS" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="PasswordS" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>".$_SESSION["jj"]."</p>";
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
            <p style='color:red'><?php echo $_SESSION["jj"]; ?></p>
        </div>
    </body>
    <br><br><br><br>
    <footer class="groupe13">
       <!-- Section: Text -->
          <section class="mb-4">
          </section>
          <!-- Section: Text --><br><br><br><br>

       
          <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank"
                  ><i class="fab fa-facebook-f"></i
                ></a>
          
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank"
                  ><i class="fab fa-instagram"></i
                ></a>
          
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
          
                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button" target="_blank"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
              <!-- Section: Social media -->
        
          
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Internshipy.com - Copyright: CESI EXIA © 2022 tous droits réservés.  
            <br>  Mentions légales | Licences et copyrights | Contact
        </div>
     
        <!-- Copyright -->
    </footer>
</html>
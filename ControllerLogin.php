<?php
session_start();
if(isset($_POST['UsernameS']) && isset($_POST['PasswordS']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'web';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $UsernameS = $_POST['UsernameS']; 
    $PasswordS = $_POST['PasswordS'];
    
    if($UsernameS !== "" && $PasswordS !== "")
    {
        $requete = "SELECT count(*) as ".'h'." FROM student where UsernameS = '".$UsernameS."' and PasswordS = '".$PasswordS."' ";
        $exec_requete = mysqli_query($db,$requete);
        if (!$exec_requete) {
         printf("Error: %s\n", mysqli_error($db));
         exit();
     }
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['h'];
        echo $count;
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['UsernameS'] = $UsernameS;
           header('Location: principale.php');
        }
        else
        {
           $_SESSION["jj"] = $count;
           header('Location: ViewLogin.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
      $_SESSION["jj"] = $count;
       header('Location: ViewLogin.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: ViewLogin.php');
}
mysqli_close($db); // fermer la connexion
?>
<?php  
    if (isset($_POST['bouton-connexion'])) {
        if(isset($_POST['email']) && isset($_POST['motdepasse'])) {

            $email = $_POST['email'];
            $mot_depasse = $_POST['motdepasse'];
            $erreur = "";
        
            $nom_server = "localhost";
            $utilisateur = "root";
            $mdp = "";
            $nom_bd = "flashtravel";
            $con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);
        
             $req = mysqli_query($con , "SELECT * FROM administrateur WHERE email='$email' AND mdp='$mot_depasse'");
             $numlign = mysqli_num_rows($req);
             if ($numlign > 0) {
                 header("Location:acceuil.php");
             } else {
                 $erreur = "Mot de passe ou email incorrect!";
             }
         } 
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion administrateur</title>
    <link rel="stylesheet" href="css/styleconn.css">
</head>
<body>
    <section>
        <h1>Connexion</h1>

        <?php  
            if(isset($erreur)) {
                echo "<p class='erreur'>".$erreur."</p>";
            }
        ?>

        <form action="" method="POST">
            <label>Adresse mail</label>
            <input type="email" name="email">
            <label>Mot de passe</label>
            <input type="password" name="motdepasse">
            <input type="submit" value="Connexion" name="bouton-connexion">
            
        </form>
    </section>
</body>
</html>
<?php
if (isset($_POST['bouton-connexion'])) {
    header("Location:connexionad.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription administration</title>
    <link rel="stylesheet" href="css/styleconn.css">
    
</head>
<body>
    
    
    <section>
    
        <h1>Inscription</h1>
        <h4>Veuillez entrer vos informations</h4>
        <?php
            if (isset($_POST['email']) && isset($_POST['motdepasse'])) {
                require "inscriptionad.php";
                echo $_RSV->save($_POST['email'], $_POST['motdepasse'])
                ? "<p class='correct'>Compte cree avec succes!</p>" : "<p>".$_RSV->error."</p>";
            }
        ?>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" required>
            <label>Prenom</label>
            <input type="text" name="prenom" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Mot de passe</label>
            <input type="password" name="motdepasse" required>
            <input type="submit" value="Creer le compte" name="bouton-inscription">
            
        </form>
        <form action="" method="post">
            <input type="submit" value="Se connecter" name="bouton-connexion">
        </form>
    </section>
</body>
</html>
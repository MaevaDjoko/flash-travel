<?php
session_start();
if(isset($_POST['Envoyer'])){
    //extraction des variables
    extract($_POST);
    //verifie si les variables existent et ne sont pas vides
    if(isset($username) && $username != "" &&
       isset($email) && $email != "" &&
       isset($telephone) && $telephone != "" &&
       isset($message) && $message != "" ){
        //envoye l'email
        //l'email du destinataire
        $to = "kuissitchuenkam@outlook.com";
        //objet du mail
        $subject = "Vous avez recu un message de : " . $mail;

        $message = "
            <p> Vous avez recu un message de <strong> ".$email."</strong></p>
            <p><strong>Nom : </strong>".$username."</p>
            <p><strong>Telephone : </strong>".$telephone."</p>
            <p><strong>Message : </strong>".$message."</p>
        ";
         
        //Always set content-type when sending HTML email
        $headers = "MIME-version: 1.0" . "\r\n";
        $headers .= "content-type:text/html;charset=UTF8" . "\r\n";

        //More headers
        $headers .= 'From: <'.$email.'>' . "\r\n";

        //envoi du mail
        $Envoyer = mail($to,$subject,$message,$headers);
        //verification de l'envoi
        if($send){
            $_SESSION['succes_message'] = "message envoyé";
            
        }else {
            $info = "message non envoyé";
        }



    }else {
        //si elles sont vides
        $info = "veuillez remplir tous les champs !";
    }      
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">    
    <link rel="stylesheet" href="contact.css">
    <title> Contact us</title>
</head>
<body>
    <?php
       // afficher le message d'erreur
       if(isset($info)){ ?>
            <p class="request_message" style="color:red">
                <?=$info?>
            </p>
        <?php    
       }
    ?>

    <?php
       // afficher le message de succes
       if(isset($_SESSION['succes_message'])){ ?>
            <p class="request_message" style="color:green">
                <?=$_SESSION['succes_message']?>
            </p>
        <?php    
       }
    ?>
    <p class="request_message">
        message envoyé !
    </p>
    <form>
        <h1>contacte-nous</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
            <div class="gauche">
                <div class="groupe">
                    <label>votre Nom</label>
                    <input type="text">
                    <i class="fas fa-user"></i>
                </div>
                <div class="groupe">
                    <label>Votre Email</label>
                    <input type="text">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="groupe">
                    <label>telephone</label>
                    <input type="text">
                    <i class="fas fa-mobile"></i>
                </div>
            </div>
            <div class="droite">
                <div class="groupe">
                    <label>Message</label>
                    <textarea placeholder="saisissez ici..."></textarea>
                </div>
            </div>
        </div>
        <div class="pied-formulaire" align="center">
            <button>Envoyer le  Message</button>
        </div>
    </form>
</body>
</html>
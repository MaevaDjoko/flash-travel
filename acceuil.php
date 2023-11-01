
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="logo">
            <a href=""><img src="img/log.JPG" alt="" width="90" height="50"></a>
        </div>
        <ul class="menu">
            <li><a href="index.php" class="a1">Accueil</a></li>
            <li><a href="ajouterb.php" class="a1">Ajouter un billet</a></li>
           
            <li><a href="afficherb.php" class="a1">Liste des tickets</a></li>
            <!-- <li><a href="connexion.php" class="a1" alt="" width="30" height="30" class="btn-reservation">Connexion</a></li> -->
        </ul>
        
        <div class="responsive-menu"></div>
    </header>
    <!-- acceuil section-->
    <section id="home">
        <h2>Nous suivre</h2>
        <h4>Voyagez en securite</h4>
        <p>Votre agence sure du Cameroun</p>
        <p>Marre de faire la queue dans les agences pour ne finalement pas avoir de tickets?</p>
        <a href="ajouterb.php" class="btn-reservation home-btn">Reserver Maintenant</a>
    </section>

    <!-- div à propos-->
    <div id="about">
        <h3> à propos </h3>
        <hr id="hr1">
        <div id="bloc">
            <p id="text">
                <span> L'agence de voyage FLASH-Travel est une société commerciale dans le domaine du transport
                    interurbain au cameroun faisant les lignes
                    Douala-Yaounde, Douala-Bafoussam, Yaounde-Douala, Yaounde-Bafoussam; Tres opérationnelle et tres
                    réguliere sur ces lignes par ses bus variés
                    donc certains sont VIP. <br> Grace à notre agence de voyage en ligne, on peut choisir de payer des
                    tickets comme dans une agence réelle.
                    Pour acheter un ticket dans une agence, FLASH-Travel a établi des normes auxquelles chaque
                    passagers doit se soumettre. Ainsi chaque passager
                    doit se munir d'une piece d'identité(carte d'identité, passeport ou autres), faire le choix de sa
                    destination et de faire le choix du type
                    de bus souhaité. <br> L'acheteur peut , ensuite, remplir un bon et payer sa commande par carte
                    bancaire ou par un autre moyen de paiement.
                    La commmande sera livrée en fonction du choix de l'internaute et selon les modalités définies par
                    le responsable de la boutique.
                </span>
            </p>
            <p id="text2">
                <img src="img/apropos.jpeg" alt="" width="400" height="310" top="0">
            </p>
        </div>
    </div>

    <!-- div destination -->
    <div id="presentation">
        <h3> Nos Destinations </h3>
        <hr>
        <ul class="items">
            <li id="li1">
                <h5>Douala-Yaounde </h5>
                <p>Depart: 8h, 12h et 17h </p> <br>
            </li>
            <li id="li2">
                <h5>Douala-Bafoussam</h5>
                <p>Depart: 5h, 14h et 18h </p><br>
            </li>
            <li id="li3">
                <h5>Yaounde-Bafoussam</h5>
                <p>Depart: 8h, 12h et 17h </p><br>
            </li>
        </ul>
        <ul class="items">
            <li id="li4">
            <h5>Yaounde-Douala</h5>
            <p>Depart: 9h, 13h et 18h </p><br>
            </li>
            <li id="li5">
                <h5>Bafoussam-Douala</h5>
                <p>Depart: 6h, 15h et 19h </p><br>
            </li>
            <li id="li6">
                <h5>Bafoussam-Yaounde</h5>
                <p>Depart: 8h, 12h et 17h </p><br>
            </li>
        </ul>
    </div>
    <br> <br>

    <!-- contact par mail -->

    <!-- <div id="contact">
     <p class="request_message">
            message envoye!
        </p> 
        <form action="" method="POST">
            <h2>Contactez-nous</h2>
            <label>Votre nom</label>
            <input type="text" name="nom" required>
            <label>Email</label>
            <input type="email"name="email" required>
            <label>Telephone</label>
            <input type="number"name="tel" required>
            <textarea name="votre message" cols="30" rows="10" required>Votre message</textarea>
            <button name="envoyer">Envoyer</button>
        </form>
    </div> -->   
    <!-- contact -->
    <footer id="bas">
        <div id="fooo">
        <ul class="itfoot">
            <li>
                <h2>Douala</h2>
                <img class="img1" src="img/delete.png" alt="" width="90" height="40">
                <p>Bonamoussadi, Carrefour Eto'o</p> <br>
                <p>Lun - Dim 4.00 - 22.00</p> <br>
                <p>+237 693334333</p> <br>
            </li>
            <li>
                <h2>Yaounde</h2>
                <img class="img1" src="img/delete.png" alt="" width="90" height="40">
                <p>Bonamoussadi, Carrefour Eto'o</p> <br>
                <p>Lun - Dim 4.00 - 22.00</p> <br>
                <p>+237 693334333</p> <br>
            </li>
            <li>
                <h2>Bafoussam</h2>
                <img class="img1" src="img/delete.png" alt="" width="90" height="40">
                <p>Bonamoussadi, Carrefour Eto'o</p> <br>
                <p>Lun - Dim 4.00 - 22.00</p> <br>
                <p>+237 693334333</p> <br>
            </li>
        </ul>
        </div>    
       <div id="foo">
        <p>
            <span><a href="mailto:nrachelalicenelly@gmail.com"><img class="img" src="img/gmail.png" alt="" width="30" height="30"></a></span>
            <span><a href="https://www.instagram.com/_raaline_/"><img class="img" src="img/instagram.png" alt="" width="30" height="30"></a></span>
            <span><a href="https://www.facebook.com/alice.tchock"><img class="img" src="img/facebook.png" alt="" width="30" height="30"></a></span>
        </p>
       </div>
                
    </footer>

    <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick = function () {
            toggle_menu.classList.toggle('active');
            menu.classList.toggle('responsive')
        }
    </script>
</body>

</html>
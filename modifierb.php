<?php
					$nom_server = "localhost";
					$utilisateur = "root";
					$mdp = "";
					$nom_bd = "flashtravel";
					$con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);

					$resultat = mysqli_query($con , "SELECT `nom`, `prenom`, `tel`, `cni`, `datedepart`, `heuredepart`, `type`, `prixticket`, `bagage`, `date`, `iddep`, `depart`, `arrivee` FROM `voyageur` WHERE cni='" .$_GET["numcni"] ."'");
					if($resultat) {
						$row = mysqli_fetch_array($resultat);
                        echo "<div class='formulaire'>";
                        echo "<form action='afficherb.php' method='POST'>";
            
                            echo "<label>Nom</label>";
                            echo "<input type='text' name='nom' placeholder='Ex: Kuiss' class='form-nom' value='" .$row["nom"]. "' required>";
            
                            echo "<label>Prénom</label>";
                            echo "<input type='text' name='prenom' placeholder='Ex: beril' class='form-prenom' value='" .$row["prenom"]. "' required>";
            
                            echo "<label>Numero de tel</label>";
                            echo "<input type='text' name='num' placeholder='numero' class='form-tel' value='" .$row["tel"]. "' required>";
                            
                            echo "<label>Numero de CNI</label>";
                            echo "<input type='text' name='cni' placeholder='cni' class='form-cni' value='" .$row["numcni"]. "' required>";
            
                            echo "<label>Date du jour</label>";
                            echo "<input type='date' name='date'  class='form-to' value='" .$row["date"]. "' required>";
            
                            echo "<label>Type</label>";
                            echo "<input type='text' name='type' placeholder=' vip ou classique ' class='form-aller' value='" .$row["type"]. "'>";
                            
                            echo "<label>DepartureDate</label>";
                            echo "<input type='date' name='dep'  class='form-DepartureDate' value='" .$row["datedep"]. "'>";
            
                            echo "<label>Heure depart</label>";
                            echo "<input type='text' name='heure' class='form-Return' value='" .$row["heureDepart"]. "'>";
            
                            echo "<label>Prix-ticket</label>";
                            echo "<input type='text' name='prix' class='form-Prix' value='" .$row["prix"]. "'>";
                            
                            echo "<label>bagages ? :</label>";
                            echo "<input type='text' name='bg' class='form-bagage' value='" .$row["bagage"]. "'>";
            
                            echo "<label>ID deplacement :</label>";
                            echo "<input type='text' name='id' class='form-annee' value='" .$row["id"]. "'>";
                            
                            echo "<label>Depart :</label>";
                            echo "<input type='text' name='d' class='form-depart' value='" .$row["villeDepart"]. "'>";
            
                            echo "<label>Arrivee :</label>";
                            echo "<input type='text' name='a' class='form-arr' value='" .$row["villeArrivee"]. "'>";
            
                            echo "<input type='hidden' name='cniOrigine' value=' ".$_GET['numcni']." '>";
                            echo "<input type='submit' name='bouton-modifier' class='submit' value='Modifier'>";
                        echo "</form>";
                    echo "</div>"; 
                }
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href="css/bootstrap.css"/>
	<link rel ="stylesheet" href="css/style1.css"/>
	<link rel ="stylesheet" href="css/style4.css"/>
	<link rel ="stylesheet" href="css/style.css"/>
    <title>Modifier billet</title>
</head>
<body>
<header>
        <div class="logo">
            <a href=""><img src="img/log.JPG" alt="" width="90" height="50"></a>
        </div>
        <ul class="menu">
            <li><a href="acceuil.php" class="a1">Accueil</a></li>
            <li><a href="ajouterb.php" class="a1">Ajouter un billet</a></li>
           
            <li><a href="afficherb.php" class="a1">Liste des tickets</a></li>
            <!-- <li><a href="connexion.php" class="a1" alt="" width="30" height="30" class="btn-reservation">Connexion</a></li> -->
        </ul>
        
        <div class="responsive-menu"></div>
    </header>
		
	 <!-- ............................................................................... -->
	<section id="reserve">
	<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Reservation en ligne</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1. Reservation
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								Reservation
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. Dates</h3>
							</div>
							<div class="panel-body">
								Dates et Tarifs
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. Information Client</h3>
							</div>
							<div class="panel-body">
								Information Client
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. Billet</h3>
							</div>
							<div class="panel-body">
								Billet Totalement
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
	<?php  
            if(isset($erreur)) {
                echo "<p class='erreur'>".$erreur."</p>";
            }
?>

</body>
</html>
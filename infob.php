<?php
if(isset($_POST['bouton-valider'])) {
    $nom_server = "localhost";
    $utilisateur = "root";
    $mdp = "";
    $nom_bd = "flashtravel";
    $con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);
	
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$tel = $_POST['num'];
	$numcni = $_POST['cni'];
	$datedepart = $_POST['dep'];
	$heuredepart = $_POST['heure'];
	$type = $_POST['type'];
	$prixticket = $_POST['prix'];
	$bagage = $_POST['bg'];
	$date = $_POST['date'];
	$iddep = $_POST['id'];
	$depart = $_POST['d'];
	$arrivee = $_POST['a'];

    $req = "INSERT INTO voyageur(`nom`, `prenom`, `tel`, `numcni`, `datedepart`, `heuredepart`, `type`, `prixticket`, `bagage`, `date`, `iddep`, `depart`, `arrivee`) VALUES
    ('$nom', '$prenom', '$tel', '$numcni', '$datedepart', '$heuredepart', '$type', '$prixticket', '$bagage', '$date', '$iddep', '$depart', '$arrivee')";

	if(mysqli_query($con, $req)) {
        echo "enregistrement cree avec succes";
        //header("Location:billet.php");
	} else {
		echo "erreur lors de l'insertion ".mysqli_error($con);
	}
	mysqli_close($con);
}
?>

<!DOCTYPE html>
  <html>
  <head>
      <title></title>
	   <meta charset="utf-8"/>
	    <meta http-equiv="X-UA-Comatible" content="IE=edge"/>
	  <meta name="viewport" content="width=device-width,initial-scale=1"/>
	       <link rel ="stylesheet" href="css/bootstrap.css"/>
	       <link rel ="stylesheet" href="css/style1.css"/>
		   <link rel ="stylesheet" href="css/style4.css"/>
		   <link rel ="stylesheet" href="css/style.css"/>
		   <link rel ="stylesheet" href="css/style2.css"/>
		   <script src="css/script.js"></script>
		   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	   
 </head>
<body>


         <!-- ......................................................................... -->
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
								<a href="" class="panel-title">3.Reserver Maintenant</a>
								<!--<div class="panel-title"></div>-->
								
								<!--<h3 class="panel-title">3. Information Client</h3>-->
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

					<?php
					$nom_server = "localhost";
					$utilisateur = "root";
					$mdp = "";
					$nom_bd = "flashtravel";
					$con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);

					$resultat = mysqli_query($con , "SELECT `id`, `villeDepart`, `villeArrivee`, `datedep`, `heureDepart`, `heureArrivee`, `prix`, `type`, `confort` FROM `voyage` WHERE id='" .$_GET["id"] ."'");
					if($resultat) {
						$row = mysqli_fetch_array($resultat);
						echo "<div class='formulaire'>";
						    echo "<form method='POST'>";

							    echo "<label>Nom</label>";
							    echo "<input type='text' name='nom' placeholder='Ex: Kuiss' class='form-nom' required><br/>";

							    echo "<label>Prénom</label>";
							    echo "<input type='text' name='prenom' placeholder='Ex: beril' class='form-prenom' required><br/>";

							    echo "<label>Numero de tel</label>";
                                echo "<input type='text' name='num' placeholder='numero' class='form-tel' required><br/>";
                                
                                echo "<label>Numero de CNI</label>";
                                echo "<input type='text' name='cni' placeholder='cni' class='form-cni' required><br/>";

								echo "<label>Date du jour</label>";
								echo "<input type='date' name='date'  class='form-to' required><br/>";

								echo "<label>Type</label>";
								echo "<input type='text' name='type' placeholder=' vip ou classique ' class='form-aller' value='" .$row["type"]. "'><br/>";
								
								echo "<label>DepartureDate</label>";
								echo "<input type='date' name='dep'  class='form-DepartureDate' value='" .$row["datedep"]. "'><br/>";

								echo "<label>Heure depart</label>";
								echo "<input type='text' name='heure' class='form-Return' value='" .$row["heureDepart"]. "'><br/>";

								echo "<label>Prix-ticket</label>";
								echo "<input type='text' name='prix' class='form-Prix' value='" .$row["prix"]. "'><br/>";
								
								echo "<label>bagages ? :</label>";
								echo "<input type='text' name='bg' class='form-bagage'><br/>";

								echo "<label>ID deplacement :</label>";
                                echo "<input type='text' name='id' class='form-annee' value='" .$row["id"]. "'><br/>";
                                
                                echo "<label>Depart :</label>";
                                echo "<input type='text' name='d' class='form-depart' value='" .$row["villeDepart"]. "'><br/>";

                                echo "<label>Arrivee :</label>";
                                echo "<input type='text' name='a' class='form-arr' value='" .$row["villeArrivee"]. "'><br/>";

								
							    echo "<input type='submit' name='bouton-valider' class='submit' value='Reserver'>";
						    echo "</form>";
						echo "</div>"; 
					} 

					
					?> 
  </body>
</html>
	 
	 
	 
	 
	


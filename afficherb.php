
 <?php
        /*if (isset($_POST['bouton-rechercher'])) {
            if (isset($_POST['numcni'])) {
            
		
		$nom_server = "localhost";
		$utilisateur = "root";
		$mdp = "";
		$nom_bd = "flashtravel";
        $con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);
        $arriv = $_POST['numcni'];
		
		$req = mysqli_query($con , "SELECT * FROM voyageur WHERE numcni='$arriv'");
		if (mysqli_num_rows($req)>0) {
			echo"<table border='2'>";
			echo"<tr>";
            echo"<th>";echo"Nom"; echo"</th>";
            echo"<th>";echo"Prenom"; echo"</th>";
            echo"<th>";echo"Tel"; echo"</th>";
            echo"<th>";echo"numCNI"; echo"</th>";
            echo"<th>"; echo"Date depart"; echo"</th>";
            echo"<th>";echo"heure Depart"; echo"</th>";
            echo"<th>";echo"Type"; echo"</th>";
            echo"<th>";echo"Prix"; echo"</th>";
            echo"<th>";echo"Bagages"; echo"</th>";
            echo"<th>";echo"id Deplacement"; echo"</th>";
			echo"<th>";echo"ville Depart"; echo"</th>";  
			echo"<th>";echo"ville Arrivee"; echo"</th>";
			echo"<th>";echo"date"; echo"</th>";
					
				echo"</tr>";
			while($row=mysqli_fetch_assoc($req)) {
				
				echo"<tr>";
				echo"<td>"; echo $row["nom"]; echo"</td>";
				echo"<td>"; echo $row["prenom"]; echo"</td>";
				echo"<td>"; echo $row["tel"]; echo"</td>";
				echo"<td>"; echo $row["numcni"]; echo"</td>";
				echo"<td>"; echo $row["datedepart"]; echo"</td>";
				echo"<td>"; echo $row["heuredepart"]; echo"</td>";
				echo"<td>"; echo $row["type"]; echo"</td>";
				echo"<td>"; echo $row["prixticket"]; echo"</td>";
				echo"<td>"; echo $row["bagage"]; echo"</td>";
                echo"<td>"; echo $row["iddep"]; echo"</td>";
                echo"<td>"; echo $row["depart"]; echo"</td>";
                echo"<td>"; echo $row["arrivee"]; echo"</td>";
                echo"<td>"; echo $row["date"]; echo"</td>";
                echo"<td><a name='bouton-modifier' href='modifierb.php?numcni=" .$row["numcni"] ."'>Modifier</a></td>";
				echo"</tr>";
				
			}
			echo"</table>";
		} else {
		echo "aucun resultat";
		}
	}
		}*/
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
		  
    <title>Liste des voyageurs</title>
</head>
<body>
<!-- ......................................................................... -->
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
    </header> <br><br><br>
		
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

<section >
	<form  action="" method='POST'> 
    <label>Rechercher: </label>
    <input type="text" name="numcni"> <br>
    <input type="submit" name="bouton-rechercher" value="rechercher">
		
	</form>
    

   
   <div id="dR">
<?php

		$nom_server = "localhost";
		$utilisateur = "root";
		$mdp = "";
		$nom_bd = "flashtravel";
		$con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);

		if(isset($_POST['bouton-modifier'])) {
			$req = "UPDATE voyageur SET nom='" .$_POST['nom']."' "
			. ", prenom='" .$_POST['prenom']."' "
			.", tel='" .$_POST['tel']. "' " 
			.", bagage='" .$_POST['bagage']. "' "
			." WHERE numcni='" .$_POST['cniOrigine']. "' ";
		
			$resultat = mysqli_query($req, $con);
			if (!$resultat) {
				echo "le message d'erreur est: " .mysqli_error($con);
			}
		}
		$resultat = mysqli_query($con, "SELECT * FROM voyageur");
		if ($resultat) {
			$nb = mysql_num_rows($resultat);
			
			echo"<table border='0'>";
            echo "<thead>";
            echo"<tr>";
            echo"<th>";echo"Nom"; echo"</th>";
            echo"<th>";echo"Prenom"; echo"</th>";
            echo"<th>";echo"Tel"; echo"</th>";
            echo"<th>";echo"numCNI"; echo"</th>";
            echo"<th>"; echo"Date depart"; echo"</th>";
            echo"<th>";echo"heure Depart"; echo"</th>";
            echo"<th>";echo"Type"; echo"</th>";
            echo"<th>";echo"Prix"; echo"</th>";
            echo"<th>";echo"Bagages"; echo"</th>";
            echo"<th>";echo"id Deplacement"; echo"</th>";
			echo"<th>";echo"ville Depart"; echo"</th>";  
			echo"<th>";echo"ville Arrivee"; echo"</th>";
			echo"<th>";echo"date"; echo"</th>";
			
                echo"</tr>";
                echo "</thead>";
			while($row=mysqli_fetch_array($resultat)) {
				echo "<tbody>";
				echo"<tr>";
				echo"<td>"; echo $row["nom"]; echo"</td>";
				echo"<td>"; echo $row["prenom"]; echo"</td>";
				echo"<td>"; echo $row["tel"]; echo"</td>";
				echo"<td>"; echo $row["numcni"]; echo"</td>";
				echo"<td>"; echo $row["datedepart"]; echo"</td>";
				echo"<td>"; echo $row["heuredepart"]; echo"</td>";
				echo"<td>"; echo $row["type"]; echo"</td>";
				echo"<td>"; echo $row["prixticket"]; echo"</td>";
				echo"<td>"; echo $row["bagage"]; echo"</td>";
                echo"<td>"; echo $row["iddep"]; echo"</td>";
                echo"<td>"; echo $row["depart"]; echo"</td>";
                echo"<td>"; echo $row["arrivee"]; echo"</td>";
                echo"<td>"; echo $row["date"]; echo"</td>";
                echo"<td><a name='bouton-modifier' href='modifierb.php?numcni=" .$row["numcni"] ."'>Modifier</a></td>";
                
                echo"</tr>";
                echo "</tbody>";
				
			}
			echo"</table>";
		}

?>  
</div>
    </section> 
</body>
</html>
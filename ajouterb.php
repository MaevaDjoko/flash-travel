
<?php
	/*if(isset($_POST['bouton-valider'])) {
		
            $nom_server = "localhost";
            $utilisateur = "root";
            $mdp = "";
            $nom_bd = "flashtravel";
			$con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);
			$idt = $_POST['id'];
			
		
	}*/
	
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
		   <link rel ="stylesheet" href="css/style.css"/>
		   <link rel ="stylesheet" href="css/reservation.css"/>
		
		      <!-- ......................................................................... -->
	
		   
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
    </header>  <br><br><br><br>
		
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
	

	<section class="mR">
	<form class="gf" action="" method='POST'> 
	   <label> Nous partons de : </label>
	   <select>
	    	<option>Douala</option>
			<option>Yaounde</option>
			<option>Bafoussam</option>
					  
	   </select > <br>
	   <label> Pour : </label>
	   <select>
	   		<option>Yaounde</option>
			<option>Bafoussam</option>
			<option>Douala</option>
	   </select><br />
	   
		<label> Ville de depart : </label>
		<input type="text" name="villedep"> <br>
		<label> Ville d'arrivee : </label>
		<input type="text" name="villearr"> <br>
	   
	   <input type="submit" name="bouton-rechercher" value="rechercher">
		
	</form>


	<div id="dR">
	
<?php  
if(isset($_POST['bouton-rechercher'])) {
	if(isset($_POST['villedep']) && isset($_POST['villearr'])) {

		$dep = $_POST['villedep'];
		$arriv = $_POST['villearr'];
		
		$nom_server = "localhost";
		$utilisateur = "root";
		$mdp = "";
		$nom_bd = "flashtravel";
		$con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);
		
		$req = mysqli_query($con , "SELECT * FROM voyage WHERE villeDepart='$dep' AND villeArrivee='$arriv'");
		if (mysqli_num_rows($req)>0) {
			echo"<h1>NOS VOYAGES<img src='img/bus-stop.png' alt='' width='30' height='25'></h1>"; 
			echo"<table border='1'>";
			echo "<thead>";
			echo"<tr>";
				echo"<th>";echo"id Deplacement"; echo"</th>";
				 echo"<th>";echo"ville Depart"; echo"</th>";
				  echo"<th>";echo"ville Arrivee"; echo"</th>";
				  echo"<th>"; echo"Date depart"; echo"</th>";
				   echo"<th>";echo"heure Depart"; echo"</th>"; 
				   echo"<th>";echo"heure Arrive"; echo"</th>";
				   echo"<th>";echo"Prix"; echo"</th>";
					echo"<th>";echo"Type"; echo"</th>";
					echo"<th>";echo"Confort"; echo"</th>";
					
				echo"</tr>";
				echo "</thead>";
			while($row=mysqli_fetch_assoc($req)) {
				echo "<tbody>";
				echo"<tr>";
				echo"<td>"; echo $row["id"]; echo"</td>";
				echo"<td>"; echo $row["villeDepart"]; echo"</td>";
				echo"<td>"; echo $row["villeArrivee"]; echo"</td>";
				echo"<td>"; echo $row["datedep"]; echo"</td>";
				echo"<td>"; echo $row["heureDepart"]; echo"</td>";
				echo"<td>"; echo $row["heureArrivee"]; echo"</td>";
				echo"<td>"; echo $row["prix"]; echo"</td>";
				echo"<td>"; echo $row["type"]; echo"</td>";
				echo"<td>"; echo $row["confort"]; echo"</td>";
				
				echo"<td><a name='bouton-valider' href='infob.php?id=" .$row["id"] ."'>choisir</a></td>";
				echo"</tr>";
				echo "</tbody>";
			}
			echo"</table>";
		} else {
		echo "aucun resultat";
		}
	}
}
?>  

</div>
</section>
   

</body>
</html>
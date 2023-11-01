<?php
	if(isset($_POST['bouton-valider'])) {
		
            $nom_server = "localhost";
            $utilisateur = "root";
            $mdp = "";
            $nom_bd = "flashtravel";
			$con = mysqli_connect($nom_server, $utilisateur, $mdp, $nom_bd);
			$idt = $_POST['id'];
			$n = 1;

			$req = mysqli_query($con, "UPDATE voyage SET nbPlaces=nbPlaces-'$n' WHERE id='$idt' AND nbPlaces>0") or die ("probleme avec la requete ".$req);		
			
			$modif = mysqli_affected_rows($con);
			if (isset($modif)&& $modif==1) {
				header("Location:billet.php");
			}
		 	else {
				$erreur = "Plus de billets disponibles!";
			}
		
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
		   <link rel ="stylesheet" href="css/style.css"/> 
		   <link rel ="stylesheet" href="css/reservation.css"/>

 </head>
<body>
       
<header>
	 <div class="logo">
	 		<a href=""><img src="img/log.JPG" alt="" width="90" height="50"></a>
        </div>
        <ul class="menu">
            <li><a href="index.php" class="a1"><img src="img/reception.png" alt="" width="30" height="30">Accueil</a></li>
            <li><a href="#about" class="a1"><img src="img/about.png" alt="" width="30" height="30">A propos</a></li>
            <li><a href="#presentation" class="a1"><img src="img/bus-station.png" alt="" width="30" height="30"><span>Destinations</span></a>
                <ul class="submenu">
                    <li>
                        <a href="#presentation">Douala-Yaounde</a>
                    </li>
                    <li>
                        <a href="#presentation">Douala-Bafoussam</a>
                    </li>
                    <li>
                        <a href="#presentation">Yaounde-Douala</a>
                    </li>
                    <li>
                        <a href="#li1">Yaounde-Bafoussam</a>
                    </li>
                </ul>
            </li>
            <li><a href="#bas" class="a1"><img src="img/call.png" alt="" width="30" height="30">Contact</a></li>
        </ul>
		<p>
            <a href="mailto:ntachel.alice@gmail.com"><img class="img" src="img/gmail.png" alt="" width="30" height="30"></a>
            <a href="https://www.instagram.com/_raaline_/"><img class="img" src="img/instagram.png" alt="" width="30" height="30"></a>
            <a href="https://www.facebook.com/alice.tchock"><img class="img" src="img/facebook.png" alt="" width="30" height="30"></a>
        </p>
        
        <div class="responsive-menu"></div>

</header> <br><br><br><br>
		
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
								<h3 class="panel-title">1. Rechercher </h3>
							</div>
							<div class="panel-body">
								Choisir une destination
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. Dates</h3>
							</div>
							<div class="panel-body">
								Heure et Tarifs
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
								Billet Final
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>

	</div>
	<div class="col-md-1"></div>
</div>
</section>

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
			echo"<table border='0'>";
			echo"<tr>";
				echo"<th>";echo"id Deplacement"; echo"</th>";
				 echo"<th>";echo"ville Depart"; echo"</th>";
				  echo"<th>";echo"ville Arrivee"; echo"</th>";
				  echo"<th>"; echo"DateDepart"; echo"</th>";
				   echo"<th>";echo"heure Depart"; echo"</th>"; 
				  echo"<th>";echo"heure Arrivee"; echo"</th>";
				   echo"<th>";echo"Prix"; echo"</th>";
					echo"<th>";echo"Type"; echo"</th>";
					echo"<th>";echo"Confort"; echo"</th>";
					echo"<th>";echo"Nb Places"; echo"</th>";
				echo"</tr>";
			while($row=mysqli_fetch_assoc($req)) {
				
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
				echo"<td>"; echo $row["nbPlaces"]; echo"</td>";
				echo"<td><a name='bouton-valider' href='infocli.php?id=" .$row["id"] ."'>choisir</a></td>";
				echo"</tr>";
				
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

	 
	 
	 
	 
	 
	
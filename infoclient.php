
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
		   <script src="script.js"></script>
		   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	   
 </head>
<body>
         <!-- ......................................................................... -->
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
                        
                        
                        <?php
                            
                                if (isset($_POST['cni']) && isset($_POST['nom']) && isset($_POST['num'])) {
                                    require "validation.php";
                                    echo $_RSV->save($_POST['nom'], $_POST['prenom'], $_POST['num'], $_POST['cni'], $_POST['dep'], $_POST['heure'], $_POST['type'] $_POST['prix'], $_POST['bg'],$_POST['date'], $_POST['id'], $_POST['d'], $_POST['a'])
                                    ? "<p class='correct'>Validation faite avec succes!</p>" : "<p>".$_RSV->error."</p>";
                                }
    
                            
                        ?>
                        

						<div class="formulaire">
						    <form action="validation.php">

							    <label>Nom</label>
							    <input type="text" name="nom" placeholder="Ex: Kuiss" class="form-nom" required>

							    <label>Prénom</label>
							    <input type="text" name="prenom" placeholder="Ex: beril" class="form-prenom" required>

							    <label>Numero de tel</label>
                                <input type="text" name="num" placeholder="numero" class="form-tel" required>
                                
                                <label>Numero de CNI</label>
                                <input type="text" name="cni" placeholder="cni" class="form-cni" required>

								<label>Date du jour</label>
								<input type="text" name="date" placeholder=" mm/dd/yy" class="form-to">

								<label>Type</label>
								<input type="text" name="type" placeholder=" vip ou classique " class="form-aller">
								
								<label>DepartureDate</label>
								<input type="text" name="dep" placeholder=" mm/dd/yy" class="form-DepartureDate">

								<label>Heure depart</label>
								<input type="text" name="heure" placeholder="" class="form-Return">

								<label>Prix-ticket</label>
								<input type="text" name="prix" placeholder=" " class="form-Prix">
								
								<label>bagages ? :</label>
								<input type="text" name="bg" placeholder="" class="form-bagage">

								<label>ID deplacement :</label>
                                <input type="text" name="id" placeholder="" class="form-annee">
                                
                                <label>Depart :</label>
                                <input type="text" name="d" placeholder="" class="form-depart">

                                <label>Arrivee :</label>
                                <input type="text" name="a" placeholder="" class="form-arr">

							    <input type="submit" class="submit" onclick="afficherPDF();">
						    </form>
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
<!--
<form action="infoCli.php" class="info" method="post">

		<label for="nom">Votre nom</label>
		<input type="text" id="nom" name="LastName"/>
	
		<label for="nom">Votre prénom</label>
		<input type="text" id="prenom" name="firstName"/>

		<label for="numero">Votre numero de tel</label>
		<input type="text" id="nemero"/>
	
		<p>Avez vous des bagages ?</p>

		<input type="radio" name="avoir_les_bagages" id="avoir_les_bagages" value="oui" checked="checked">

		<label for="avoir_les_bagages">oui</label>

		<input type="radio" name="avoir_les_bagages" id="avoir_les_bagages" value="non">

		<label for="avoir_les_bagages">non</label>

	</p>

	<p>
		<input type="submit" value="Enregistrer">
	</p>
</form>
-->

 
  </body>
</html>
	 
	 
	 
	 
	


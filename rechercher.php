
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




  
</body>
</html>














<!--<tr >
			<td colspan=3>
			<?php
/* echo"<div>";
		 echo"<table border=1>";
		 echo"<tr>";
		 echo"<th>";echo"id Deplacement"; echo"</th>";
		  echo"<th>";echo"ville Depart"; echo"</th>";
		   echo"<th>";echo"ville Arrive"; echo"</th>";
		    echo"<th>";echo"heure Depart"; echo"</th>"; 
			echo"<th>";echo"heure Arrive"; echo"</th>";
			 echo"<th>";echo"prix"; echo"</th>";
		 echo"</tr>";
	  if(isset($_POST["sumbit5"])){
		 $res= mysqli_query($link,"select * from voyage  where id='".$_POST["t1"]."'");
		 while($row=mysqli_fetch_array($res))
		 {
			 echo"<tr>";
			 echo"<td>"; echo $row["id"]; echo"</td>";
			 echo"<td>"; echo $row["villeDepart"]; echo"</td>";
			 echo"<td>"; echo $row["villeArrive"]; echo"</td>";
			 echo"<td>"; echo $row["heureDepart"]; echo"</td>";
			 echo"<td>"; echo $row["heureArrive"]; echo"</td>";
			 echo"<td>"; echo $row["prix"]; echo"</td>";
			 echo"</tr>";
		 }
		 echo"</table>";
		 echo"</div>";
	 }*/
	 ?>
			</td>
			</tr>
		</table>	
</section>

</body>
</html>
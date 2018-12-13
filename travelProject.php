<!DOCTYPE html>
<html>
	
	<head>
		<title>Pacific Travels</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- Style CSS file -->
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="stylesheet" type="text/css" href="CSS/table_media_query.css">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	</head>

	<body>

		<!-- Navbar -->

		<div>	
			<nav class="navbar navbar-expand-md navbar-blue navbar-dark ">
			  <div class="container">  
			  <a class="navbar-brand" href="#"> <strong>Pacific travels</strong> </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarText">
			    <ul class="navbar-nav mr-sm-2">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Conocenos</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Contacto</a>
			      </li>
			    </ul>
			  </div>
			  </div>
			</nav>
		</div>

		<!-- Navbar -->

		<!-- Carousel -->
		<div>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
					  	<img class="d-block w-100" src="https://media02.bnesim.com/wp-content/uploads/2018/08/roaming-free.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
					  	<img class="d-block w-100" src="https://cdn3.i-scmp.com/sites/default/files/styles/landscape/public/images/methode/2018/03/28/7167c942-322c-11e8-9019-a420e6317de0_1280x720_164927.jpg?itok=bXs2A3OW" alt="Second slide">
					</div>
					<div class="carousel-item">
				  		<img class="d-block w-100" src="https://media3.s-nbcnews.com/i/newscms/2017_45/1295189/airport-travel-today-171109-tease_c786e02046c7baaacf6bc3a7b3e538fb.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Atras</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>
			</div>
		</div>
		<!-- Carousel -->

		<div class="container ">

			<h1 class="text-info title mt-4 mb-4 text-center ">Registros en la BD</h1>

			<table>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Correo</th>
				</tr>
			
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "poao9315";
					$dbname = "demo";

					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
				    	die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT id, first_name, last_name, email FROM persons";
					$result = $conn-> query($sql);

				    if ($result->num_rows > 0) {
					   	while($row = $result->fetch_assoc()) {
					    	echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"] . "</td><td>". $row["last_name"] . "</td><td>". $row["email"]. "</td></tr>";
						}
						echo "</table>";
				   	}else{ 
				   		echo "0 results"; 
				   	}

				mysqli_close($conn);
				?>

			</table>
		</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CONTACTO</title>
</head>
<body>


<style>
    body {
    background-image: url(andre1.jpeg);
    background-size: cover;
    }
</style>

     <!-- MENU -->
     <header class=" header container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">
                          <a href="index.html" class="navbar-brand" href="#"><img src="LOGO.png" style="width: 6rem;" class="logoheader"></a>
                          <!-- botton hamburger -->>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <!-- MENÚ, cambio las palabras y pongo las mias de mis secciones  -->
                          <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-right">
                              <li class="nav-item">
                               <a href="INDEX.HTML" class="nav-link" href="#" style="color: blue;">HISTORIA</a>
                              </li>
                              <li class="nav-item">
                                <a href="FILOSOFÍA.HTML" class="nav-link" href="#" style="color: red;">FILOSOFÍA</a>
                              </li>
                              <li class="nav-item">
                                <a href="ARTISTAS.HTML" class="nav-link" href="#" style="color: greenyellow;">ARTISTAS</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a href="GALERIA.HTML" class="nav-link dropdown-toggle" href="#" style="color: yellow;" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  GALERÍA
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                  <li><a class="dropdown-item" href="GALERÍA.HTML">Detras de escena</a></li>
                                  <li><a class="dropdown-item" href="ANDRE.HTML">André Derain</a></li>
                                  <li><a class="dropdown-item" href="HENRY.HTML">Henry Matse</a></li>
                                  <li><a class="dropdown-item" href="MAURICE.HTML">Maurice De Vlamink</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a href="CONTACTO.HTML" class="nav-link" href="#" style="color: deeppink;">CONTACTO</a>
                              </li>
                              </li>
                              
                            </ul>
                            </div>
                    
                            <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>
                </div>
                
            </div>    
        </div>
    </header>

    <section class="container" style="background-color: lightcoral; opacity: 80%; margin: 10%;">
	<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article a href="ANDRE.HTML" style="width:60%;margin:0 auto;border:solid;padding:10px">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . "<br>";
			echo $resultados['bio'] . "<br>";
	?>
    </p>

<img src="<?php echo $resultados[foto];?>" width="100%">
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
    
  </section>
  
          
          
  
  <footer class="container-fluid">
    <div class="footer container">
      <div class="row">
          <p class="col">Florencia Sol Srael</p>
          <p class="col"> 2022</p>
          <p class="col"> Producción Digital III</p>   
      </div>
    </div>
  </footer>
  
  <!-- Código de JavaScript para Bootstrap -->	
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>





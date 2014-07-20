<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Fleibor Website</title>
    <style id="holderjs-style" type="text/css"></style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	  <script src="js/general.js"></script>
	</head>
<div class="navbar-wrapper">
	<div class="container">
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
    	<div class="container">
  			<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        	</button>
          <a class="navbar-brand" href="#">Fleibor</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="#about">Productos</a></li>
            <li><a href="">Eventos</a></li>
            <li><a href="">Empresa</a></li>
            <li><a href="">Contactenos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img class="imgBanner img-responsive" src="img/banner1.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Laboratorio Fleibor srl.</h1>
              <p>Nace en el mercado argentino en Agosto del año 1984 dedicado a la elaboración de esencias y colorantes. </p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Inicio</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="imgBanner"  src="img/banner2.jpg">
        </div>
        <div class="item">
          <img class="imgBanner"  src="img/banner3.jpg">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <div class="container letter-cont">
	
      <h3 class="letter-title">Productos</h3>
      <div class="row">
        <div class="col-lg-4 letter-color">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="img/alimenticios.jpg" style="width: 140px; height: 140px;">
          <h4>Alimenticios</h4>
          <p class="download"><button id="bt-alimenticios" class="btn btn-default" type="button" >View details »</button></p>
		  <div id="li-alimenticios" class="list-group">
		  <a href="#" class="list-group-item">Golosinas</a>
		  <a href="#" class="list-group-item">Bebidas sin alcohol</a>
          <a href="#" class="list-group-item">Bebidas con alcohol</a>
          <a href="#" class="list-group-item">Helados</a>
          <a href="#" class="list-group-item">Reposter&iacute;a hogare&ntilde;a</a>          
		  <a href="#" class="list-group-item">Panader&iacute;a y confiter&iacute;a</a>
		  <a href="#" class="list-group-item">Chocolates</a>
		  <a href="#" class="list-group-item">L&aacute;cteos</a>
          </div>
        </div>
        <div class="col-lg-4 letter-color">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="img/artesanias.jpg" style="width: 140px; height: 140px;">
          <h4>Artesan&iacute;as</h4>
          <p class="download"><button id="bt-artesanias" class="btn btn-default" type="button" >View details »</button></p>
		  <div id="li-artesanias" class="list-group">
		  <a href="#" class="list-group-item">Art&iacute;culos para porcelana en fr&iacute;o</a>
		  <a href="#" class="list-group-item">Art&iacute;culos para jabones artesanales</a>
          <a href="#" class="list-group-item">Art&iacute;culos para velas artesanales</a>
          <a href="#" class="list-group-item">Especialidades</a>
          </div>
        </div>
        <div class="col-lg-4 letter-color">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="img/recetas.jpg" style="width: 140px; height: 140px;">
          <h4>Mis Recetas</h4>
          <p class="download"><button id="bt-recetas" class="btn btn-default" type="button" >View details »</button></p>
		  <div id="li-recetas" class="list-group">
		  <a href="#" class="list-group-item">Listado de Recetas</a>
          </div>
		  





        </div>

      </div>
      <hr class="featurette-divider">

      <?php
        include("footer.php");
      ?>
    </div>
	</body>
</html>
<html lang="en">
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
	<body>
	 <?php
      include("header.php");
     ?>

    <div class="container letter-cont">
	
      <h3 class="letter-title">Produtos</h3>
      <div class="row">
        <div class="col-lg-4 letter-color">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="img/alimenticios.jpg" style="width: 140px; height: 140px;">
          <h4>Alimenticios</h4>
          <p class="download"><button id="bt-alimenticios" class="btn btn-default" type="button" >Ver »</button></p>
		  <div id="li-alimenticios" class="list-group">
		  <a href="#" class="list-group-item">Guloseimas</a>
		  <a href="#" class="list-group-item">Bebidas não alcoólicas</a>
          <a href="#" class="list-group-item">Bebidas alcoólicas</a>
          <a href="#" class="list-group-item">Sorvetes</a>
          <a href="#" class="list-group-item">Confeitaria caseira </a>          
		  <a href="#" class="list-group-item">Padaria e confeitaria profissional </a>
		  <a href="#" class="list-group-item">Chocolates</a>
		  <a href="#" class="list-group-item">L&aacute;cteos</a>
          </div>
        </div>
        <div class="col-lg-4 letter-color">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="img/artesanias.jpg" style="width: 140px; height: 140px;">
          <h4>Artesanatos</h4>
          <p class="download"><button id="bt-artesanias" class="btn btn-default" type="button" >Ver »</button></p>
		  <div id="li-artesanias" class="list-group">
		  <a href="#" class="list-group-item">Artigos para biscuit</a>
		  <a href="#" class="list-group-item">Artigos para sabonetes artesanais</a>
          <a href="#" class="list-group-item">Artigos para velas artesanais</a>
          <a href="#" class="list-group-item">Especialidades</a>
          </div>
        </div>
        <div class="col-lg-4 letter-color">
          <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="img/recetas.jpg" style="width: 140px; height: 140px;">
          <h4>Mis Recetas</h4>
          <p class="download"><button id="bt-recetas" class="btn btn-default" type="button" >Ver »</button></p>
		  <div id="li-recetas" class="list-group">
		  <a href="#" class="list-group-item">Lista de Receitas</a>
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
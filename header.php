<?php
	$path = explode("/" , trim($_SERVER['SCRIPT_NAME']));
?>
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
          <a class="navbar-brand" <?php if($path[2] == "index.php") echo 'href="#"'; else echo 'href="index.php"';?>>Fleibor</a>
          <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/"></div>
          <div class="addthis_sharing_toolbox addthis-hidden">
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($path[2] == "index.php") echo 'class="active"'; ?>><a <?php if($path[2] == "index.php") echo 'href="#"'; else echo 'href="index.php"';?>>Home</a></li>
            <li <?php if($path[2] == "productos.php") echo 'class="active"'; ?>><a <?php if($path[2] == "productos.php") echo 'href="#"'; else echo 'href="productos.php"'?>>Productos</a></li>
            <li <?php if($path[2] == "events.php") echo 'class="active"'; ?>><a <?php if($path[2] == "events.php") echo 'href="#"'; else echo 'href="events.php"'?>>Eventos</a></li>
            <li <?php if($path[2] == "company.php") echo 'class="active"'; ?>><a <?php if($path[2] == "company.php") echo 'href="#"'; else echo 'href="company.php"'?>>Empresa</a></li>
            <li <?php if($path[2] == "contact.php") echo 'class="active"'; ?>><a <?php if($path[2] == "contact.php") echo 'href="#"'; else echo 'href="contact.php"'; ?>>Contactenos</a></li>
          </ul>
          <div class="addthis_sharing_toolbox addthis pull-right">
          </div>
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
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
          <a class="navbar-brand" href="#">Fleibor</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($path[2] == "index.php") echo 'class="active"'; ?>><a href="#">Home</a></li>
            <li><a href="#about">Productos</a></li>
            <li><a href="#events">Eventos</a></li>
            <li><a href="#company">Empresa</a></li>
            <li><a href="#contact">Contactenos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
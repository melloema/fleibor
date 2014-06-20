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
    <title>Carousel Template for Bootstrap</title>
    <style id="holderjs-style" type="text/css"></style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
	</head>
	<body>
  	<?php
      include("header.php");
    ?>
    <div class="container contact">
        <div class="container contactform">
          <h3 class="letter-title text-center">Contactenos</h3>
          <hr class="featurette-divider">
          <form action="form-contact.php" class="wrap-form" id="contact-form" role="form" method="post">
            <div class="form-group">
              <label for="name" class="control-label">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="mail">Email address</label>
              <input type="email" class="form-control" id="mail" placeholder="email">
            </div>
            <div class="form-group">
              <label for="tel">Telefono</label>
                <input type="phone" class="form-control" id="tel" placeholder="Telefono">
            </div>
            <div class="form-group">
              <label for="query">Consulta</label>
              <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-warning pull-right">Enviar</button>
            </div>
          </form>
        </div>
      <hr class="featurette-divider">
      <?php
        include("footer.php");
      ?>
    </div>
	</body>
</html>
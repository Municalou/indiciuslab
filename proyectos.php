<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>Indicius Lab - Proyectos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indicus Lab es un sitio de pruebas">
    <meta name="author" content="Indicius">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="icon" type="image/png" href="http://www.indiciuslab.com.ar/favicon.png"><!-- Major Browsers -->
    <!--[if IE]><link rel="SHORTCUT ICON" href="http://www.indiciuslab.com.ar/favicon.ico"/><![endif]--><!-- Internet Explorer-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
  </head>
  
  <body>
      <?php include('includes/header.php'); ?>

     <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <div class="row">
            <div class="span5">
              <a id="logo" href="/"></a><h2 class="title">Listado de Proyectos</h2>
            </div>
            <div class="span5">
                <?php $pag="proy";include('includes/menu.php'); ?>
            </div>
          </div>
        </div>
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">HTML/ CSS</a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                <ul>
                  <li><a href="proyectos/blackandwhite/">Rollover blanco y negro</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Javascript</a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
              <div class="accordion-inner">
                 <ul>
                  <li><a href="proyectos/dots/">Imagen con puntos</a></li>
                  <li><a href="proyectos/googlemaps/">Google Maps API v3</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Facebook</a>
            </div>
            <div id="collapseThree" class="accordion-body collapse">
              <div class="accordion-inner">
                 <ul>
                  <li><a href="connect.php">Facebook Connect</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="push"></div>
    </div>
    
    <?php include('includes/footer.php'); ?>
    
  </body>
</html>
<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <title>Indicius Lab - Proyectos - Rollover blanco y negro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indicus Lab es un sitio de pruebas">
    <meta name="author" content="Indicius">
    <!-- Le styles -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="icon" type="image/png" href="http://www.indiciuslab.com.ar/favicon.png"><!-- Major Browsers -->
    <!--[if IE]><link rel="SHORTCUT ICON" href="http://www.indiciuslab.com.ar/favicon.ico"/><![endif]--><!-- Internet Explorer-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">
    <style>
    	img.image:hover { 	
    		filter: grayscale(100%);
    		-webkit-filter: grayscale(100%); -moz-filter: grayscale(100%);
    		-ms-filter: grayscale(100%); -o-filter: grayscale(100%);
    		filter: url(desaturate.svg#greyscale);
    		filter: gray;
    		-webkit-filter: grayscale(1);
    		}
    </style>
  
  </head>
  
  <body>
    
      <?php include('../../includes/header.php'); ?>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <div class="row">
            <div class="span5">
              <a id="logo" href="/"></a><h2 class="title">Rollover blanco y negro</h2>
            </div>
            <div class="span5">
              <?php $pag="proy-blancoynegro";include('../../includes/menu.php'); ?>
            </div>
          </div>
        </div>
        <p class="lead">Cambiar los colores de una imagen aplicando filtros CSS.</p>
        <p>Este es un script CSS para aplicarle filtros a una imagen color y transformarla a blanco y negro. Para este ejemplo tenemos una imagen color dentro de una etiqueta <b>&lt;img&gt;</b> con la clase "image" y le aplicamos el siguiente codigo CSS al hover de la misma.</p>
        <pre><code>
      img.image:hover {<br />
          filter: grayscale(100%);<br />
          -webkit-filter: grayscale(100%); -moz-filter: grayscale(100%);<br />
          -ms-filter: grayscale(100%); -o-filter: grayscale(100%);<br />
          filter: url(desaturate.svg#greyscale);<br />
          filter: gray;<br />
          -webkit-filter: grayscale(1); <br />
      }<br />
        </code></pre>
        <p>Este es el resultado (hacer rollover en la imagen de la silla):</p>
        <img class="image" src="chair.jpg" alt="chair" />
        <p>Para que funcione en Internet explorer se agrega un archivo llamado <b>desaturate.svg</b> (ver el atributo "filter" del codigo de arriba) con el siguiente contenido:</p>
        <pre><code>
      &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg"&gt;<br />
          &lt;filter id="greyscale"&gt;<br />
              &lt;feColorMatrix type="matrix" values="0.3333 0.3333 0.3333 0 0<br />
              0.3333 0.3333 0.3333 0 0<br />
              0.3333 0.3333 0.3333 0 0<br />
              0  0  0  1 0"/&gt;<br />
          &lt;/filter&gt;<br />
      &lt;/svg&gt;<br />
        </pre></code>
      </div>
      <div id="push"></div>
    </div>
    
    <?php include('../../includes/footer.php'); ?>
    
  </body>

</html>
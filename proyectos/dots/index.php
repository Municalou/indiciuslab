<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <title>Indicius Lab - Proyectos - Imagen con puntos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indicus Lab es un sitio de pruebas">
    <meta name="author" content="Indicius">
    <!-- Le styles -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    
    <script type="text/javascript" src="d3.min.js?1.3"></script>
    <script type="text/javascript" src="dots.js?1.3"></script>
    <link rel="stylesheet" type="text/css" href="dots.css?1.3"/>
    
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
  
  </head>
  
  <body>
    
      <?php include('../../includes/header.php'); ?>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <div class="row">
            <div class="span5">
              <a id="logo" href="/"></a><h2 class="title">Imagen con puntos</h2>
            </div>
            <div class="span5">
              <?php $pag="proy-imagenconpuntos";include('../../includes/menu.php'); ?>
            </div>
          </div>
        </div>
          <div id="center">
            <div id="cont">

              <div id="dots">
              </div>
              <div id="next" style="display: none">
                <div class="msg">
                  Awesome stuff! Now make your own and share the link.<br/>
                  Paste an image url bellow and click enter.
                </div>
                <input placeholder="http://imgur.com/your_favourite_image.jpg"></input>
              </div>

            </div>
          </div>
          <script type="text/javascript">
            (function() {
              if(/MSIE [3-8]/i.test(navigator.userAgent)) {
                _gaq.push(['_trackEvent', 'Problemo', 'IE', window.location.href]);
                alert("Sorry, Internet Explorer 8 (and bellow) is not supported, please get a modern browser like Safari, Chrome, Firefox or Internet Explorer 9");
                return;
              }

              var now = Date.now();
              try {
                var hrefSplit = window.location.href.split("?", 2);
                var domian = hrefSplit[0];
                var file = hrefSplit[1];

                if (file) {
                  if (file.match(/^[a-z0-9+\/=]+$/i)) {
                    file = atob(file);
                  } else {
                    // Hide the link in the url
                    window.location.href = domian + '?' + btoa(file);
                  }
                } else {
                  file = 'logo.png';
                }

                if (file.substring(0, 5) === 'http:') {
                  file = "image-server.php?url=" + file;
                }

                function onEvent(what, value) {
                  var time = Math.round((Date.now() - now) / 1000);
                  _gaq.push(['_trackEvent', what, String(value), window.location.href, time]);

                  if (what === 'LayerClear' && value == 0) {
                    d3.select('#next')
                      .style('display', null)
                      .select('input')
                        .on('keydown', function() {
                          d3.select('div.err').remove();
                          if (d3.event.keyCode !== 13) return;
                          var input = d3.select(this).property('value');

                          if (input.match(/http:\/\/.+\..+/i)) {
                            var time = Math.round((Date.now() - now) / 1000);
                            _gaq.push(['_trackEvent', 'Submit', input, window.location.href, time]);
                            d3.select('#next div.msg').text('Thinking...');
                            d3.select(this).style('display', 'none');
                            setTimeout(function() {
                              window.location.href = domian + '?' + btoa(input);
                            }, 750);
                          } else {
                            d3.select('#next').selectAll('div.err').data([0])
                              .enter().append('div')
                              .attr('class', "err")
                              .text("That doesn't appear to be a valid image URL. [Hint: it should start with 'http://']")
                          }
                        });
                  }
                }

                var img = new Image();
                img.onload = function() { loadImage(this, onEvent); };
                img.src = file;
              } catch (e) {
                var time = Math.round((Date.now() - now) / 1000);
                _gaq.push(['_trackEvent', 'Problemo', '[' + String(e.message) + ']', window.location.href, time]);
                throw e;
              }
            })();
          </script>
      </div>
      <div id="push"></div>
    </div>
    
    <?php include('../../includes/footer.php'); ?>
    
  </body>

</html>


<!DOCTYPE html>
<html>
  <head>
    

    
    
  </body>
</html>

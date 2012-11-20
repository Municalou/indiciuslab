<ul class="nav nav-pills pull-right title">
  <li <?php echo ($pag == 'home')?'class=active':''; ?>><a href="/index.php">Home</a></li>
  <li class="dropdown <?php echo ( $pag == 'proy' ) ? ' active':''; ?>">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Proyectos <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li <?php echo ( $pag == 'proy' ) ? 'class=active':''; ?>><a href="/proyectos.php">Todos</a></li>
      <li class="divider"></li>
      <li <?php echo ( $pag == 'proy-blancoynegro' ) ? 'class=active':''; ?>><a href="/proyectos/blackandwhite/">Rollover blanco y negro</a></li>
      <li class="divider"></li>
      <li <?php echo ( $pag == 'proy-imagenconpuntos' ) ? 'class=active':''; ?>><a href="/proyectos/dots/">Imagen con puntos</a></li>
      <li <?php echo ( $pag == 'proy-googlemaps' ) ? 'class=active':''; ?>><a href="/proyectos/googlemaps/">Google Maps API v3</a></li>
      <li class="divider"></li>
      <li <?php echo ( $pag == 'proy-facebookconnect' ) ? 'class=active':''; ?>><a href="/connect.php">Facebook Connect</a></li>
    </ul>
  </li>
</ul>
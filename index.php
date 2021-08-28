<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Culture Producer</title>

   

  <script src="js/external/jquery/jquery.js"></script>
 <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

   
    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" id="btnhome" href="#">CultureProucer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a  class="nav-link " type="button" aria-current="page" id="btnquienessomos" href="#">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Proximos Eventos</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link " type="button" aria-current="page" id="btncontacto" href="#">Nuestro Equipo</a>
          </li>
         <li class="nav-item">
            <a  class="nav-link " type="button" aria-current="page" id="btn3" href="#">Contactanos</a>
          </li>
        </ul>
     
      </div>
    </div>
  </nav>
</header>

<main>




<div id="resultado" style="margin: 1%;" >


   
</div>


  <script>

    $.ajaxSetup ({  
        cache: false  
      });
    $( document ).ready(function() {

   var loadUrl = "php/home.php"; // paso parametro accion e id
      $("#resultado").load(loadUrl); // ejecuto
    
 $("#btnhome").click(function(){

      var loadUrl = "php/home.php"; // paso parametro accion e id
      $("#resultado").load(loadUrl); // ejecuto
      }); 


   $("#btnquienessomos").click(function(){

      var loadUrl = "php/quienessomos.php"; // paso parametro accion e id
      $("#resultado").load(loadUrl); // ejecuto
      }); 

}); 



</script>
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end">Powered By &copy;TechNet 2021 </p>
    <p>&copy;CultureProducer Todos los derechos reservados. </p>
  </footer>
</main>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

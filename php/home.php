   <style>
      #fondoTrasparente {
        background:url(img/tabu.png) no-repeat left center;
        background-size: cover;
        border-radius: 15% 5% 15% 5%;
        opacity:.8; 
         z-index: 1;
         position: absolute;
         width: 120%;
      height: 98%;
       top: 0px;
      left: 0px;
     margin-top: 6%;
      margin-left:-10%;
       margin-right:0%;
      }
        #fondoTrasparente2 {
        background:url(img/veganpower.jpg) no-repeat left center;
        background-size: cover;
        border-radius: 15% 5% 15% 5%;
        opacity:.8; 
         z-index: 1;
         position: absolute;
         width: 120%;
      height: 130%;
       top: 0px;
      left: 0px;
     margin-top: -10%;
      margin-left:-10%;
       margin-right:0%;
      }
       #fondoTrasparente3 {
        background:url(img/cabinaabierta2.jpg) no-repeat left center;
        background-size: cover;
        border-radius: 15% 5% 15% 5%;
        opacity:.8; 
         z-index: 1;
         position: absolute;
         width: 120%;
      height: 130%;
       top: 0px;
      left: 0px;
     margin-top: -10%;
      margin-left:-10%;
       margin-right:0%;
      }



      
#text {
  position: relative;
   z-index: 5;
 margin-left:1%;
 margin-top: 2%;
   margin-bottom:-5%;

}

@media screen and (max-width: 980px) {
div#imagenTabu {
display: none;
}

   
}
      

    </style>


  <div id="myCarousel" class="carousel slide " data-bs-ride="carousel "  >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="border-radius: 15% 5% 15% 5%;box-shadow: 1px 2px 5px 5px #B68FE7;">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" ><rect width="100%" height="100%" fill="#7D3C98" opacity="0.8"/></svg>

        <div  class="container" style="position: relative;" >
          <div class="carousel-caption text-start" >
            
               
              <div  id="text"  class="row" >
              <div class="col" style=" margin-top: 5%; " >  
              <h1  >Ciclo Tabu</h1>
              <p>Descripcion breve de Tabu</p>
              <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. 
              </p>
              <p><a class="btn btn-lg btn-primary " href="#">Ver Galeria </a></p>
            </div>
               <div id="imagenTabu" class="col" style="margin-top: 10%; opacity: 0.8;" >
               <img src="img/tabu.png" style="max-height: 80%; max-width: 80%"> 
              </div> 
            </div>

             <div  id="fondoTrasparente"  > </div>
        </div>
      </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img " width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%"  fill="#932991"/></svg>

        <div class="container" style="position: relative;" >
          <div class="carousel-caption">
             <div  id="text"  class="row" >
            <h1>Vegan Power</h1>
            <p>Descripcion breve de Vegan Power.</p>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. 
              </p>
            <p><a class="btn btn-lg btn-primary" href="#">Ver Galeria</a></p>
             </div>
             <div  id="fondoTrasparente2"  > </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#7D3C98"/></svg>

        <div class="container"  style="position: relative;">
          <div class="carousel-caption text-end">
            <div  id="text"  class="row" >
            <h1>Eventos Cabina Abieta.</h1>
            <p>Descripcion breve de Eventos Cabina Abierta</p>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. 
              </p>
            <p><a class="btn btn-lg btn-primary" href="#">Ver Galeria</a></p>
             </div>
              <div  id="fondoTrasparente3"  > </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#932991"/><text x="50%" y="50%" fill="#932991" dy=".3em">140x140</text></svg>

        <h2>Evento Destacado1</h2>
        <p>Descripcion Evento1</p>
        <p><a class="btn btn-secondary" href="#">Ver Mas &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#7D3C98"/><text x="50%" y="50%" fill="#7D3C98" dy=".3em">140x140</text></svg>

        <h2>Evento Destacado2</h2>
        <p>Descripcion Evento.</p>
        <p><a class="btn btn-secondary" href="#">Ver Mas &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#932991"/><text x="50%" y="50%" fill="#932991" dy=".3em">140x140</text></svg>

        <h2>Evento Destacado3</h2>
        <p>Descripcion Evento.</p>
        <p><a class="btn btn-secondary" href="#">Ver Mas&raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->



    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <title>Pagina Principal</title>
        
      </head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

<div class="container-fluid" >
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom">  <!-- navbar -->
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="imgs/logoDeEvento.svg" class="logo"></a>
              <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">  <!-- menu de hamburguesa -->
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Categorias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Informacion Sitio</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
   </div>      
    </header>
    <!-- header -->


<!-- buscador search -->
<div class="container-fluid">
    <form class="form-inline "></form>
        <div class="row mw-100">
            <div class="col-lg-11 col-9">
                <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda de eventos" aria-label="Búsqueda de eventos">
            </div>
            <div class="col-lg-1 col-3">
                <button class="btn btn-primary w-100 my-0 my-sm-0 rounded-0" type="submit">Buscar</button>
            </div>
        </div>
    </form>
  </div>
<!-- buscador search -->

    <div class="container-fluid h-75">
          <div class="row d-flex justify-content-center">
            <img src="imgs/1530570241_885041_1530570346_noticia_normal.jpg" class="img-fluid" alt="Responsive image"/>
          </div> 

          <div class="row mw-100">

              <!-- despegable de categorias -->
                <div class="dropdown">
                    <button class="dropbtn">Categorias</button>
                    <div class="dropdown-content">
                    <a href="#">Musica</a>
                    <a href="#">Arte</a>
                    <a href="#">Deporte</a>
                    <a href="#">Empresarial</a>
                    </div>
                </div>
               <!-- despegable de categorias -->
          </div>     
          
          <!-- lista eventos -->
          <div class="row mw-90">
            <div class="col-lg-4 col-6 p-3">
                <a href="DetalleEvento.html" class="link_evento">
                    <img src="imgs/1530570241_885041_1530570346_noticia_normal.jpg" class="img-fluid" alt="Responsive image"/>
                    <div class="info_evento">
                        <h2>Titulo de evento</h2>
                        <p>
                            Lugar, Fecha y Hora
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6 p-3">
                <a href="DetalleEventoDos.html" class="link_evento">
                    <img src="imgs/musica.jpg" class="img-fluid" alt="Responsive image"/>
                    <div class="info_evento">
                        <h2>Titulo de evento</h2>
                        <p>
                            Lugar, Fecha y Hora
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6 p-3">
                <a href="#" class="link_evento">
                    <img src="imgs/Zona-Maco-1.jpg" class="img-fluid" alt="Responsive image"/>
                    <div class="info_evento">
                        <h2>Titulo de evento</h2>
                        <p>
                            Lugar, Fecha y Hora
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6 p-3">
                <a href="#" class="link_evento">
                    <img src="imgs/planear-eventos.jpg" class="img-fluid" alt="Responsive image"/>
                    <div class="info_evento">
                        <h2>Titulo de evento</h2>
                        <p>
                            Lugar, Fecha y Hora
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6 p-3">
                <a href="#" class="link_evento">
                    <img src="imgs/wanderlust.jpg" class="img-fluid" alt="Responsive image"/>
                    <div class="info_evento">
                        <h2>Titulo de evento</h2>
                        <p>
                            Lugar, Fecha y Hora
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6 p-3">
                <a href="#" class="link_evento">
                    <img src="imgs/books-5053740_1920.jpg" class="img-fluid" alt="Responsive image"/>
                    <div class="info_evento">
                        <h2>Titulo de evento</h2>
                        <p>
                            Lugar, Fecha y Hora
                        </p>
                    </div>
                </a>
            </div>
        </div> 

        <!-- lista eventos -->
        
        <br/>
        <br/>
        <br/>
        <br/>
    </div>
  
    <!-- footer -->
    <footer class="page-footer fixed-bottom">
        <div class="d-flex justify-content-center">
            <nav class="nav-bottom">
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li >
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        <p></p>
    </footer>
    <!-- footer -->


    
</body>

</html>  
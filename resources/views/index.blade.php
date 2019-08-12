<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/main.css">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="css/heroic-features.css" rel="stylesheet">
 
<body>
    <script>
        alert('Hola Acabas de entrar a un deploy del sitio web de la empresa atenea');
        window.location.href='/contactos';
        </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Atenea</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#servicios">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacto">Contacto</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="octicon octicon-organization"></span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('img/atenea.png')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4"></h2>
                <p class="lead"></p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/con1.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Servicio de Consultorías</h2>
                <p class="lead">Atrevete a mejorar tu empresa</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/con3.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Contáctanos</h2>
                <p class="lead">Se parte de la innovación</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
      </header>
      
      
      
        
      <div class="container" id="servicios">
          <h1 class="display-3">Servicios</h1>
      
        <div class="row">
        <div class="col-sm">
        
          <div class="card text-center" style="width: 21rem;">
            <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="img/consul.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Consultoría</h5>
              <p class="card-text">Brindamos la mejor asesoría para optimizar los procesos dentro de su empresa.</p>
              
            </div>
          </div>
        </div>
        <div class="col-sm">
        
          <div class="card text-center" style="width: 21rem;">
            <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="img/desa.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Desarrollo Web</h5>
              <p class="card-text">Nos especializamos en la creación de sitios web para publicitar su empresa.</p>
             
            </div>
          </div>
        </div>
        
        <div class="col-sm">
        
          <div class="card text-center" style="width: 21rem;">
            <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="img/java.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Aplicaciones de escritorio</h5>
              <p class="card-text">Aplicaciones que te permitiran administrar tu empresa.</p>
              
            </div>
          </div>
        </div>
        </div>
        
        </div>
      
        <div class="container" id="nosotros">
        <div class="jumbotron jumbotron-fluid" id="Nosotros" style="background-color: white">
      
          <h1 class="display-3">Nosotros</h1>
          <p class="lead">
            <div class="embed-responsive embed-responsive-21by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_bc5y1w-djY"></iframe>
            </div>
            Somos una empresa dedicada especialmente a la consultoría, en la cual nos preocupamos por la calidad de nuestros
            servicios mediante normas y estándares, como lo son IEEE, ISO, etc. Somos también una empresa dedicada al Desarrollo
            de alicaciones Web y de escritorio. 
        
          </p>
          
        </div>
      </div>
      
      
      <div class="container" id="desarrolladores">
          <div class="jumbotron my-4" style="background-color: white">
              <h1 class="display-3">Desarrolladores</h1>
        <div class="card-deck" >
          <div class="card text-center" class="card border-primary mb-3" style="max-width: 15rem;">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="img/Dania.jpeg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Dania Favela</h5>
              <p class="card-text">Especialista en equipos de alto rendimiento y  finanzas.</p>
            </div>
          </div>
          <div class="card text-center" class="card border-primary mb-3" style="max-width: 15rem;">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="img/Said.jpeg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Said Castañeda</h5>
              <p class="card-text">Especialista en desarrollo web y aplicaciones moviles </p>
            </div>
          </div>
          <div class="card text-center" class="card border-primary mb-3" style="max-width: 15rem;">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="img/Xiulma.jpg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Xiulma Soto</h5>
              <p class="card-text">Especialista en bases de datos y recopilacion de informacion.</p>
            </div>
          </div>
          <div class="card text-center" class="card border-primary mb-3" style="max-width: 15rem;">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="img/Luis.jpg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Luis Rocha</h5>
              <p class="card-text">Especialista en diseño de redes y aplicaciones de escritorio.</p>
            </div>
          </div>
        </div>
      
      
         
        </div>
       
        <div class="jumbotron jumbotron-fluid" id=contacto style="background-color: white">
        
            <div class="row">
              <div class="col-lg-12 text-center" style="background-color: white">
                <h1 class="display-4">Contacto</h1>
                <h3 class="section-subheading text-muted">Mantente en contacto con nosotros.</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-center">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.430538064624!2d-104.65621134980921!3d24.015878284424147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb7e36ebfd405%3A0xee348102c58319d1!2sTepoztlan+326%2C+Azcapotzalco%2C+34160+Durango%2C+Dgo.!5e0!3m2!1ses!2smx!4v1564442848071!5m2!1ses!2smx" width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                      <div class="form-group">
                      <h5 class="section-subheading text-muted">Tepoztlan #326 col.azcapotzalco</h5>

                      </div>
                      <div class="form-group">
                      <h5 class="section-subheading text-muted">CP:34160 Durango,Dgo</h5>
                      </div>
                      <div class="form-group">
                      <h5 class="section-subheading text-muted">Telefono: 6181654853</h5>

                      </div>
                   
                    </div>
                   
          
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                      <div id="success"></div>
                       <a href="/contactos/" class="btn btn-primary">Enviar mensaje</a>
                    </div>
            </form>
            </div>
          </div>
        </div>
        </body>
        </html>
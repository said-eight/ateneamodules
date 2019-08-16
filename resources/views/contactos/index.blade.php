<!DOCTYPE html>
<html lang="en">
<head>
  <title>Atenea</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="../img/ico.png">

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>
    <body data-spy="scroll" data-target="#navbarsExampleDefault">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Atenea</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item  mr-4">
                            <a class="nav-link" href="#demo">Inicio </a>
                        </li>
                        <li class="nav-item  mr-4">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item  mr-4">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item  mr-4">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Idioma
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Español</a>
                              <a class="dropdown-item" href="/contactos/create">Ingles</a>
                            </div>
                          </li>
                    </ul>
                </div>
            </div>    
        </nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/atenea.png" alt="Los Angeles">
      
    </div>
    <div class="carousel-item">
      <img src="../img/con0.jpg" alt="Chicago" >
      <div class="carousel-caption">
          <h3>Contactanos</h3>
          <p>Atrevete a mejorar</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="../img/con2.png" alt="New York">
      <div class="carousel-caption">
        <h3>Servicio de consultoría</h3>
        <p>Optimizamos tus procesos</p>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container" id="servicios">
    <h1 class="display-3">Servicios</h1>

  <div class="row">
  <div class="col-sm">
  
    <div class="card text-center">
      <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/consul.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Consultoría</h5>
        <p class="card-text">Brindamos la mejor asesoría para optimizar los procesos dentro de su empresa.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm">
  
    <div class="card text-center" >
      <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/desa.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Desarrollo Web</h5>
        <p class="card-text">Nos especializamos en la creación de sitios web para publicitar su empresa.</p>
       
      </div>
    </div>
  </div>
  
  <div class="col-sm">
  
    <div class="card text-center">
      <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/java.jpg" alt="Card image cap">
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
      Somos una empresa mexicana, dedicada al área de tecnologías de comunicación, buscamos brindar nuestros servicios de consultoría y desarrollo de aplicaciones informáticas a empresas, que busquen mejorar el rendimiento y calidad de sus procesos tecnológicos, siempre con soluciones innovadoras.
  
    </p>
    
  </div>
</div>


<div class="container" id="desarrolladores">
    <div class="jumbotron my-4" style="background-color: white">
        <h1 class="display-3">Desarrolladores</h1>
  <div class="card-deck" >
    <div class="card text-center" class="card border-primary mb-3">
      <img style="width:200px; height:200px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/Dania.jpeg" alt="Card image cap">
      <div class="card-body text-primary">
        <h5 class="card-title">Dania Favela</h5>
        <p class="card-text">Especialista en equipos de alto rendimiento y  finanzas.</p>
      </div>
    </div>
    <div class="card text-center" class="card border-primary mb-3" >
      <img style="width:200px; height:200px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/Said.jpeg" alt="Card image cap">
      <div class="card-body text-primary">
        <h5 class="card-title">Said Castañeda</h5>
        <p class="card-text">Especialista en desarrollo web y aplicaciones moviles </p>
      </div>
    </div>
    <div class="card text-center" class="card border-primary mb-3">
      <img style="width:200px; height:200px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/Xiulma.jpg" alt="Card image cap">
      <div class="card-body text-primary">
        <h5 class="card-title">Xiulma Soto</h5>
        <p class="card-text">Especialista en bases de datos y recopilacion de informacion.</p>
      </div>
    </div>
    <div class="card text-center" class="card border-primary mb-3">
      <img style="width:200px; height:200px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/Luis.jpg" alt="Card image cap">
      <div class="card-body text-primary">
        <h5 class="card-title">Luis Rocha</h5>
        <p class="card-text">Especialista en diseño de redes y aplicaciones de escritorio.</p>
      </div>
    </div>
  </div>


   
  </div>
</div>

<div class="container" id="clientes">
    <div class="jumbotron my-4" style="background-color: white">
        <h1 class="display-3">Clientes</h1>

        <div class="card text-center" class="card border-primary mb-3">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/bigote.jpg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Bigote Rojo</h5>
              <p class="card-text">es una empresa de servicios estéticos enfocada en el corte de cabello y afeitado de barba, fundada en la ciudad de Durango, Dgo</p>
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
</div>
<div class="col-lg-12 text-center" style="background-color: white">
<p>
<button class="btn btn-primary" type="button"  data-toggle="collapse" data-target="#ingresar" aria-expanded="false" aria-controls="ingresar">
  Ingresar mensaje
</button>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#mostrar" aria-expanded="false" aria-controls="mostrar">
  Mostrar mensajes
</button>
</p>
</div>
<div class="collapse" id="ingresar">
<div class="card card-body">
  <div class="row">
    <div class="col-lg-12">
      <form method="POST" action="/contactos" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" name="nombre" type="text" placeholder="Nombre Completo" required="required" data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" name="email" type="email" placeholder="Correo Electrónico" required="required" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input class="form-control" name="telefono" type="tel" placeholder="Teléfono" required="required" data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input class="form-control" name="asunto" type="text" placeholder="Asunto" required="required" data-validation-required-message="Please enter your ">
              <p class="help-block text-danger"></p>
              </div>
            <div class="form-group">
              <textarea class="form-control" name="mensaje" placeholder="Escribe un mensaje" required="required" data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensaje</button>
          </div>
        </div>
      </form>
    </div>       
   </div>
</div>
<div class="collapse" id="mostrar">
<div class="card card-body">
  <div class="table-responsive">

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">email</th>
          <th scope="col">telefono</th>
          <th scope="col">asunto</th>
          <th scope="col">mensaje</th>
    
    
    
        </tr>
      </thead>
      <tbody>
    @foreach ($contactos as $contacto)
          <tr>
            <th scope="row">{{$contacto->nombre}}</th>
            <td>{{$contacto->email}}</td>
            <td>{{$contacto->telefono}}</td>
            <td>{{$contacto->asunto}}</td>
            <td>
            
               
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$contacto->mensaje}}">
                    ver mensaje
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="{{$contacto->mensaje}}" tabindex="-1" role="dialog" aria-labelledby="{{$contacto->mensaje}}Title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="{{$contacto->mensaje}}Title">{{$contacto->asunto}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            {{$contacto->mensaje}}
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              
            
          </tr>
     @endforeach
      </tbody>
    </table>
    </div>
    </div>
            </div>
</div>
</body>
</html>

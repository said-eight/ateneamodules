<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../css/font.css">
  <link rel="stylesheet" href="../css/main.css">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/heroic-features.css" rel="stylesheet">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="css/heroic-features.css" rel="stylesheet">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Atenea</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#servicios">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#nosotros">Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacto">Contact</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="/contactos/">Spanish</a>
                    
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
            <div class="carousel-item active" style="background-image: url('../img/atenea.png')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4"></h2>
                <p class="lead"></p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/con1.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Consultances</h2>
                <p class="lead"></p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('../img/con3.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Contact us</h2>
                <p class="lead">and be part of the innovation</p>
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
          <h1 class="display-3">services</h1>
      
        <div class="row">
        <div class="col-sm">
        
          <div class="card text-center" style="width: 21rem;">
            <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/consul.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Consultance</h5>
              <p class="card-text">We give you the best adviser's office to improve your enterprise</p>
              
            </div>
          </div>
        </div>
        <div class="col-sm">
        
          <div class="card text-center" style="width: 21rem;">
            <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/desa.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Web development</h5>
              <p class="card-text">We specialize in web sites to manage and advertise your bussiness.</p>
             
            </div>
          </div>
        </div>
        
        <div class="col-sm">
        
          <div class="card text-center" style="width: 21rem;">
            <img style="width:100px; height:100px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/java.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Desktop Apps</h5>
              <p class="card-text">Aplications to manage your enterprise.</p>
              
            </div>
          </div>
        </div>
        </div>
        
        </div>
      
        <div class="container" id="nosotros">
        <div class="jumbotron jumbotron-fluid" id="Nosotros" style="background-color: white">
      
          <h1 class="display-3">Us</h1>
          <p class="lead">
            <div class="embed-responsive embed-responsive-21by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_bc5y1w-djY"></iframe>
            </div>
            We are a Mexican company, dedicated to the area of ​​communication technologies, we seek to provide our consulting services and Software development to companies that seek to improve the performance and quality of their technological processes, always with innovative solutions.
        
          </p>
          
        </div>
      </div>
      
      
      <div class="container" id="desarrolladores">
          <div class="jumbotron my-4" style="background-color: white">
              <h1 class="display-3">Our team</h1>
        <div class="card-deck" >
          <div class="card text-center" class="card border-primary mb-3" style="max-width: 15rem;">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/Dania.jpeg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Dania Favela</h5>
              <p class="card-text">Specialist in groups high-performance teams and finances</p>
            </div>
          </div>
          <div class="card text-center" class="card border-primary mb-3" style="max-width: 15rem;">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/Said.jpeg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Said Castañeda</h5>
              <p class="card-text">Specialist in web development and mobile apps</p>
            </div>
          </div>
          <div class="card text-center" class="card border-primary mb-3" style="max-width: 15rem;">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/Xiulma.jpg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Xiulma Soto</h5>
              <p class="card-text">Specialist in database and information gathering</p>
            </div>
          </div>
          <div class="card text-center" class="card border-primary mb-3" style="max-width: 15rem;">
            <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/Luis.jpg" alt="Card image cap">
            <div class="card-body text-primary">
              <h5 class="card-title">Luis Rocha</h5>
              <p class="card-text">Specilist in network desing and desktop apps</p>
            </div>
          </div>
        </div>
      
      
         
        </div>
        <div class="container" id="clientes">
            <div class="jumbotron my-4" style="background-color: white">
                <h1 class="display-3">Clients</h1>

                <div class="card text-center" class="card border-primary mb-3">
                    <img style="width:120px; height:120px;" class="card-img-top rounded-circle mx-auto d-block" src="../img/bigote.jpg" alt="Card image cap">
                    <div class="card-body text-primary">
                      <h5 class="card-title">Bigote Rojo</h5>
                      <p class="card-text">
                          is an aesthetic services company focused on haircut and shaving of beards, founded in the city of Durango, Dgo</p>
                    </div>
                  </div>
        
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid" id=contacto style="background-color: white">
        
            <div class="row">
              <div class="col-lg-12 text-center" style="background-color: white">
                <h1 class="display-4">Contact us</h1>
                <h3 class="section-subheading text-muted">Stay in contact with us.</h3>
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
                      <h5 class="section-subheading text-muted">Phone : 6181654853</h5>

                      </div>
                   
                    </div>

            </form>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center" style="background-color: white">
            <p>
              <button class="btn btn-primary" type="button"  data-toggle="collapse" data-target="#ingresar" aria-expanded="false" aria-controls="ingresar">
                Send message
              </button>
              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#mostrar" aria-expanded="false" aria-controls="mostrar">
                Show message
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
                            <input class="form-control" name="asunto" type="tel" placeholder="Asunto" required="required" data-validation-required-message="Please enter your ">
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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Affair</th>
                        <th scope="col">Message</th>
                  
                  
                  
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
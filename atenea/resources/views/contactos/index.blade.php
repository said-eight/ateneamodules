@extends('layouts.app')

@section('title','Contacto')

@section('content') 
<div class="jumbotron jumbotron-fluid" id=contacto style="background-color: white">
    <div class="col-lg-12 text-center" style="background-color: white">
        <h1 class="display-3">Mensajes </h1>
        <h3 class="display-8"> <br> </h3>
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
                  <th scope="col">Nombre</th>
                  <th scope="col">email</th>
                  <th scope="col">telefono</th>
                  <th scope="col">asunto</th>
                  <th scope="col">mensaje</th>
                  <th scope="col">editar</th>
                  <th scope="col">eliminar</th>
            
            
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
                    <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#{{$contacto->nombre}}">
                        editar
                      </button>
                      <div class="modal fade" id="{{$contacto->nombre}}" tabindex="-1" role="dialog" aria-labelledby="{{$contacto->nombre}}" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <form method="POST" action="/contactos/{{$contacto->id}}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                      <input class="form-control" name="nombre" type="text" placeholder="Nombre Completo" value="{{$contacto->nombre}}" required="required" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Correo Electrónico" value="{{$contacto->email}}" required="required" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                      </div>
                                      <div class="form-group">
                                        <input class="form-control" name="telefono" type="tel" placeholder="Teléfono" value="{{$contacto->telefono}}" required="required" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <input class="form-control" name="asunto" type="tel" placeholder="Asunto" value="{{$contacto->asunto}}"required="required" data-validation-required-message="Please enter your ">
                                        <p class="help-block text-danger"></p>
                                        </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="mensaje" placeholder="Escribe un mensaje"  required="required" data-validation-required-message="Please enter a message.">{{$contacto->mensaje}}</textarea>
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
                        </div>

                    </td>
                    <td><button type="button" class="btn btn-danger">eliminar</button></td>
                  </tr>
             @endforeach
              </tbody>
            </table>
            </div>
            </div>
                    </div>
      </div>

@endsection
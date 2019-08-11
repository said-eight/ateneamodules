@extends('layouts.app')

@section('title','Contacto')
@section('content') 
<div class="jumbotron jumbotron-fluid" id=contacto style="background-color: white">
  
    <div class="row">
      <div class="col-lg-12 text-center" style="background-color: white">
        <h1 class="display-4">Contacto</h1>
        <h3 class="section-subheading text-muted">Mantente en contacto con nosotros.</h3>
      </div>
    </div>
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
@endsection
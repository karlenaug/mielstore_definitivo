<body class="cfondo">
<?php
session_start();

if (isset($_SESSION['usuario_registrado'])) {
   
  $mensaje = $_SESSION['usuario_registrado'];
    unset($_SESSION['usuario_registrado']); //se borra aumaticamente luesgo de mostrar
}
?>

<h1 class="titulo centrado">Registrarse</h1>
<!--formulario de registro!-->
<section class="container">
<form class="g-3 needs-validation was-validated container" style="min-height: 500px;" action="datosregistro.php" method="POST">
  <div class="row mt-3">
    <div class="col-md-6">
      <label for="nombre" class="form-label">Nombre Completo</label>
      <input type="text" class="form-control input-group has-validation " id="nombre" name=nombre value="" required="required">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" class="form-control input-group has-validation" id="apellido" name=apellido value="" required="required">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <div class="row mt-3">
      <div class="col-md-6">
        <label for="email" class="form-label">Correo Electrónico</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
          <input type="text" class="form-control is-invalid" id="email" name="email" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required="required">
          <div class="valid-feedback">
          Looks good!
         </div>
       </div>
      </div>
      <div class="col-md-6">
        <label for="contraseña" class="form-label">Contraseña</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control is-invalid" id="contraseña" name=contraseña aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required="required">
          <div class="valid-feedback">
          Looks good!
        </div>
      </div>
  </div>
 <div class="row">
    <div class="col-md-6">
        <label for="confirmar-contraseña" class="form-label">Repetir contraseña</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control is-invalid" id="confirmar-contraseña" name=confirmar-contraseña aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required="required">
          <div class="valid-feedback">
           Looks good!
          </div>
       </div>
    </div>  
   <div class="col-12 mt-4">
          <button class="btn btn-warning" type="submit" name="guardar" >Registrarse</button>
    </div>
 </div>  
</form></section>
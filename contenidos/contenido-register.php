<body class="cfondo">
<h1 class="titulo centrado">Registrarse</h1>
<!--formulario de registro!-->
<section class="container">
<form class="g-3 needs-validation was-validated container" style="min-height: 500px;">
  <div class="row mt-3">
    <div class="col-md-6">
      <label for="validationServer01" class="form-label">Nombre Completo</label>
      <input type="text" class="form-control input-group has-validation " id="validationServer01" value="" required="required">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationServer02" class="form-label">Apellido</label>
      <input type="text" class="form-control input-group has-validation" id="validationServer02" value="" required="required">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <div class="row mt-3">
      <div class="col-md-6">
        <label for="validationServerUsername" class="form-label">Correo Electrónico</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
          <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required="required">
          <div class="valid-feedback">
          Looks good!
         </div>
       </div>
      </div>
      <div class="col-md-6">
        <label for="validationServerUsername" class="form-label">Contraseña</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required="required">
          <div class="valid-feedback">
          Looks good!
        </div>
      </div>
  </div>
 <div class="row">
    <div class="col-md-6">
        <label for="validationServerUsername" class="form-label">Repetir contraseña</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required="required">
          <div class="valid-feedback">
           Looks good!
          </div>
       </div>
    </div>  
   <div class="col-12 mt-4">
          <button class="btn btn-warning" type="submit">Registrarse</button>
    </div>
 </div>  
</form></section>
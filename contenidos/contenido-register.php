<body class="cfondo">
<h1 class="titulo centrado">Registrarse</h1>
<!--formulario de registro!-->
<section class="container">
<form class="g-3 needs-validation was-validated container" style="min-height: 500px;">
  <div class="row mt-3">
    <div class="col-md-6">
      <label for="validationServer01" class="form-label">First name</label>
      <input type="text" class="form-control input-group has-validation " id="validationServer01" value="Mark" required="required">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationServer02" class="form-label">Last name</label>
      <input type="text" class="form-control input-group has-validation" id="validationServer02" value="Otto" required="required">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <div class="row mt-3">
      <div class="col-md-6">
        <label for="validationServerUsername" class="form-label">Username</label>
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
  <div class="col-12 mt-5 centrado">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form></section>
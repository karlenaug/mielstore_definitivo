<h1 class="centrado titulo">Registrarse<h1>
  <!--formulario de registro!-->
<form class="row g-4 needs-validation container" novalidate>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label"><h2>Primer Nombre</h2></label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Correcto!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label"><h2>Apellido</h2></label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Correcto!
    </div>
 </div>
  <div>
   <form>
    <label for="validationCustom02" class="form-label"><h2>Correo electrónico</h2></label><br>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    <label for="pwd"><h2>Password</h2></label><br>
    <input type="password" id="pwd" name="pwd">
   </form>
 <div>
  <div class="col-12">
    <button class="btn btn-warning" type="submit">Registrarse</button>
  </div>
</form>
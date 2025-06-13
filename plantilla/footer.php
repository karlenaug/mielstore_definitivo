<footer class="centrado p-3 mb-2 bg-warning text-dark mt-5">
    <p>© 2025 Mielstore. Todos los derechos reservados.</p>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="#"><i class="fa-brands fa-instagram fa-lg" style="color: #db7500;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-brands fa-youtube fa-lg" style="color: #ce6f03;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true"><i class="fa-brands fa-facebook fa-lg" style="color: #bd6500;"></i></a>
      </li>
    </ul>
  </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
<section>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/letteranimation.min.js"></script>  
<script type="text/javascript" src="assets/js/scrolly.js"></script>
    <script>
       window.onload = function() {
          scrolly();
       }; 
    </script>    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.0/dist/sweetalert2.all.min.js"></script>
<script>
 var mensaje_1 = "<?php echo $mensaje; ?>"
  if (mensaje_1) {
     Swal.fire({
      title: "Se registró con éxito!",
      icon: "success",
      draggable: true,
      timer: 4000});
  }
   

   </script> 
  </body>
</html>
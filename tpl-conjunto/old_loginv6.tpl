<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <title>Acceso</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
   <!-- Favicon Icon -->
   <link rel="icon" type="image/png" href="img/favicon.png">
   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <!-- Custom styles for this template-->
   <link href="css/osahan.css" rel="stylesheet">
   <!-- Owl Carousel -->
   <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
   <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">

   <script type="text/javascript" src="js/rollups/hmac-sha3.js"></script>
   <script type="text/javascript" src="js/components/sha3.js"></script>
   <script type="text/javascript">
      function validar() {
         // DOM: Document Objects Model
         // $("#pwd").val( CryptoJS.SHA3( $("#pwd").val() ) ); // JQuery

         // JavaScript
         if (document.forms[0].email.value == "") {
            alert("Se requiere el email");
            document.forms[0].email.focus();
            return false;
         }
         if (document.forms[0].pwd.value == "") {
            alert("Se requiere la contraseña");
            document.forms[0].pwd.focus();
            return false;
         }

         document.forms[0].pwd.value = CryptoJS.SHA3( document.forms[0].pwd.value ); 
      }
   </script>
</head>
<body>
<div class="container">
   <div class="card">
      <div class="card-header"><h1>{$SOFTWARE}</h1></div>
      <div class="card-body">
         <form action="{$LOGINI}" method="post" onsubmit="return validar();">
            <div class="form-group">
               <label for="email">Cuenta:</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
            </div>
            <div class="form-group">
               <label for="pwd">Contraseña:</label>
               <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Clave">
            </div>
            <div class="form-group form-check">
               <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Recordar
               </label>
            </div>
         <button type="submit" class="btn btn-primary">Aceptar</button>
      </form>
      <hr/>
      {$error1}
      </div> 
      <div class="card-footer">{$EMPRESA}<br/>
         <small><strong>Autor: {$AUTOR}</strong></small>
      </div>
   </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Owl Carousel -->
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/custom.js"></script>
</body>
</html>
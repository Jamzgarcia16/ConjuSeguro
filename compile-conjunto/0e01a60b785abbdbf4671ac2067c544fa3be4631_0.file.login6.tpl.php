<?php
/* Smarty version 3.1.32, created on 2019-02-16 03:02:02
  from 'C:\xampp\tpl-conjunto\login6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c676f1a8278b9_07599972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e01a60b785abbdbf4671ac2067c544fa3be4631' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\login6.tpl',
      1 => 1549991563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c676f1a8278b9_07599972 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Acceso</title>
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
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <!--===============================================================================================-->

      <?php echo '<script'; ?>
 type="text/javascript" src="js/rollups/hmac-sha3.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="js/components/sha3.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">
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
      <?php echo '</script'; ?>
>
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">


               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="fotos/einsten.jpg" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Welcome to Gallery Jamz Garcia</h5>
                        <p>Es un hecho establecido hace mucho tiempo <br> que un lector 
                           será distraído por lo legible..</p>
                     </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['LOGINI']->value;?>
" method="post" onsubmit="return validar();">
                           <div class="form-group">
                              <label for="email">Cuenta:</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
                           </div>
                           <div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
                              <span class="btn-show-pass">
                                 <i class="fa fa fa-eye"></i>
                              </span>
                              <input class="input100" type="password" id="pwd" name="pwd" placeholder="Password">
                              <span class="focus-input100"></span>
                           </div>
                           <div class="form-group form-check">
                              <label class="form-check-label">
                                 <input class="form-check-input" type="checkbox"> Recordar
                              </label>
                           </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Iniciar Sesion</button>
                                 </div>
                           </div>
                        </div>
                     </form>
                     <div class="text-center mt-5">
                        <p class="light-gray"> ¿Ya tienes una cuenta? <a href="register.html">Regístrate</a></p>
                     </div>
                  </div>
               </div>



               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="fotos/RobertoWaltman.jpg" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">​Roberto Waltman</h5>
                              <p class="mb-3">"En el único y verdadero camino. La versión orientada a objetos de 'código spaghetti' es, por supuesto, «código Lasagna. (demasiadas capas)." By - Roberto Waltman. </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="fotos/DonaldEnuth.jpg" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Donald E. Knuth. </h5>
                              <p class="mb-3">"Si McDonalds funcionara como una empresa de software, uno de cada cien Big Macs le daría la intoxicación alimentaria, y la respuesta sería, 'Lo sentimos, aquí tiene un cupón para dos más" By - Donald E. Knuth. </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="fotos/LinusTorvalds.jpg" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Linus Torvalds</h5>
                              <p class="mb-3">"La mayoría de los buenos programadores programan, no porque esperan que se les pague o por adulación por parte del público, sino porque es divertido programar." By - Linus Torvalds </p>
                           </div>
                        </div>

                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="fotos/bill.jpg" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Bill Gates</h5>
                              <p class="mb-3">
                        “Primero aprenda informática y toda la teoría. Acto seguido desarrolle un estilo de programación. Luego olvidesé todo eso y solo hackee.” By - George Carrette </p>
                           </div>
                        </div>                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
      <!-- Core plugin JavaScript-->
      <?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>
      <!-- Owl Carousel -->
      <?php echo '<script'; ?>
 src="vendor/owl-carousel/owl.carousel.js"><?php echo '</script'; ?>
>
      <!-- Custom scripts for all pages-->
      <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
   </body>

</html><?php }
}

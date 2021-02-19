<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('resources/Login/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('resources/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('resources/Login/vendor/animate/animate.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('resources/Login/vendor/css-hamburgers/hamburgers.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('resources/Login/vendor/select2/select2.min.cssotstrap/css/bootstrap.min.css'); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('resources/Login/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('resources/Login/css/main.css'); ?>">

	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url('resources/landingpage/img/core-img/colectivo-removebg-preview.png'); ?>" alt="IMG">
				</div>

				<input type="hidden" name="registro" id="registro" value="<?php echo $this->session->flashdata('registro'); ?>">
				<form class="login100-form validate-form" id="registroForm">
					<span class="login100-form-title">
						Crear una cuenta
					</span>
					  <input type="hidden" value="Registro" name="typeOauth" id="typeOauth">
					<div class="wrap-input100 validate-input" data-validate="Valid name is required: Xugua">
						<input class="input100" type="text"  id="nombres" name="nombres" placeholder="Nombre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Valid apellido is required: apellido">
						<input class="input100" type="text" id="apellidos" name="apellidos" placeholder="Apellido(s)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Correo" id="email" name="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button type="" class="login100-form-btn btn-registrar">
							  Registrarme
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Olvidé mi
						</span>
						<a class="txt2" href="#">
							contraseña
						</a>
					</div>
					<div class="text-center p-t-12">
						<span class="txt3">
							crear cuenta usando
						</span>
					</div>

					<div class="text-center p-t-12">
						<a class="" href="Registro/googleRegister" style="text-transform:none">
							<div class="left">
								<img width="40px" style="margin-top:0px; margin-right:0px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
							</div>
							<!-- <i class="fa fa-google" style="width:6; height:6;background:red; color:white; border: 20px solid red;
      border-radius: 50%;"></i> -->
						</a>
					</div>
					<div class="text-center p-t-70">
						<a class="txt2" href="<?= ("Login") ? './Login' : 'Login'; ?>">
							Ya tengo una cuenta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="<?= base_url('resources/Login/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('resources/Login/vendor/bootstrap/js/popper.js'); ?>"></script>
	<script src="<?= base_url('resources/Login/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('resources/Login/vendor/select2/select2.min.js'); ?>"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('resources/Login/vendor/tilt/tilt.jquery.min.js'); ?>"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<!--===============================================================================================-->
	<script src="<?= base_url('resources/Login/js/main.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="<?=base_url('resources/assets/js/ServicesJs.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var condition = $(document).find('#registro').val();
				if(condition =='false'){
					Swal.fire({
					  icon: 'warning',
					  title: 'Algo salio mal...',
						html:
						    'El correo ya existe en el sistema!' +
						    '',
						  showCloseButton: true,
						  showCancelButton: true,
						  focusConfirm: false,
						  confirmButtonText:
						    '<a href="<?= ("Login") ? './Login' : 'Login'; ?>" style="color:white;font-size: 16px; "><i class="fa fa-location-arrow"></i> Ir a Login</a>',
						  cancelButtonText: '<a href="" style="color:white;font-size: 16px; ">Cancelar</a>'
					})
			 }
			});
	</script>

	<script type="text/javascript">
		$(function(){

			let response="";
			$(document).on('submit','#registroForm',function(event){
				event.preventDefault();


				_url = "";
				_url = _principalURL()+"User/api/registro/";
				_method = "POST";
				 $(document).find('.btn-registrar').prop('disabled',true);

				$.ajax({
					url: _url,
					method : _method,
					headers : {
						'X-API-KEY':'MhodiKey'
					},
					data: $(document).find('#registroForm').serialize(),
					success : function(_response){
					response = JSON.stringify(_response);

					if (_response.status=="error") {
					 $(document).find('.btn-registrar').prop('disabled',false);
					 Swal.fire({
						 icon: 'error',
						 title: 'Revisa tus datos...',
						 html:
								 '' +
								 '',
							 showCloseButton: true,
							 showCancelButton: true,
							 focusConfirm: false,
							 confirmButtonText:
								 'OK'
					 })
					}
					if (_response.status=="success") {
						// $(document).find('.btn-registrar').prop('disabled',false);

							Swal.fire({
							  icon: 'success',
							  title: 'Tu cuenta ha sido creada...',
								html:
								    'Revisa tu correo, resibiras tu contraseña para ingresar' +
								    '',
								  showCloseButton: true,
								  showCancelButton: true,
								  focusConfirm: false,
								  confirmButtonText:
								    '<a href="<?= ("Login") ? './Login' : 'Login'; ?>" style="color:white;font-size: 16px; "><i class="fa fa-location-arrow"></i> Ir a Login</a>',
								  cancelButtonText: '<a href="" style="color:white;font-size: 16px; ">Cancelar</a>'
							})

					}
					/* if (_response.status=="success") {
						$(document).find('.btn-registrar').prop('disabled',false);
						$(document).find('#responseText').html(
							'<div class="alert alert-success fade show" role="alert">'+
							'<h4 class="alert-heading">Felicidades!</h4>'+
							'Sus datos han sido registrados correctamente, <br/>'+
							'nos pondremos en contacto con usted tan pronto como sea posible,</br>'+
							'Ya puedes iniciar sesión<br/>'+
							'Ingrese su contraseña y correo gracias!<br/>'+
							'</div>'
						);
					} */

					tostada(_response.status,_response.message);


					},error : function(err){

					}
				});
			});
		});

	</script>
</body>

</html>

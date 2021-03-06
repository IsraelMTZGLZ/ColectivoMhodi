<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/Login/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/Login/vendor/animate/animate.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/Login/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/Login/vendor/select2/select2.min.cssotstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/Login/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('resources/Login/css/main.css');?>">

<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?=base_url('resources/landingpage/img/core-img/colectivo-removebg-preview.png');?>" alt="IMG">
				</div>
				<?php if ($this->session->flashdata('facebook')=="Error") { ;?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 18px;width: 350px;">
						<strong>Error!</strong> <?=$this->lang->line('problema_facebook_message')?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<label for="">ERROR</label>
						</button>
					</div>
				<?php } ;?>
				<?php if ($this->session->flashdata('facebookRegistro')=="yes") { ;?>
					<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 18px;width: 350px;">
						<strong>Bienvenido!</strong> Ya tienes una cuenta ahora ingresa desde la red social que elegiste, por favor revisa tu correo, es posible que el correo se encuentre en tu carpeta de spam
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
										<label for="">ERROR</label>
						</button>
					</div>
				<?php } ;?>
				<?php if ($this->session->flashdata('message')) { ;?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 18px;width: 350px;">
						<strong>Error!</strong> <?=@$this->session->flashdata('message')->message?>
						<br>			<label for="">ERRORbr</label>
						<ul>
						<?php foreach (isset($this->session->flashdata('message')->validations) ? $this->session->flashdata('message')->validations : array() as $value) { ;?>
								<li type="circle"> <?= $value ?> </li>
						<?php  } ;?>
						</ul>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
										<label for="">ERRORmessage</label>
						</button>
					</div>
				<?php } ;?>
				<?php if ($this->session->flashdata('messagePredeterminado')) { ;?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 18px;width: 350px;">
						<strong>Error!</strong> <?=@$this->session->flashdata('messagePredeterminado');?>
						<br>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ;?>
				<?php if ($this->session->flashdata('error')) { ;?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 18px;width: 350px;">
						<strong>Error!</strong> <?=$this->session->flashdata('error')['message']?>
						<ul>
						<?php foreach (isset($this->session->flashdata('error')['validations']) ? $this->session->flashdata('message')->validations : array() as $value) { ;?>
								<li type="circle"> <?= $value ?> </li>
						<?php  } ;?>
						</ul>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php } ;?>
				<label for=""><?php echo $this->session->flashdata('registro'); ?></label>
				<form  action="<?=base_url('/Login/Login/autenticar');?>" method="post" id="formLogin">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

          <div class="text-center p-t-12">
            <span class="txt3">
              Or Sign Up Using
            </span>


          </div>
          <div class="text-center p-t-12">

              <a class="" href="Login/google_login" style="text-transform:none">
                  <div class="left">
                      <img width="40px" style="margin-top:0px; margin-right:0px" alt="Google sign-in"
                          src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                  </div>
                  <!-- <i class="fa fa-google" style="width:6; height:6;background:red; color:white; border: 20px solid red;
      border-radius: 50%;"></i> -->
              </a>
          </div>
					<div class="text-center p-t-70">
						<a class="txt2" href="<?= ("Registro") ? './Registro' : 'Registro' ;?>">
							Crear una cuenta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?=base_url('resources/Login/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('resources/Login/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?=base_url('resources/Login/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('resources/Login/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('resources/Login/vendor/tilt/tilt.jquery.min.js');?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?=base_url('resources/Login/js/main.js');?>"></script>

</body>
</html>

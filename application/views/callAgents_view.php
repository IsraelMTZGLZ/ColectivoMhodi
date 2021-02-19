
<!DOCTYPE HTML>
<html lang="en">
<head>

<title>Anglo Latino Education Partnership</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <meta name="description" content="¿Te interesa estudiar en Reino Unido? Te asesoramos de manera GRATUITA y apoyamos en tu educación en instituciones y colegios británicos de excelencia." />
    <meta name="keywords" content="Anglo,Latino,Estudiar,Reino Unido,Asesores,Gratuita,Britanicos " />
    <meta name="author" content="Maxei Code" />
    <meta name="MobileOptimized" content="320" />
    <meta property="og:url" content="https://www.anglolatinoedu.com/">
    <meta property="og:site_name" content="Anglo Latino">
    <meta property="og:type" content="website">

	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">


	<link href="<?=base_url()?>resources/assets/Coming/common-css/ionicons.css" rel="stylesheet">



	<link href="<?=base_url()?>resources/assets/Coming/02-comming-soon/css/styles.css" rel="stylesheet">

	<link href="<?=base_url()?>resources/assets/Coming/02-comming-soon/css/responsive.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="<?=base_url('resources/assets/Anglo/LOGOTIPO-AngloLatino.png');?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?=base_url('resources/assets/Dashboard/center/assets/examples/css/advanced/toastr.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Hotjar Tracking Code for https://www.anglolatinoedu.com/ -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('resources/assets/Informativa/css/font-awesome.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('resources/assets/Informativa/css/sociales.css');?>" />
   
    
</head>
<body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="6623204789"
  logged_in_greeting="Hola! Cómo puedo ayudarte?"
  logged_out_greeting="Hola! Cómo puedo ayudarte?">
      </div>

<div class="icon-bar">
  <a href="https://www.facebook.com/AngloLatino/" target="_blank"  rel="noopener" class="facebook d-none d-sm-block"><i class="fab fa-facebook-f"></i></a>
  <a href="fb://page/6623204789" aria-label="Ir al facebook de anglo" target="_blank"  rel="noopener" class="facebook d-block d-sm-none"><i class="fab fa-facebook-f"></i></a>
  <a href="https://api.whatsapp.com/send?phone=524423645384&text=Quiero%20informacion%20para%20estudiar%20en%20Reino%20Unido" aria-label="Mandar mensaje whatsapp anglo" target="_blank" rel="noopener" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
  <!--<a href="https://www.linkedin.com/company/anglo-latino-education-partnership-limited" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>-->
  <a href="https://www.instagram.com/anglolatino__/?hl=es-la" target="_blank"  rel="noopener" class="instagram" aria-label="Ir a instagram de anglo"><i class="fab fa-instagram"></i></i></a>
  <a href="tel:4422609090" class="google" aria-label="Llamar a anglo"><i class="fas fa-phone"></i></a>
</div>
	<div class="main-area">

		<section class="left-section" style="background-image: url(https://i.pinimg.com/originals/3c/c3/74/3cc3742764733b4f3b940980be5c9866.jpg)">

			<div class="display-table center-text">
				<div class="display-table-cell">

					<div id="normal-countdown" data-date="2020/05/09"></div>

				</div><!-- display-table-cell -->
			</div><!-- display-table -->

		</section><!-- left-section -->


		<section class="right-section full-height">
            <a class="logo d-none d-sm-block d-md-none d-block d-sm-none" href="javascript:;" style="height: 50px;"><img src="<?=base_url()?>resources/assets/Anglo/AngloLatino-sintexto.png" alt="Logo"></a>

			<a class="logo" href="javascript:;" style="height: 90px;margin-left: 350px"><img src="<?=base_url()?>resources/assets/Anglo/AngloLatino-sintexto.png" alt="Logo"></a>

			<div class="display-table">
				<div class="display-table-cell">
					<div class="main-content">
						<h1 class="title" style="font-size: 30px;"><b>Has completado tu preproceso</b></h1>
						<p><strong> !Gracias por tu confianza! </strong> has terminado tu preproceso, para poder continuar con tu proceso ponte en contacto con uno de nuestros Asesores.Ellos te apoyaran para terminar tu proceso y continuar con nostros.</span></p>
                        <p style="color: #F84982" ><strong style="color: black">¡Gracias! </strong><?=@$user->names,' ', @$user->paterns?></p>
						<p>Utiliza alguno de los siguientes medios apra ponerte en contacto con nosotros: </span></p>

						<?php if ($user->typeUsuario=="Aspirante") { ;?>
							<div class="email-input-area" style="margin-top: 25px;">

									<!-- <button type="button" name="button">Hola</button> -->
									<!-- <input class="email-input" name="email" type="text" disabled placeholder="Envianos un correo"/>
									<button class="submit-btn" name="submit" type="button"><a href="https://mail.google.com/mail/?view=cm&fs=1&to=study@anglolatinoedu.com" target="_blank" style="color: white;"><b>Enviar</b></a></button> -->
									<ul class="footer-icons">
										<li>Contactanos : </li>
										<li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=study@anglolatinoedu.com" target="_blank" title="Gmail"><i class="iconify ion-social-gmail" data-icon="logos:google-gmail" data-inline="false" style="font-size: 20px;margin: 10px;  "></i></a></li>
										<li><a href="https://api.whatsapp.com/send?phone=524423645384&text=Quiero%20informacion%20para%20estudiar%20en%20Reino%20Unido" target="_blank" title="WhatsApp"><i class="iconify ion-social-whats" data-icon="logos:whatsapp" data-inline="false" style="color: #25d366;font-size: 30px;margin: 10px;"></i></a></li>

									</ul>

							</div><!-- email-input-area -->
							<div class="email-input-area" style="margin-top: -16px;">


									<ul class="footer-iconsT">
										<li>redes sociales : </li>

										<span ></span>
										<li><a href="https://www.facebook.com/AngloLatino/" target="_blank" title="Facebook"><i class="iconify ion-social-var" data-icon="cib:facebook" data-inline="false" style="font-size: 30px;margin: 10px; color: #2E86C1; top:-2;"></i></a></li>
										<li><a href="https://www.linkedin.com/company/anglo-latino-education-partnership-limited" target="_blank" title="Linkedin"><i class="iconify ion-social-var" data-icon="brandico:linkedin-rect" data-inline="false" style="font-size: 30px;margin: 10px;color: #007bb5;"></i></a></li>
										<li><a href="https://www.instagram.com/anglolatino__/?hl=es-la" target="_blank" title="Instagram"><i  class="iconify ion-social-var" data-icon="topcoat:instagram" data-inline="false" style="font-size: 30px;margin: 10px; color: #955E03;"></i></a></li>

										<li><a href="https://twitter.com/angloedu" target="_blank" title="Twitter"><i class="iconify ion-social-var" data-icon="entypo-social:twitter-with-circle" data-inline="false" style="font-size: 32px;margin: 10px;color: #00B9FF;"></i></a></li>
									</ul>

							</div>
							<div class="">
									<p style="color: #F84982"><a href="<?=base_url('Login/Login/logout')?>">Cerrar sesion</a></p>
							</div>
						<?php } ;?>
						<?php if ($user->typeUsuario=="Agente") { ;?>
							<div class="email-input-area" style="margin-top: -5px;">
								<input class="email-input" name="email" type="text" disabled placeholder="Edita tu informacion"/>
								<button class="submit-btn editarInfo" name="editarInfo" type="button" id="<?=@$user->agente;?>"><a style="color: white;"><b>Editar</b></a></button>
							</div><!-- email-input-area -->
							<?php } ;?>
						<p class="post-desc">Anglo Latino Education Partnership</p>
					</div><!-- main-content -->
				</div><!-- display-table-cell -->
			</div><!-- display-table -->



		</section><!-- right-section -->

	</div><!-- main-area -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Permisos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="comingForm">
        <div class="modal-body">

			<div class="form-group form-material" data-plugin="formMaterial">
				<label class="form-control-label" for="inputText">Nombre:</label>
				<input type="text" class="form-control" name="nombre" id="nombre" >
			</div>
			<div class="form-group form-material" data-plugin="formMaterial">
				<label class="form-control-label" for="inputText">Apellidos:</label>
				<input type="text" class="form-control" name="apellidos" id="apellidos" >
			</div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>

	<!-- SCIPTS -->

	<script data-cfasync="false" src="<?=base_url('resources/assets/Dashboard/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js');?>"></script><script src="<?=base_url('resources/assets/Dashboard/global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jquery/jquery.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/popper-js/umd/popper.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/animsition/animsition.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2');?>"></script>

  <!-- Plugins -->
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/switchery/switchery.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/intro-js/intro.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/screenfull/screenfull599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2');?>"></script>

  <!-- Plugins For This Page -->
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/skycons/skycons599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/aspieprogress/jquery-asPieProgress.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jvectormap/jquery-jvectormap.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/matchheight/jquery.matchHeight-min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jquery-appear/jquery.appear599c.js');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/nprogress/nprogress599c.js');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/ladda/spin.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/ladda/ladda.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/toastr/toastr.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/select2/select2.full.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-select/bootstrap-select.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/icheck/icheck.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/asrange/jquery-asRange.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/ionrangeslider/ion.rangeSlider.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/asspinner/jquery-asSpinner.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/clockpicker/bootstrap-clockpicker.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/ascolor/jquery-asColor.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/asgradient/jquery-asGradient.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/ascolorpicker/jquery-asColorPicker.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-maxlength/bootstrap-maxlength.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jquery-knob/jquery.knob.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-touchspin/bootstrap-touchspin.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jquery-labelauty/jquery-labelauty599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-datepicker/bootstrap-datepicker.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/timepicker/jquery.timepicker.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datepair/datepair.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datepair/jquery.datepair.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jquery-strength/password_strength599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jquery-strength/jquery-strength.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/multi-select/jquery.multi-select599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/typeahead-js/bloodhound.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/typeahead-js/typeahead.jquery.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/jquery-placeholder/jquery.placeholder599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net/jquery.dataTables599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-bs4/dataTables.bootstrap4599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-scroller/dataTables.scroller.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-responsive/dataTables.responsive.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-buttons/dataTables.buttons.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-buttons/buttons.html5.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-buttons/buttons.flash.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-buttons/buttons.print.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-buttons/buttons.colVis.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/bootbox/bootbox.min599c.js?v4.0.2');?>"></script>


  <!-- Scripts -->
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Component.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Base.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Config.min599c.js?v4.0.2');?>"></script>

  <script src="<?=base_url('resources/assets/Dashboard/center/assets/js/Section/Menubar.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/center/assets/js/Section/Sidebar.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/center/assets/js/Section/PageAside.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/center/assets/js/Plugin/menu.min599c.js?v4.0.2');?>"></script>

  <!-- Config -->
  <script src="<?=base_url('resources/assets/Dashboard/global/js/config/colors.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/center/assets/js/config/tour.min599c.js?v4.0.2');?>"></script>
  <script>
    Config.set('assets', '<?=base_url("resources/assets/Dashboard/center/assets");?>');
  </script>

  <!-- Page -->
  <script src="<?=base_url('resources/assets/Dashboard/center/assets/js/Site.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/asscrollable.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/slidepanel.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/switchery.min599c.js?v4.0.2');?>"></script>

  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/matchheight.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/jvectormap.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/jquery-appear.min599c.js')?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/nprogress.min599c.js');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/center/assets/examples/js/advanced/animation.min599c.js');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/loading-button.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/more-button.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/ladda.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/toastr.min599c.js?v4.0.2');?>"></script>

  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/select2.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/bootstrap-tokenfield.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/bootstrap-tagsinput.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/bootstrap-select.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/icheck.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/asrange.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/ionrangeslider.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/asspinner.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/clockpicker.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/ascolorpicker.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/bootstrap-maxlength.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/jquery-knob.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/bootstrap-touchspin.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/card.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/jquery-labelauty.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/bootstrap-datepicker.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/jt-timepicker.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/datepair.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/jquery-strength.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/multi-select.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/jquery-placeholder.min599c.js?v4.0.2');?>"></script>

  <script src="<?=base_url('resources/assets/Dashboard/global/js/Plugin/datatables.min599c.js?v4.0.2');?>"></script>
  <script src="<?=base_url('resources/assets/Dashboard/center/assets/examples/js/tables/datatable.min599c.js?v4.0.2');?>"></script>


	<script src="<?=base_url('resources/assets/JS/ServicesJS.js');?>"></script>
	<script>
		$(document).ready(function()
    		{
				var person ;
				

				$(document).on('submit','#comingForm',function (event){
					event.preventDefault();
					_url = _principalURL()+"User/api/editPerson/id/"+person;
					$.ajax({
						url: _url,
						method : 'PUT',
						headers : {
						'X-API-KEY':'ANGLOKEY'
						},
						data: $(document).find('#comingForm').serialize(),
						success : function(_response){
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                window.location.href = "<?php echo site_url('Login'); ?>";
                            },2000);
                        }

                        tostada(_response.status,_response.message);


						},error : function(err){

						}
					});
				});
			}
		);
	</script>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>
</html>

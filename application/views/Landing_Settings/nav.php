<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><span><img src="<?=base_url('resources/landingpage/img/core-img/colectivo.png');?>" alt="logo"></span> Colectivo Mhödi</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ("Inicio") ? './Inicio' : 'Inicio' ;?>">Inicio</a>
                    </li>
                    <li class="nav-item dropdown" id='dmenu'>
                        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Acerca de nosotros
                       </a> -->
                       <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">Something else here</a>
                       </div> -->
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="<?= ("Filosofia") ? './Filosofia' : 'Filosofia' ;?>">Acerca de nosotros</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="<?= ("Trayectoria") ? './Trayectoria' : 'Trayectoria' ;?>">Trayectoria</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="<?= ("Contacto") ? './Contacto' : 'Contacto' ;?>">Contacto</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="faq.html">Departamentos</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="pricing.html">Más</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Extra</a>
                    </li> -->
                    <li class="lh-55px"><a href="<?= ("Login") ? './Login' : 'Login' ;?>" class="btn login-btn ml-50">Iniciar!</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->

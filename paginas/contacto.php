<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
  <link href="../css/jquery.mmenu.all.css" rel="stylesheet" />
  <link href="../css/hamburgers.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/sweetalert.css">
  <script src="../js/sweetalert.min.js"></script>
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../css/style.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
  </script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
  </script>
  <![endif]-->
  <title>Contacto</title>
</head>
<body>

   <?php
    if (isset($_REQUEST['true'])) {
      echo "<script language = javascript>
              swal({
                title: '¡Excelente!',
                text: '".$_REQUEST['true']."',
                type: 'success',
                showCancelButton: false,
                closeOnConfirm: false,
                confirmButtonText: 'Ok',
                showLoaderOnConfirm: true, },
                function(){   
                  setTimeout(function(){
                    location = 'contacto.php';
                  });
                });
            </script>";
    }

    if (isset($_REQUEST['false'])) {
      echo "<script language = javascript>
              swal({
                title: '¡Advertencia!',
                text: '".$_REQUEST['false']."',
                type: 'warning',
                showCancelButton: false,
                closeOnConfirm: false,
                confirmButtonText: 'Ok',
                showLoaderOnConfirm: true, },
                function(){
                  setTimeout(function(){
                    location = 'contacto.php';
                  });
                });
            </script>";
    }
  ?>

  <!-- Page -->
  <div class="page">
    <!-- Loading -->
    <div id="page-loader">
      <div class="load-container">
        <svg class="tooth" id="Layer_1" version="1.1" x="0px" y="0px" width="79.687px" height="84.105px" viewBox="0 0 79.687 84.105" enable-background="new 0 0 79.687 84.105" xml:space="preserve">
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#21BDC4" d="M8.922,20.685c-1.984-7.528-0.928-14.827,2.27-17.864            c4.162-3.953,14.917-3.09,24.849-1.165l-5.024,3.279l1.618,2.696l14.933-5.063c8.949-1.913,23.547-4.789,28.854,0.253            c3.309,3.142,4.245,10.833,2.155,18.662c-5.699,21.352-4.529,22.611-3.544,40.241c0.219,3.913-0.895,8.028-2.454,12.061            c-3.777,9.771-14.779,15.57-15.106,3.609c-1.116-40.837-26.214-40.837-27.33,0c-0.327,11.961-11.329,6.161-15.107-3.609            c-2.21-5.715-2.716-11.591-2.432-16.835C13.695,36.82,13.865,39.443,8.922,20.685L8.922,20.685z M27.235,30.956            c0,12.692,32.734,12.692,32.734,0H27.235L27.235,30.956z M33.849,12.924c-1.903,0-3.446,2.969-3.446,6.633            c0,0.469,0.025,0.927,0.074,1.368h6.744c0.048-0.441,0.073-0.899,0.073-1.368C37.294,15.893,35.752,12.924,33.849,12.924            L33.849,12.924z M51.662,12.924c-1.903,0-3.446,2.969-3.446,6.633c0,0.469,0.025,0.927,0.073,1.368h6.745            c0.048-0.441,0.073-0.899,0.073-1.368C55.107,15.893,53.564,12.924,51.662,12.924L51.662,12.924z M66.902,5.66            c-0.517,0.085-1.035,0.169-1.552,0.254c10.769,10.548,0.714,23.021,4.723,26.968C74.235,17.556,75.046,4.952,66.902,5.66z"></path>
        </svg>
      </div>
    </div>
    <!-- ./Loading -->

    <!-- Page Header -->
    <header class="page-header section">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap" style="height: 0px;">
        <nav class="rd-navbar rd-navbar-original rd-navbar-fixed">
          <div class="rd-navbar-aside-outer">
            <div class="rd-navbar-aside__toggle rd-navbar-static--hidden toggle-original" data-rd-navbar-toggle=".rd-navbar-aside">
              <span></span>
            </div>
            <div class="rd-navbar-aside toggle-original-elements">
              <div class="object-inline">
                <span class="icon icon-sm material-icons-phone_iphone">
                </span>
                <a href="tel:+311 144 1686">
                  311 144 1686
                </a>
              </div>
              <ul class="list-inline-xs">
                <li>
                  <a class="icon icon-xs icon-darker fa fa-facebook" href="https://www.facebook.com/Dental-Orthodontics-Especializada-Cd-Del-Valle-1406259539494348/" target="_blank">
                  </a>
                </li>
                <li>
                  <a class="icon icon-xs icon-darker fa fa-instagram" href="#">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel -->
              <div class="rd-navbar-panel">
                <!-- <button href="#menu" class="rd-navbar-toggle toggle-original"><span></span></button> -->
                
               <button id="my-icon" class="hamburger hamburger--spin" type="button">
                  <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                  </span>
               </button>
                
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand">
                <a class="brand" href="../index.html">
                  <div class="brand__name">
                    <img src="../imagenes/logo.png" alt="" width="215" height="32">
                    <div class="words">
                      <span class="one">Ortodoncia<span class="two">Dental</span>
                      <p class="three">Especializada</p>
                    </div>
                  </div>
                </a>
                </div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap toggle-original-elements"> 
                <!-- Menu mobile -->
                <nav id="menu" class="mm-basic1">
                  <ul>
                    <li class="active"><a href="../index.html">Inicio</a></li>
                    <li><a href="../paginas/nosotros.html">Nosotros</a></li>
                    <li><a href="../paginas/servicios.html">Servicios</a>
                        <ul>
                            <li>
                              <a href="#">Operatoria</a>
                              <ul>
                                <li><a href="../paginas/vista-servicio/resinas.html">Resinas</a></li>
                                <li><a href="../paginas/vista-servicio/incrustaciones.html">Incrustaciones</a></li>
                              </ul>
                              </li>
                            </li>
                            <li><a href="../paginas/vista-servicio/endodoncia.html">Endodoncia</a></li></li>
                            <li><a href="../paginas/vista-servicio/prostodoncia.html">Prostodoncia</a>
                                <ul>
                                    <li><a href="../paginas/vista-servicio/protesis-fija.html">Protesis fija</a>
                                        <ul>
                                            <li><a href="../paginas/vista-servicio/coronas.html">Coronas</a></li>
                                            <li><a href="../paginas/vista-servicio/carillas.html">Carillas</a></li>
                                            <li><a href="../paginas/vista-servicio/implantes.html">Implantes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../paginas/vista-servicio/protesis-removible.html">Protesis removible</a></li>
                                    <li><a href="../paginas/vista-servicio/protesis-total.html">Protesis total</a></li>
                                </ul>
                            </li>
                            <li><a href="../paginas/vista-servicio/periodoncia.html">Periodoncia</a>
                                <ul>
                                    <li><a href="../paginas/vista-servicio/gingivectomia.html">Gingivectomia</a></li>
                                    <li><a href="../paginas/vista-servicio/gingivoplastia.html">Gingivoplastia</a></li>
                                    <li><a href="../paginas/vista-servicio/alargamiento-de-corona.html">Alargamiento de corona</a></li>
                                    <li><a href="../paginas/vista-servicio/frenectomia.html">Frenectomia</a></li>
                                    <li><a href="../paginas/vista-servicio/curetaje.html">Curetaje</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Estetica</a>
                                <ul>
                                    <li><a href="../paginas/vista-servicio/blanqueamiento.html">Blanqueamiento</a></li>
                                </ul>
                            </li>
                            <li><a href="../paginas/vista-servicio/odontopediatria.html">Odontopediatria</a>
                                <ul>
                                    <li><a href="../paginas/vista-servicio/selladores-fosetas-y-fisuras.html">Selladores, fosetas y fisuras</a></li>
                                    <li><a href="../paginas/vista-servicio/barnices-de-fluor.html">Barnices de flúor</a></li>
                                    <li><a href="../paginas/vista-servicio/coronas-infantiles.html">Coronas infantiles</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Cirugia bucal</a>
                                <ul>
                                    <li><a href="../paginas/vista-servicio/terceros-molares.html">Terceros molares</a></li>
                                    <li><a href="../paginas/vista-servicio/bichectomia.html">Bichectomia</a></li>
                                    <li><a href="../paginas/vista-servicio/injertos.html">Injertos</a></li>
                                    <li><a href="../paginas/vista-servicio/cirugia-ortonagtica.html">Cirugía ortonagtica</a></li>
                                </ul>
                            </li>
                            <li><a href="../paginas/vista-servicio/ortodoncia.html">Ortodoncia</a>
                                <ul>
                                    <li><a href="#">Tipos de brackets</a>
                                        <ul>
                                            <li><a href="../paginas/vista-servicio/brackets-convencionales.html">Brackets convencionales</a></li>
                                            <li><a href="../paginas/vista-servicio/brackets-autolegibles.html">Brackets autoligables</a></li>
                                            <li><a href="../paginas/vista-servicio/brackets-de-zafiro.html">Brackets de zafiro</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../paginas/vista-servicio/ortopedia-maxilar.html">Ortopedia maxilar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="../paginas/contacto.php">Contacto</a></li>
                    </ul>
                </nav>

                <!-- Menu desktop -->
                <ul class="nav">
                  <li><a href="../index.html" class="active">Inicio<span class="arrow">&#9660;</span></a></li>
                  <li><a href="../paginas/nosotros.html">Nosotros<span class="arrow">&#9660;</span></a></li>
                  <li><a href="../paginas/servicios.html">Servicios<span class="arrow">&#9660;</span></a>
                      <ul>
                          <li>
                            <a href="#">Operatoria<span class="arrow">&#9660;</span></a>
                            <ul>
                              <li><a href="../paginas/vista-servicio/resinas.html">Resinas<span class="arrow">&#9660;</span></a></li>
                              <li><a href="../paginas/vista-servicio/incrustaciones.html">Incrustaciones<span class="arrow">&#9660;</span></a></li>
                            </ul>
                          </li>
                          <li><a href="../paginas/vista-servicio/endodoncia.html">Endodoncia<span class="arrow">&#9660;</span></a></li></li>
                          <li><a href="../paginas/vista-servicio/prostodoncia.html">Prostodoncia<span class="arrow">&#9660;</span></a>
                              <ul>
                                  <li><a href="../paginas/vista-servicio/protesis-fija.html">Protesis fija<span class="arrow">&#9660;</span></a>
                                      <ul>
                                          <li><a href="../paginas/vista-servicio/coronas.html">Coronas<span class="arrow">&#9660;</span></a></li>
                                          <li><a href="../paginas/vista-servicio/carillas.html">Carillas<span class="arrow">&#9660;</span></a></li>
                                          <li><a href="../paginas/vista-servicio/implantes.html">Implantes<span class="arrow">&#9660;</span></a></li>
                                      </ul>
                                  </li>
                                  <li><a href="../paginas/vista-servicio/protesis-removible.html">Protesis removible<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/protesis-total.html">Protesis total<span class="arrow">&#9660;</span></a></li>
                              </ul>
                          </li>
                          <li><a href="../paginas/vista-servicio/periodoncia.html">Periodoncia<span class="arrow">&#9660;</span></a>
                              <ul>
                                  <li><a href="../paginas/vista-servicio/gingivectomia.html">Gingivectomia<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/gingivoplastia.html">Gingivoplastia<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/alargamiento-de-corona.html">Alargamiento de corona<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/frenectomia.html">Frenectomia<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/curetaje.html">Curetaje<span class="arrow">&#9660;</span></a></li>
                              </ul>
                          </li>
                          <li><a href="#">Estetica<span class="arrow">&#9660;</span></a>
                              <ul>
                                  <li><a href="../paginas/vista-servicio/blanqueamiento.html">Blanqueamiento<span class="arrow">&#9660;</span></a></li>
                              </ul>
                          </li>
                          <li><a href="../paginas/vista-servicio/odontopediatria.html">Odontopediatria<span class="arrow">&#9660;</span></a>
                              <ul>
                                  <li><a href="../paginas/vista-servicio/selladores-fosetas-y-fisuras.html">Selladores, fosetas y fisuras<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/barnices-de-fluor.html">Barnices de flúor<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/coronas-infantiles.html">Coronas infantiles<span class="arrow">&#9660;</span></a></li>
                              </ul>
                          </li>
                          <li><a href="#">Cirugia bucal<span class="arrow">&#9660;</span></a>
                              <ul>
                                  <li><a href="../paginas/vista-servicio/terceros-molares.html">Terceros molares<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/bichectomia.html">Bichectomia<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/injertos.html">Injertos<span class="arrow">&#9660;</span></a></li>
                                  <li><a href="../paginas/vista-servicio/cirugia-ortonagtica.html">Cirugía ortonagtica<span class="arrow">&#9660;</span></a></li>
                              </ul>
                          </li>
                          <li><a href="../paginas/vista-servicio/ortodoncia.html">Ortodoncia<span class="arrow">&#9660;</span></a>
                              <ul>
                                  <li><a href="#">Tipos de brackets<span class="arrow">&#9660;</span></a>
                                      <ul>
                                          <li><a href="../paginas/vista-servicio/brackets-convencionales.html">Brackets convencionales<span class="arrow">&#9660;</span></a></li>
                                          <li><a href="../paginas/vista-servicio/brackets-autolegibles.html">Brackets autoligables<span class="arrow">&#9660;</span></a></li>
                                          <li><a href="../paginas/vista-servicio/brackets-de-zafiro.html">Brackets de zafiro<span class="arrow">&#9660;</span></a></li>
                                      </ul>
                                  </li>
                                  <li><a href="../paginas/vista-servicio/ortopedia-maxilar.html">Ortopedia maxilar</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li><a href="../paginas/contacto.php">Contacto</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header><!-- .header -->

    <div class="main-holder">
      <div class="content-holder clearfix">
        <div class="container contact">
          <div class="row">
            
            <div class="col-xs-12">
              <h1 class="location">Contacto</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
                <li class="breadcrumb-item active">Contacto</li>
              </ol>
            </div><!-- .col-xs-12 -->
            
            <div class="content">
              <div class="type-page">
    
                <div class="col-xs-12 col-sm-6">
                  <h5>Clinica Ciudad del Valle</h5>
                  <address>
                    <strong>
                      Venecia #108 Interior #3
                    </strong>
                    <br>
                      Teléfono: 311-133-62-16<br>
                      Celular: 311-144-16-86<br>
                    <br>
                  </address>
                </div><!-- .col-xs-12 -->
    
                <div class="col-xs-12 col-sm-6">
                  <h5>Clinica Xalisco</h5>
                  <address>
                    <strong>
                    Porfirio Diaz 28-b entre Hidalgo y Monterrey 
                    </strong>
                    <br>
                    Celular: 311-145-48-65, 311-199-22-49 y 311-134-32-09<br>
                    <br>
                  </address>
                </div><!-- .col-xs-12 -->
    
                <div class="col-xs-12">
                  <div class="google-map">
                    <div id="mapa"></div>
                  </div>
                </div><!-- .col-xs-12 -->
                    
                <div class="col-xs-12 col-sm-4">
                  <div class="datas">
                    <h4>HORARIOS</h4>
                    <div class="group">
                      <strong>
                        Lunes a Sabado
                      </strong><br>
                      <p>9:00 am - 2:00 pm</p>
                      <p>4:00 pm - 8:00 pm</p>
                    </div><!-- .group -->
                    <div class="group">
                      <strong>
                      Domingo
                      </strong><br>
                      <p>9:00 am - 2:00 pm</p>
                    </div><!-- .group -->
                  </div><!-- .datas -->
                  <div class="datas">
                    <h4>REDES SOCIALES </h4>
                    <div class="group">
                      <strong>
                      Facebook
                      </strong>
                      <p>Dental Orthodontics especializada/Cd del valle</p>
                      <p>Dental Orthodontics especializada/Xalisco</p>
                    </div><!-- .group -->
                    <div class="group">
                      <strong>
                      Instagram
                      </strong>
                      <p>Dental Orthodontics especializada</p>
                    </div><!-- .group -->
                  </div><!-- .datas -->
                </div><!-- .col-xs-12 -->
    
                <div class="col-xs-12 col-sm-8">
                  <h2>Formulario de contacto</h2>
                  <div class="wrapper-form">
                    <form method="post" action="../php/emailprocess.php" id="contact" class="wpcf-form">
                      <div class="form-group col-xs-12 col-sm-4">
                        <label class="sr-only" for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre:">
                      </div>
                      <div class="form-group col-xs-12 col-sm-4">
                        <label class="sr-only" for="email">Correo:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo:">
                      </div>
                      <div class="form-group col-xs-12 col-sm-4">
                        <label class="sr-only" for="phone">Teléfono:</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono:">
                      </div>
                      <div class="form-group col-xs-12">
                        <label class="sr-only" for="message">Mensaje:</label>
                        <textarea class="form-control" cols="40" rows="10" id="message" name="message" placeholder="Mensaje:"></textarea>
                      </div>
                      <div class="form-group submit-wrap">
                        <input type="reset" value="Borrar" class="btn btn-primary ">
                        <input type="submit" value="Enviar" class="btn btn-primary" name="send">
                      </div>
                    </form>
                  </div><!-- .wrapper-form -->
                </div><!-- .col-xs-12 -->
                
              </div><!-- .type-page -->
            </div><!-- .content -->
          </div><!-- .row -->
        </div><!-- .contact -->
      </div><!-- .content-holder -->
    </div><!-- .main-holder -->
    

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 copyright">
            <h4>Derecho de autor</h4>
            <a href="../index.html"><h6>OrtodonciaDental</h6></a>
            <span>
              <a href="../index.html">OrtodonciaDental</a> © 2018 • 
              <a href="#">Política de privacidad</a>
            </span>
          </div>
          <div class="col-xs-12 col-sm-4 about-us">
            <h4>Nosotros</h4>
            <div class="txt">
              <h6>Misión</h6>
              <p>Ser una empresa eficaz, dinámica y vanguardista.
Queremos convertirnos en ...</p>
              <a href="../paginas/nosotros.html" class="btn btn-primary" >Leer más</a>
            </div>
            <div class="txt">
              <h6>Visión</h6>
              <p>Como clínica de especialidades odontológicas de ámbito nacional, contribuimos ...</p>
              <a href="../paginas/nosotros.html" class="btn btn-primary" >Leer más</a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 contact-us">
            <h4>Contacto</h4>
            <div class="icon-text">

              <div class="address">
                <div class="col-xs-2">
                  <i class="fa fa-home"></i>
                </div>
                <div class="col-xs-10 txt">
                    <p>
                      Venecia #108 Interior #3
                    </p>
                </div>
              </div>
              
              <div class="address">
                <div class="col-xs-2">
                  <i class="fa fa-facebook"></i>
                </div>
                <div class="col-xs-10 txt">
                    <a href="https://www.facebook.com/Dental-Orthodontics-Especializada-Cd-Del-Valle-1406259539494348/">
                      Dental Orthodontics especializada
                    </a>
                </div>
              </div>

              <div class="phone">
                <div class="col-xs-2">
                  <i class="fa fa-tablet"></i>
                </div>
                <div class="col-xs-10 txt">
                    <p>
                      <a href="tel:+311 144 1686">
                        311 144 1686
                      </a>
                    </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </footer><!-- .footer -->

    <div id="back-top-wrapper" class="visible-desktop">
      <p id="back-top">
        <a id="back-to-top"><span></span></a>
      </p>
    </div><!-- .visible-desktop -->
    
  </div><!-- .page -->

  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.mmenu.all.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/jquery.twbsPagination.js" type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG6MgXGJpetWhwrnSSOS6wD7Vz1S1LYBg&callback=initMap"
    async defer></script>
  <script src="../js/map.js" ></script>
  <script src="../js/scripts.js" ></script>
</body>
</html>

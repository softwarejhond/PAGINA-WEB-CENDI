<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mándanos</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icons/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/styleRegister.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="/assets/img/icons/logoMa.png" alt="logo"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#features">Servicios</a></li>
          <li><a href="#covertura">Cobertura</a></li>
          <li><a href="#contact">Contacto</a></li>
          <li class="active"><a href="register.html">Ingresar</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <div class="container register">
                    <div class="row">
                        <div class="col-md-3 register-left">
                            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                            <h3>Bienvenido</h3>
                            <p>Regístrate en tan solo 30 segundos y disfruta de nuestros servicios</p>
                            <input type="submit" name="" value="Ingresar"/><br/>
                        </div>
                        <div class="col-md-9 register-right">
                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Usuario nuevo</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                                </li>-->
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">¡Regístrate ahora!</h3>
                                    <div class="was-validated">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="custom-select" id="tipoDeIdentificacion" required>
                                                    <option value="" selected disabled>Tipo de identificación</option>
                                                    <option value="CEDULA DE CIUDADANIA">Cédula de ciudadanía</option>
                                                    <option value="TARJETA DE IDENTIDAD">Tarjeta de identidad</option>
                                                </select>
                                                <div class="invalid-feedback">Seleccione una identificación</div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="identificacion" class="form-control" placeholder="Número de identificación *" required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="apellidos" class="form-control" placeholder="Apellidos *" required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="nombre" class="form-control" placeholder="Nombre *" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="email" class="form-control" placeholder="Correo electrónico *"register>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" id="sexo" required>
                                                  <option value="" disabled selected>Sexo</option>
                                                  <option value="MASCULINO">Masculino</option>
                                                  <option value="FEMENINO">Femenino</option>
                                                </select>
                                                <div class="invalid-feedback">Seleccione un item</div>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Fecha de nacimiento</label>
                                                <input type="date" id="fechaNacimiento" class="form-control" placeholder="Fecha de nacimiento *" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="number" id="edad" class="form-control" placeholder="Edad *" min="16" max="80" required />
                                                <div class="invalid-feedback">Edad mínima de 16 años</div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="telefono" class="form-control" placeholder="Teléfono *" maxlength="10" minlength="7"/>
                                                <div class="invalid-feedback">Ingrese un número de teléfono de 7 o 10 dígitos</div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="direccion" class="form-control" placeholder="Dirección *" required />
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Register"/>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3  class="register-heading">Apply as a Hirer</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                            </div>
    
    
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                    <option>What is your Birthdate?</option>
                                                    <option>What is Your old Phone Number</option>
                                                    <option>What is your Pet Name?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                            </div>
                                            <input type="submit" class="btnRegister"  value="Register"/>
                                        </div>
                                        <label>Todos los datos estan protegidos bajo la ley de Habeas data</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
  <script type="text/javascript">
  emailjs.init('user_ojGUiWcdJ9PbiJLdkBfvx')
</script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
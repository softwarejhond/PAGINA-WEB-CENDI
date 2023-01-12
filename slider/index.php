<?php
$title="Carousel dinámico con Material Design - Bootstrap - PHP - MySQL";
/* Llamar la Cadena de Conexion*/ 
include ("config/conexion.php");
$active="active";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
</head>
<body class="hidden-sn purple-skin animated">
    <!--Double navigation-->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">
           <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p><?php echo $title; ?></p>
            </div>
            <ul class="nav navbar-nav float-xs-right">
				<li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>   
            </ul>
		</nav>
        <!--/.Navbar-->
    </header>
    <!--/Double navigation-->

    <!--Main layout-->
    <main>
        <div class="container">
            <!--Section: Main carousel-->
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
						<?php
							$sql_slider=mysqli_query($con,"select * from slider where estado=1 order by orden");
							$nums_slides=mysqli_num_rows($sql_slider);
						?>
                            <!--Indicators-->
                            <ol class="carousel-indicators">
								<?php 
									for ($i=0; $i<$nums_slides; $i++){
										
										if ($i==0){
											$active="active";
										} else {
											$active="";
										}
										?>
										<li data-target="#carousel-example-2" data-slide-to="<?php echo $i;?>" class="<?php echo $active;?>"></li>
										<?php
										
									}
								?>
                                
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
								<?php
									$active="active";
									while ($rw_slider=mysqli_fetch_array($sql_slider)){
								?>
								<!--Second slide-->
                                <div class="carousel-item <?php echo $active;?>">
                                    <!--Mask color-->
                                    <div class="view hm-black-light">
                                        <img src="img/slider/<?php echo $rw_slider['url_image'];?>" class="img-fluid" alt="">
                                        <div class="full-bg-img">
                                        </div>
                                    </div>
                                    <!--Caption-->
                                    <div class="carousel-caption">
                                        <div class="animated fadeIn">
                                            <h3 class="h3-responsive"><?php echo $rw_slider['titulo'];?></h3>
                                            <p><?php echo $rw_slider['descripcion'];?></p>
											<a class='btn btn-<?php echo $rw_slider['estilo_boton'];?> text-right' href="<?php echo $rw_slider['url_boton'];?>"><?php echo $rw_slider['texto_boton'];?></a>
												<br><br>	
									   </div>
                                    </div>
                                    <!--Caption-->
                                </div>
								<?php 
								$active="";
								}
								?>
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                <span class="icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                </div>
            </section>
            <!--/Section: Main carousel-->
            <!--Divider-->
            <div class="divider-new">
                <h2 class="h2-responsive">CAROUSEL DINAMICO PHP & MYSQL</h2>
            </div>
           <hr class="between-sections">
   </div>
    </main>
    <!--/Main layout-->
    <!--Footer-->
    <footer class="page-footer center-on-small-only">
      <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                &copy; <?php echo date('Y')?> Copyright: <a href="http://obedalvarado.pw"> Sistemas Web </a>
            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
   <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
        // SideNav init
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
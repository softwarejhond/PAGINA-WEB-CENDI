<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>

		<!-- Seccion de encabezado inicia-->
		<?php include 'header.php';?>
	<!-- Seccion de encabezado finaliza-->
	<br><br>

	<!-- Menu encabezado inicia -->
	<?php include 'navbar.php';?>
	<!-- Menu encabezado finaliza-->

	<!-- Indetifacion de pagina inicia -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.html"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-right"></i>
			<span>Institución</span><i class="fa fa-angle-right"></i>
			<span >Trabaje con nosotros</span>
		</div>
	</div>
	<!-- Indetifacion de pagina finaliza-->


	<!-- Nosotros seccion -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>BIENVENIDOS A TRABAJE CON NOSOTROS</h3>
				<p>"EDUCANDO EN LA RESPONSABILIDAD, EDUCAMOS PARA LA LIBERTAD"</p>
			</div>
			<div class="row">
				<div class="col-lg-12 about-text">
                    <div class="row">
                        <div class="col-6">
                        <img src="img/sliders/trabaje.png" alt="Trabaje con nosotros">
                        </div>
                        <div class="col-6">
							<b style="color: red;">Tenga en cuenta que todos los campos son
							obligatorios, de no rellenarlos no podrás registrar tu información.</b>
							<br>
							<br>
							
								<div class="form-group"> 
								  <label for="uname">Nombre completo:</label>
								  <input type="text" class="form-control" id="name" placeholder="Ingresar nombre aquí" name="uname" onblur="aMayusculas(this.value,this.id)"required>
								  <div class="valid-feedback">Valido.</div>
								  <div class="invalid-feedback">Por favor rellenar el campo con su nombre.</div>
								</div>
								<div class="form-group">
								  <label for="pwd">Correo eléctronico:</label>
								  <input type="email" class="form-control" id="email" placeholder="Ingresar correo aquí" name="mail" required>
								  <div class="valid-feedback">Valido.</div>
								  <div class="invalid-feedback">Por favor rellenar el campo con un correo valido.</div>
								</div>
								<div class="form-group">
									<label for="pwd">Dirección de residencia:</label>
									<input type="text" class="form-control" id="adress" placeholder="Ingresar dirección aquí" name="adres" onblur="aMayusculas(this.value,this.id)"required>
									<div class="valid-feedback">Valido.</div>
									<div class="invalid-feedback">Por favor rellenar el campo con una dirección valida.</div>
								  </div>
								  <div class="form-group">
									<label for="pwd">Teléfono:</label>
									<input type="text" class="form-control" id="phone" placeholder="Ingresar teléfono aquí" name="phon" required maxlength="7" minlength="7">
									<div class="valid-feedback">Valido.</div>
									<div class="invalid-feedback">Por favor rellenar el campo con un número valido.</div>
								  </div>
								  <div class="form-group">
									<label for="pwd">Celular:</label>
									<input type="text" class="form-control" id="cellphone" placeholder="Ingresar celular aquí" name="cell" required maxlength="10" minlength="10">
									<div class="valid-feedback">Valido.</div>
									<div class="invalid-feedback">Por favor rellenar el campo con un número de celular valido.</div>
								  </div>
								  <div class="form-group">
								  <label for="pwd">Ciudad:</label>
								  <input type="text" class="form-control" id="city" placeholder="Ingresar ciudad aquí" name="cit" onblur="aMayusculas(this.value,this.id)"required maxlength="25">
								  <div class="valid-feedback">Valido.</div>
								  <div class="invalid-feedback">Por favor rellenar el campo con una ciudad valida.</div>
								</div>
								<div class="form-group">
									<label for="pwd">Cargo al que aspira:</label>
									<input type="text" class="form-control" id="employ" placeholder="Ingresar cargo aquí" name="empl" onblur="aMayusculas(this.value,this.id)"required maxlength="35">
									<div class="valid-feedback">Valido.</div>
									<div class="invalid-feedback">Por favor rellenar el campo con un cargo valido.</div>
								  </div>
								  <hr>
								  <div class="form-group">
									<label for="exampleFormControlFile1">Subir hoja de vida</label>
									<label for="exampleFormControlFile1">Para subir tu hoja de vida, el archivo debe llevar tu nombre, gracias.</label>
									<br>
									<progress value="0" max="100" id="uploader" style="width: 100%;">0%</progress>
									<input type="file" class="form-control-file" id="file" style="cursor: pointer;">
								  </div>
								  <hr>
								<button  class="btn btn-success" onclick="GuardarAspirante()" id="guardar">Enviar</button>
								<button  class="btn btn-danger" onclick="cancelar()">Cancelar</button>
							  
						
                        </div>
                      </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Nosotros seccion termina-->

	<!-- Footer section -->
	<?php include 'footer.php'; ?>
	<!-- Footer section end-->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/trabajeConNosotros.js"></script>
	<!--====== Boostrap ======-->
	 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
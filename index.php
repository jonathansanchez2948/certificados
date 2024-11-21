<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CERTIFICADOS - FLISOL MEDELLÍN</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" href="css/style.css?v=2">
</head>

<body>
	<div id="container">
        <div id="contact-form" class="clearfix">
        <center><img src="img/logo.svg" width="100%"></center>    
		<h1>CERTIFICADOS</h1>
            <h2>Sistema de certificados - FLISOL Medellín</h2>

            <form method="post" action="certificado.php">
                <label for="correo">Correo electrónico: <span class="required">*</span></label>
                <input type="text" id="correo" name="correo" placeholder="Digite su correo electrónico" required autofocus autocomplete='off' />
                <div class="form-group">
					<label>Seleccione el tipo de Certificado <span class="required">*</span></label>
					<select class="form-control" id="tparticipacion" name="tparticipacion" required>
						<option value="">Seleccione</option>
						<option value="Asistente">Asistente</option>
						<option value="Ponente">Ponente</option>
						<option value="Organizador">Organizador</option>
						<option value="Patrocinador">Patrocinador</option>
					</select>
				</div>
				<div class="form-group">
					<label>Año <span class="required">*</span></label>
					<select class="form-control" id="ano" name="ano" required>
						<option value="">Seleccione</option>
						<?php
							for ($i=2022; $i<=date('Y'); $i++){
								echo "<option value='".$i."'>".$i."</option>";								
							}							
						?>
					</select>
				</div>          
                <input type="submit" value="Consultar" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> Todos los campos son requeridos.</p>
            </form>
        </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</body>
</html>

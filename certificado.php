<?php 
define('FPDF_FONTPATH', 'font/');
require ('fpdf.php');
require ('config.php');


$correo= $_POST['correo'];
$tparticipacion= $_POST['tparticipacion'];
$ano= $_POST['ano'];

	$strConsulta = "SELECT * from fli_participantes where correo='$correo' and tipo_participante='$tparticipacion' and ano='$ano'";
	$resultado = mysqli_query($conexion,$strConsulta);
	if (!$row = mysqli_fetch_array($resultado))
		echo '<html lang="es">
		<head>
		  <meta charset="UTF-8">
		  <title>Formulario de contacto</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"> 
		  <link rel="stylesheet" type="text/css" href="css/style.css">
		  
		</head>
		<body>  
		<!-- formulario de contacto en html y css -->  
		
		  <div class="contact_form">
		
			<div class="formulario">      
			  	<center><img src="img/logo.svg" width="50%"></center>
				<h1>Información Importante</h1>
				<h3>No se encontró resultado con el correo '.$correo.'. Por favor enviar solicitud al correo webmaster@flisolmedellin.org<br>Disculpe las molestias</h3>
				<center><a href="./" class="btn btn-success"> Consultar de nuevo </a></center>

			</div>  
		  </div>';
	if($ano == "2022"){
		if($tparticipacion=='Asistente' or $tparticipacion=='Organizador' or $tparticipacion=='Patrocinador')
		{
			$fecha = date('Y-m-d H:i:s');
			$sql = "INSERT INTO fli_contador (fecha,correo) values ('$fecha','$correo')";
			$resultado_aud = mysqli_query($conexion,$sql);
			
			$strConsulta = "SELECT * from fli_participantes where correo='$correo' and tipo_participante='$tparticipacion' and ano='$ano'";
			$resultado = mysqli_query($conexion,$strConsulta);
			while($row = mysqli_fetch_array($resultado))
			{
				//Propiedades
				$nombre_completo=utf8_decode($row['nombre_completo']);
				$participacion = $row['tipo_participante'];
				$fecha = $row['fecha'];
				$ano = $row['ano'];

				$pdf=new FPDF('L','mm','A4');
				$pdf->SetTextColor(0,0,0);

				$pdf->AddPage();
				$pdf->Image('img/asistente.png',0,0,297,210,'PNG');
				
				// Nombre y Apellido
				$pdf->SetFont('Arial','B',25);
				$pdf->SetY(100);
				$pdf->Cell(0,10,$nombre_completo,0,1,'C');

				// Tipo de participante
				$pdf->SetY(116);
				$pdf->SetFont('Arial','B',25);
				$pdf->SetX(170);
				$pdf->MultiCell(0,10,$participacion,0,'');

				//FECHA
				$pdf->SetY(158);
				$pdf->SetFont('Arial','B',16);
				$pdf->SetX(77);
				$pdf->MultiCell(0,10,$fecha." ".$ano,0,'');

				$pdf->Output('Flisol -'.$ano." - ".$participacion.".pdf",'I');
			}
		}else{
			
			$fecha = date('Y-m-d H:i:s');
			$sql = "INSERT INTO fli_contador (fecha,correo) values ('$fecha','$correo')";
			$resultado_aud = mysqli_query($conexion,$sql);
			
			$strConsulta = "SELECT * from fli_participantes where correo='$correo' and tipo_participante='$tparticipacion' and ano='$ano'";
			$resultado = mysqli_query($conexion,$strConsulta);
			
			$pdf=new FPDF('L','mm','A4');
			$pdf->SetTextColor(0,0,0);
			
			while($row = mysqli_fetch_array($resultado))
			{
				//Propiedades
				$nombre_completo=utf8_decode($row['nombre_completo']);
				$charla=utf8_decode($row['charla']);
				$participacion = utf8_decode($row['tipo_participante']);
				$fecha = $row['fecha'];
				$ano = $row['ano'];
				$documento = $row['documento'];
				$tipo_documento = utf8_decode($row['tipo_documento']);

				$pdf=new FPDF('L','mm','A4');
				$pdf->SetTextColor(0,0,0);

				$pdf->AddPage();
				$pdf->Image('img/ponente.png',0,0,297,210,'PNG');
				
				// Nombre y Apellido
				$pdf->SetFont('Arial','B',25);
				$pdf->SetY(100);
				$pdf->Cell(0,10,$nombre_completo,0,1,'C');

				// Documento
				$pdf->SetFont('Arial','B',12);
				$pdf->SetY(109);
				$pdf->Cell(0,10,$tipo_documento." ".$documento,0,1,'C');

				// Tipo de participante
				$pdf->SetY(116);
				$pdf->SetFont('Arial','B',25);
				$pdf->SetX(175);
				$pdf->MultiCell(0,10,$participacion,0,'');

				// Charla
				$pdf->SetY(140);
				$pdf->SetFont('Arial','B',17);
				$pdf->MultiCell(0,10,$charla,0,'C');

				//FECHA
				$pdf->SetY(165);
				$pdf->SetFont('Arial','B',16);
				$pdf->SetX(77);
				$pdf->MultiCell(0,10,$fecha." ".$ano,0,'');

				$pdf->Output('Flisol -'.$ano." - ".$participacion.".pdf",'I');
			}					
		} 	
	}
	if($ano == "2023"){
		if($tparticipacion=='Asistente' or $tparticipacion=='Organizador' or $tparticipacion=='Patrocinador')
		{
			$fecha = date('Y-m-d H:i:s');
			$sql = "INSERT INTO fli_contador (fecha,correo) values ('$fecha','$correo')";
			$resultado_aud = mysqli_query($conexion,$sql);
			
			$strConsulta = "SELECT * from fli_participantes where correo='$correo' and tipo_participante='$tparticipacion' and ano='$ano'";
			$resultado = mysqli_query($conexion,$strConsulta);
			while($row = mysqli_fetch_array($resultado))
			{
				//Propiedades
				$nombre_completo=utf8_decode($row['nombre_completo']);
				$participacion = $row['tipo_participante'];
				$fecha = $row['fecha'];
				$ano = $row['ano'];

				$pdf=new FPDF('L','mm','A4');
				$pdf->SetTextColor(0,0,0);

				$pdf->AddPage();
				$pdf->Image('img/certificado2023.png',0,0,297,210,'PNG');
				
				// Nombre y Apellido
				$pdf->SetFont('Arial','B',25);
				$pdf->SetY(95);
				$pdf->Cell(0,10,$nombre_completo,0,1,'C');

				// Tipo de participante
				$pdf->SetY(136);
				$pdf->SetFont('Arial','B',25);
				//$pdf->SetX(218);
				//$pdf->MultiCell(0,10,$participacion,0,'');
				$pdf->Cell(0,10,$participacion,0,1,'C');
				//FECHA
				$pdf->SetY(189);
				$pdf->SetFont('Arial','B',16);
				$pdf->SetX(30);
				$pdf->MultiCell(0,0,$fecha." ".$ano,0,'');

				$pdf->Output('Flisol -'.$ano." - ".$participacion.".pdf",'I');
			}
		}else{
			
			$fecha = date('Y-m-d H:i:s');
			$sql = "INSERT INTO fli_contador (fecha,correo) values ('$fecha','$correo')";
			$resultado_aud = mysqli_query($conexion,$sql);
			
			$strConsulta = "SELECT * from fli_participantes where correo='$correo' and tipo_participante='$tparticipacion' and ano='$ano'";
			$resultado = mysqli_query($conexion,$strConsulta);
			
			$pdf=new FPDF('L','mm','A4');
			$pdf->SetTextColor(0,0,0);
			
			while($row = mysqli_fetch_array($resultado))
			{
				//Propiedades
				$nombre_completo=utf8_decode($row['nombre_completo']);
				$charla=utf8_decode($row['charla']);
				$participacion = utf8_decode($row['tipo_participante']);
				$fecha = $row['fecha'];
				$ano = $row['ano'];
				$documento = $row['documento'];
				$tipo_documento = utf8_decode($row['tipo_documento']);

				$pdf=new FPDF('L','mm','A4');
				$pdf->SetTextColor(0,0,0);

				$pdf->AddPage();
				$pdf->Image('img/certificado2023.png',0,0,297,210,'PNG');
				
				// Nombre y Apellido
				$pdf->SetFont('Arial','B',25);
				$pdf->SetY(90);
				$pdf->Cell(0,10,$nombre_completo,0,1,'C');

				// Documento
				$pdf->SetFont('Arial','B',12);
				$pdf->SetY(109);
				$pdf->Cell(0,10,$tipo_documento." ".$documento,0,1,'C');

				// Tipo de participante
				$pdf->SetY(121);
				$pdf->SetFont('Arial','B',25);
				$pdf->SetX(217);
				$pdf->MultiCell(0,10,$participacion,0,'');

				// Charla
				/*$pdf->SetY(140);
				$pdf->SetFont('Arial','B',17);
				$pdf->MultiCell(0,10,$charla,0,'C');*/
				$pdf->SetFont('Arial','B',17);
				$pdf->SetY(135);
				$pdf->SetX(60);
				$pdf->MultiCell(190,5,$charla,'','C',false);

				//FECHA
				$pdf->SetY(189);
				$pdf->SetFont('Arial','B',16);
				$pdf->SetX(30);
				$pdf->MultiCell(0,0,$fecha." ".$ano,0,'');

				$pdf->Output('Flisol -'.$ano." - ".$participacion.".pdf",'I');
			}					
		} 	
	}
?>

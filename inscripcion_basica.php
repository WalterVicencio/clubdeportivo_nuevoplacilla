<?php
include './conn.php';

date_default_timezone_set("America/Santiago");
$fecha_ing = date("Y-m-d");
$nombre_alumno=$_POST['a_nombre'];
$apellido_alumno=$_POST['a_apellido'];
$edad_alumno=$_POST['a_edad'];


try{
    $insertar=mysqli_query($con,'insert into inscritos (a_nombre,a_apellido,a_edad) values
    ("'.$nombre_alumno.'","'.$apellido_alumno.'","'.$edad_alumno.'")') or die('No se pudo registrar<br>'.mysqli_error($con));


    /*
    // PROBAR CON SERVIDOR COMPRADO
    $mensaje = '
    <html>
    <head>
    <title>Inscripción enviada</title>
    </head>
    <body>
    <p>¡Muy bien! Has enviado tu inscripción al club deportivo</p>
    <table>
        <tr>
        <th>Nombre</th><th>Apellido</th><th>Edad</th><th>Estado</th>
        </tr>
        <tr>
        <td>Walter</td><td>Vicencio</td><td>28</td><td>PENDIENTE</td>
        </tr>
    </table>
    </body>
    </html>
    ';

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type


    // Enviarlo
    $message = "Hey! Let us play with PHP.";
    $success = mail('walter.8128@gmail.com', 'My Subject', $message);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
    }*/




    header('Location: ./index.php?inscrito=1');
}catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}





/*
require('./fpdf/fpdf.php');

setlocale(LC_ALL,"es_CL.UTF-8");
$fecha_inscripcion=date("d/m/Y");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetXY(10,10);
$pdf->Cell(0,10,utf8_decode('Cadetes'));
$pdf->SetXY(10,17);
$pdf->Cell(0,10,utf8_decode('Nuevo Placilla'));
$pdf->SetXY(75,10);
$pdf->Cell(0,10,utf8_decode('Ficha de Inscripción'));
$pdf->SetXY(170,10);
$pdf->Cell(0,10,utf8_decode('FOTO'));
$pdf->SetXY(90,20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,$fecha_inscripcion);
$pdf->Ln();
$pdf->SetXY(0,40);
$pdf->Cell(250,0,'','T');
$pdf->SetXY(10,50);
$pdf->Cell(30,10,utf8_decode('Nombre:'));
$pdf->SetXY(30,50);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,utf8_decode('asd'));
$pdf->Output();
*/
?>
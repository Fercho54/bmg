<?php
$link = mysqli_connect("housingbmg.com", "zdxyjmbl", "Panama655.bh", "zdxyjmbl_test_db");
if (isset($_POST['submitTest'])) {

$casa=$_POST['casa'];
$cuarto=$_POST['cuarto'];
$tipoCasa=$_POST['tipoCasa'];
$disponibilidad=$_POST['disponibilidad'];
$direccion=$_POST['direccion'];
$moneda=$_POST['moneda'];
$mesesContrato1=$_POST['mesesContrato1'];
$precio1=$_POST['precio1'];
$mesesContrato2=$_POST['mesesContrato2'];
$precio2=$_POST['precio2'];
$mesesContrato3=$_POST['mesesContrato3'];
$precio3=$_POST['precio3'];
$deposito=$_POST['deposito'];

if(!empty($casa))
{
    $matches=explode(" ", $direccion);
    echo($matches[0]);
    echo($matches[1]);
    echo($matches[2]);
    $nombre="casa Xalisco prueba";
    $calle=$matches[0];
    $numero_exterior=substr($matches[1],0,4);
    $numero_interior="-1";
    $colonia=$matches[2];
    $ciudad="guadalajara";
    $pais="mexico";
    $id_usuarios=0;
    $cuartos=$_POST['cuartos'];
    $banios=$_POST['banios'];
    $numero_personas=3;
    $rating=0;
    $precio_completo=$precio1;
    $disponibilidad=$_POST['disponibilidad'];
    $bmg_rating=0;
    $id_verificada=-1;
    $descripcion="primera propiedad subida en php";
    $estado="jalisco";
    $deposito=$_POST['deposito'];
    $id_tipo_propiedad=$tipoCasa;
    mysqli_query($link,"INSERT INTO Propiedades 
    (nombre,calle,numero_exterior,numero_interior,colonia,ciudad,pais,id_usuarios,cuartos,banios,numero_personas,rating,precio_completo,disponibilidad,bmg_rating,id_verificada,descripcion,estado,deposito,id_tipo_propiedad)
    values
    ('$nombre','$calle',$numero_exterior,$numero_interior,'$colonia','$ciudad','$pais',$id_usuarios,$cuartos,$banios,$numero_personas,$rating,$precio_completo,'$disponibilidad',$bmg_rating,$id_verificada,'$descripcion','$estado',$deposito,$id_tipo_propiedad)");
}
else
{

}
/*echo($tipoCasa.'<br>');
echo($disponibilidad.'<br>');
echo($direccion.'<br>');
echo($moneda.'<br>');
echo($mesesContrato1.'<br>');
echo($precio1.'<br>');
echo($mesesContrato2.'<br>');
echo($precio2.'<br>');
echo($mesesContrato3.'<br>');
echo($precio3.'<br>');
echo($deposito.'<br>');
echo($cuartos.'<br>');
echo($banios.'<br>');
*/

   /* $nombre = $_POST['id'];
    $calle = $_POST['calle'];
    $numero_exterior = $_POST['numero_exterior'];
    $numero_interior = $_POST['numero_interior'];
    $colonia = $_POST['colonia'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $id_usuarios = $_POST['id_usuarios'];
    $cuartos = $_POST['cuartos'];
    $banios = $_POST['banios'];
    $numero_personas = $_POST['numero_personas'];
    $rating = $_POST['rating'];
    $precio_completo = $_POST['precio_completo'];
    $disponibilidad = $_POST['disponibilidad'];
    $bmg_rating = $_POST['bmg_rating'];
    $id_verificada = $_POST['id_verificada'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $deposito = $_POST['deposito'];
    $id_tipo_propiedad = $_POST['id_tipo_propiedad'];*/


    /*mysqli_query($link,"INSERT INTO Propiedades 
    (nombre,calle,numero_exterior,numero_interior,colonia,ciudad,pais,id_usuarios,cuartos,banios,numero_personas,rating,precio_completo,disponibilidad,bmg_rating,id_verificada,descripcion,estado,deposito,id_tipo_propiedad)
    values
    ('$nombre','$calle','$numero_exterior','$numero_interior','$colonia','$ciudad','$pais','$id_usuarios','$cuartos','$banios','$numero_personas','$rating','$precio_completo','$disponibilidad','$bmg_rating','$id_verificada','$descripcion','$estado','$deposito','$id_tipo_propiedad')");*/

}
#header( 'Location: index.html' ) ;
?>
<!DOCTYPE html PUBLIC "-W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Insertar</title>
</head>

<body>

<?Php
require("mysqli_connect.php");
require("queries.php"); 

#Set all selected variables
$pais1=$_POST['pais1'];
$ciudad1=$_POST['ciudad1'];
$puerto1=$_POST['puerto1'];
$pais2=$_POST['pais2']; 
$ciudad2=$_POST['ciudad2']; 
$puerto2=$_POST['puerto2'];
$logistica=$_POST['logistica'];
$proveedor=$_POST['proveedor'];
$contenedor=$_POST['contenedor'];
$precio=$_POST['precio'];

/*if(empty($pais1) OR empty($pais2) OR empty($ciudad1) OR empty($pais2) OR empty($ciudad2) empty($puerto2) OR empty($logistica) OR empty($proveedor) OR empty($contenedor)){
	
}*/

if(empty($pais1) OR empty($ciudad1) OR empty($puerto1) OR empty($pais2) OR empty($ciudad2) OR empty($puerto2) OR empty($logistica) OR empty($proveedor) OR empty($contenedor) OR empty($precio)){
	echo "Usted debe llenar todos los campos"; 
} else {
	echo "pais1= " . $pais1 . "<BR>" . 
	"ciudad1= " . $ciudad1 . "<BR>" . 
	"puerto1= " . $puerto1 . "<BR>" . 
	"pais2= " . $pais2 . "<BR>" .
	"ciudad2= " . $ciudad2 . "<BR>" .
	"puerto2= " . $puerto2 . "<BR>" .
	"logistica= " . $logistica . "<BR>" .
	"proveedor= " . $proveedor . "<BR>" . 
	"contenedor=" . $contenedor . "<BR>" . 
	"precio = " . $precio . "<BR>"; 
	
	/*Insert confirmation
	insert html with button here 
	if yes
		insert
	else 
		go back to insertion page
		
	
	echo "Desea insertar:";
	echo "$pais1"; 
	
	*/
	
	$insertQuer = "INSERT INTO todos VALUES 
				  (NULL, 
				  $pais1, $ciudad1, $puerto1, 
				  $pais2, $ciudad2, $puerto2, 
				  $logistica, 
				  $proveedor, 
				  $contenedor, 
				  $precio)";
	
	$result = mysqli_query($dbo, $insertQuer);
		
} 


?>
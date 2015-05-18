<!DOCTYPE html PUBLIC "-W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Busqueda</title>
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


######QUERIES TO GENERATE TABLE######

//require("setvariables.php");
#---Check which variables were set and prepare for query--#
if(empty($pais1) OR empty($pais2)){
	echo "Usted debe insertar pais de origen y pais de destino<br>";
} else {
	if(empty($ciudad1)){ $ciudad1 = "regexp '^[0-9]+'"; } else { $ciudad1 = " = $ciudad1"; }
	if(empty($puerto1)){ $puerto1 = "regexp '^[0-9]+'"; } else { $puerto1 = " = $puerto1"; }
	if(empty($ciudad2)){ $ciudad2 = "regexp '^[0-9]+'"; } else { $ciudad2 = " = $ciudad2"; }
	if(empty($puerto2)){ $puerto2 = "regexp '^[0-9]+'"; } else { $puerto2 = " = $puerto2"; }
	if(empty($logistica)){ $logistica = "regexp '^[0-9]+'"; } else { $logistica = " = $logistica"; }
	if(empty($proveedor)){ $proveedor = "regexp '^[0-9]+'"; } else { $proveedor = " = $proveedor"; }
	if(empty($contenedor)){ $contenedor = "regexp '^[0-9]+'"; } else { $contenedor = " = $contenedor"; }
}

#---Generate query---#
$select = "SELECT * FROM todos WHERE 
			pais_id1 = $pais1 AND 
			ciudad_id1 $ciudad1 AND 
			puerto_id1 $puerto1 AND
			pais_id2 = $pais2 AND
			ciudad_id2 $ciudad2 AND
			puerto_id2 $puerto2 AND
			logistica $logistica AND
			proveedor $proveedor AND
			contenedor $contenedor"; 

$result = mysqli_query($dbo, $select);
while($row = mysqli_fetch_array($result)) {
  //echo $row['pais_id1'] . " " . $row['ciudad_id1'] . " " . $row['puerto_id1'] . " " . $row['pais_id2'] . " " . $row['ciudad_id2'] . " " . $row['puerto_id2'] . " " . $row['logistica'] . " " . $row['proveedor'] . " " . $row['contenedor'] . " " . $row['precio'];
  //echo "<br>";
  
  //Display specific data
  
  $sel1 = "SELECT name FROM pais WHERE pais_id=" . $row['pais_id1'];
  $res1 = mysqli_query($dbo, $sel1);
  while($newRow = mysqli_fetch_array($res1)){
	  $pais_1 = $newRow['name'];
  }
  
  $sel2 = "SELECT name FROM ciudad WHERE ciudad_id=". $row['ciudad_id1'];
  $res2 = mysqli_query($dbo, $sel2);
  while($newRow = mysqli_fetch_array($res2)){
	  $ciudad_1 = $newRow['name']; 
  }
  
  $sel3 = "SELECT name FROM puerto WHERE puerto_id=" . $row['puerto_id1'];
  $res3 = mysqli_query($dbo, $sel3);
  while($newRow = mysqli_fetch_array($res3)){
	  $puerto_1 = $newRow['name'];
  }
  
  $sel4 = "SELECT name FROM pais WHERE pais_id=" . $row['pais_id2'];
  $res4 = mysqli_query($dbo, $sel4);
  while($newRow = mysqli_fetch_array($res4)){
	  $pais_2 = $newRow['name'];
  }
  
  $sel5 = "SELECT name FROM ciudad WHERE ciudad_id=" . $row['ciudad_id2'];
  $res5 = mysqli_query($dbo, $sel5);
  while($newRow = mysqli_fetch_array($res5)){
	  $ciudad_2 = $newRow['name'];
  }
  
  $sel6 = "SELECT name FROM puerto WHERE puerto_id=" . $row['puerto_id2'];
  $res6 = mysqli_query($dbo, $sel6);
  while($newRow = mysqli_fetch_array($res6)){
	  $puerto_2 = $newRow['name'];
  }
  
  $sel7 = "SELECT name FROM logistica WHERE logistica_id=" . $row['logistica'];
  $res7 = mysqli_query($dbo, $sel7);
  while($newRow = mysqli_fetch_array($res7)){
	  $logistica_ = $newRow['name']; 
  }
  
  $sel8 = "SELECT name FROM proveedor WHERE proveedor_id=" . $row['proveedor'];
  $res8 = mysqli_query($dbo, $sel8);
  while($newRow = mysqli_fetch_array($res8)){
	  $proveedor_ = $newRow['name']; 
  }
  
  $sel9 = "SELECT name FROM contenedor WHERE contenedor_id=" . $row['proveedor'];
  $res9 = mysqli_query($dbo, $sel9);
  while($newRow = mysqli_fetch_array($res9)){
	  $contenedor_ = $newRow['name']; 
  }
  
  setlocale(LC_MONETARY, 'en_US');

  ####---SET UP A TABLE!!!---###
  echo $pais_1 . " " . $ciudad_1 . " " . $puerto_1 . " " . $pais_2 . " " . $ciudad_2 . " " . $puerto_2 . " " . $logistica_ . " " . $proveedor_ . " " . $contenedor_ . " " . money_format('%(#10n', $row['precio']) . "<BR>";
  
  
  ######
  	#Implement the "no resultados"####
  ######
    
}



?>

<br><br>
<a href=search.php>Reset and Try again</a>
<br><br>
</body>

</html>
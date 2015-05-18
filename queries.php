<?Php
#First Query -Pais 1
$quer2="SELECT DISTINCT name,pais_id FROM pais ORDER BY name"; 

#Second Query -Ciudad 1
$pais1=$_GET['pais1']; 
	if(isset($pais1) and strlen($pais1) > 0){
		$quer="SELECT DISTINCT name,ciudad_id FROM ciudad WHERE pais_id=$pais1 ORDER BY name"; 
	} else {
		$quer="SELECT DISTINCT name,ciudad_id FROM ciudad ORDER BY name"; 
	} 

#Third Query -Puerto1
$ciudad1=$_GET['ciudad1']; 
	if(isset($ciudad1) and strlen($ciudad1) > 0){
		$quer3="SELECT DISTINCT name,puerto_id FROM puerto WHERE ciudad_id=$ciudad1 ORDER BY name"; 
	} else {
		$quer3="SELECT DISTINCT name,puerto_id FROM puerto ORDER BY name";
	} 


$puerto1=$_GET['puerto1'];

#Fourth Query -Pais 2
$quer4="SELECT DISTINCT name,pais_id FROM pais ORDER BY name"; 

#Fifth Query -Ciudad 2
$pais2=$_GET['pais2'];
if(isset($pais2) and strlen($pais2) > 0){
		$quer5="SELECT DISTINCT name,ciudad_id FROM ciudad WHERE pais_id=$pais2 ORDER BY name"; 
	} else {
		$quer5="SELECT DISTINCT name,ciudad_id FROM ciudad ORDER BY name"; 
	} 

 
#Sixth Query -Puerto 2
$ciudad2=$_GET['ciudad2']; 
	if(isset($ciudad2) and strlen($ciudad2) > 0){
		$quer6="SELECT DISTINCT name,puerto_id FROM puerto WHERE ciudad_id=$ciudad2 ORDER BY name"; 
	} else {
		$quer6="SELECT DISTINCT name,puerto_id FROM puerto ORDER BY name";
	} 
	
	
	
#---Query to select Logistica type---#
$puerto2=$_GET['puerto2']; 
	//if(isset($puerto2) and strlen($puerto2) > 0){
		$quer7="SELECT DISTINCT name,logistica_id FROM logistica ORDER BY name";
	//} 

#Select proveedor depending on Logistica
$logistica=$_GET['logistica']; 
	if(isset($logistica) and strlen($logistica) > 0){
		$quer8="SELECT DISTINCT name,proveedor_id FROM proveedor WHERE logistica_id=$logistica ORDER BY name"; 
	} else {
		$quer8="SELECT DISTINCT name,proveedor_id FROM proveedor ORDER BY name";
	} 
	
#Select container
$proveedor=$_GET['proveedor'];
$quer9="SELECT DISTINCT name,contenedor_id FROM contenedor ORDER BY name";

#
$contenedor=$_GET['contenedor'];
###############################################################

#####----   ----#####






?>
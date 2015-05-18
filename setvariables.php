<?php
###TRY---
#All variables are set
if(isset($pais1) and 
isset($ciudad1) and 
isset($puerto1) and 
isset($pais2) and 
isset($ciudad2) and
isset($puerto2) and
isset($logistica) and
isset($proveedor) and
isset($contenedor) and
!empty($pais1) and 
!empty($ciudad1) and 
!empty($puerto1) and
!empty($pais2) and 
!empty($ciudad2) and
!empty($puerto2) and
!empty($logistica) and
!empty($proveedor) and
!empty($contenedor))
{
echo "<p>pais1 and pais2 isset</p>";
} elseif

#All variables but contenedor are set
(isset($pais1) and 
isset($ciudad1) and 
isset($puerto1) and 
isset($pais2) and 
isset($ciudad2) and
isset($puerto2) and
isset($logistica) and
isset($proveedor) and
!empty($pais1) and 
!empty($ciudad1) and 
!empty($puerto1) and
!empty($pais2) and 
!empty($ciudad2) and
!empty($puerto2) and
!empty($logistica) and
!empty($proveedor) and
empty($contenedor))
{
echo "<p>All variables but contenedor are set</p>";
} elseif 


#All variables but proveedor and contenedor are set
(isset($pais1) and 
isset($ciudad1) and 
isset($puerto1) and 
isset($pais2) and 
isset($ciudad2) and
isset($puerto2) and
isset($logistica) and
!empty($pais1) and 
!empty($ciudad1) and 
!empty($puerto1) and
!empty($pais2) and 
!empty($ciudad2) and
!empty($puerto2) and
!empty($logistica) and
empty($proveedor) and
empty($contenedor))
{
echo "<p>All variables but proveedor and contenedor are set</p>";
} elseif

#All variables are set but logistica proveedor and contenedor
(isset($pais1) and 
isset($ciudad1) and 
isset($puerto1) and 
isset($pais2) and 
isset($ciudad2) and
isset($puerto2) and
!empty($pais1) and 
!empty($ciudad1) and 
!empty($puerto1) and
!empty($pais2) and 
!empty($ciudad2) and
!empty($puerto2) and
empty($logistica) and
empty($proveedor) and
empty($contenedor))
{
echo "<p>All variables are set but logistica proveedor and contenedor</p>";
} elseif

#All variables are set but logistica and proveedor
(isset($pais1) and 
isset($ciudad1) and 
isset($puerto1) and 
isset($pais2) and 
isset($ciudad2) and
isset($puerto2) and
isset($contenedor) and
!empty($pais1) and 
!empty($ciudad1) and 
!empty($puerto1) and
!empty($pais2) and 
!empty($ciudad2) and
!empty($puerto2) and
empty($logistica) and
empty($proveedor) and
!empty($contenedor))
{
echo "<p>All variables are set but logistica and proveedor</p>";
} elseif

#All variables are set but proveedor
(isset($pais1) and 
isset($ciudad1) and 
isset($puerto1) and 
isset($pais2) and 
isset($ciudad2) and
isset($puerto2) and
isset($logistica) and
isset($contenedor) and
!empty($pais1) and 
!empty($ciudad1) and 
!empty($puerto1) and
!empty($pais2) and 
!empty($ciudad2) and
!empty($puerto2) and
!empty($logistica) and
empty($proveedor) and
!empty($contenedor))
{
echo "<p>All variables are set but proveedor</p>";
} elseif

##All variables are set but logistica and contenedor
(isset($pais1) and 
isset($ciudad1) and 
isset($puerto1) and 
isset($pais2) and 
isset($ciudad2) and
isset($puerto2) and
isset($proveedor) and
!empty($pais1) and 
!empty($ciudad1) and 
!empty($puerto1) and
!empty($pais2) and 
!empty($ciudad2) and
!empty($puerto2) and
empty($logistica) and
!empty($proveedor) and
empty($contenedor))
{
echo "<p>All variables are set but logistica and contenedor</p>";
}


?>
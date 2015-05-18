<!DOCTYPE html PUBLIC "-W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf8_spanish_ci">
  <meta name="viewport" content="initial-scale=1.0">
  <title>Busqueda</title>
  
  <link rel="stylesheet" href="includes/standardize.css">
  <link rel="stylesheet" href="includes/index-grid.css">
  <link rel="stylesheet" href="includes/styles.css">
  
  <SCRIPT language=JavaScript type=text/javascript src="reload.js"></script>
  
</head>

<?php require "mysqli_connect.php"; ?>
<?php require "queries.php"; ?>

<body class="body index clearfix">
  <header class="_container clearfix">
    <p class="logo logo-1">Importaciones - Exportaciones</p>
    <section class="main main-1 clearfix">
      <div class="acontainer clearfix">
      
      
		<?php
		echo"      	
        <form method=post class='db clearfix' name=f1 action='dd3ck.php'>";
        ?>
        
        <!------ORIGEN LABELS----->
        
		<label class='form-label form-label-1'>Pais</label>
        <label class='form-label form-label-2'>Ciudad</label>
        <label class='form-label form-label-3'>Puerto&nbsp;</label>
        <p class='origen'>Origen</p>
		
		
		<?php
		#First Dropdown ---pais origen---
        echo"
		<select class='pais1' name='pais1' onchange=\"reload(this.form)\">
		<option value=''>Seleccionar</option>";
		foreach ($dbo->query($quer2) as $noticia2) {
			if($noticia2['pais_id']==@$pais1){
				echo "<option selected value='$noticia2[pais_id]'>$noticia2[name]</option>"."<BR>";
			} else {
				echo  "<option value='$noticia2[pais_id]'>$noticia2[name]</option>";
			}
		}
		echo "</select>";
		?>  
		
		<?php        
		#Second Dropdown ---ciudad origen---
		echo "
		<select class='ciudad1' name='ciudad1' onchange=\"reload3(this.form)\">
		<option value=''>Seleccionar</option>";
		foreach ($dbo->query($quer) as $noticia) {
			if($noticia['ciudad_id']==@$ciudad1){
				echo "<option selected value='$noticia[ciudad_id]'>$noticia[name]</option>"."<BR>";
			} else {
				echo  "<option value='$noticia[ciudad_id]'>$noticia[name]</option>";
			}
		}
		echo "</select>";
        ?>
        
        <?php
        #Third Dropdown ---puerto origen---
		echo "
		<select class='puerto1' name='puerto1' onchange=\"reload4(this.form)\">
		<option value=''>Seleccionar</option>";
		foreach ($dbo->query($quer3) as $noticia) {
			if($noticia['puerto_id']==@$puerto1){
				echo "<option selected value='$noticia[puerto_id]'>$noticia[name]</option>"."<BR>";
			} else {
				echo  "<option value='$noticia[puerto_id]'>$noticia[name]</option>";
			}
		}
		echo "</select>";
        ?>
        
		<!------ORIGIN LABELS----->
          
        <label class="form-label form-label-4">Pais</label>
        <label class="form-label form-label-5">Ciudad</label>
        <label class="form-label form-label-6">Puerto&nbsp;</label>
        <p class="destino">Destino</p>
        
        <?php
        #Fourth Dropdown ---pais desino---          
        echo "
		<select class='pais2' name='pais2' onchange=\"reload5(this.form)\">
		<option value=''>Seleccionar</option>";
		foreach ($dbo->query($quer4) as $noticia2) {
			if($noticia2['pais_id']==@$pais2){
				echo "<option selected value='$noticia2[pais_id]'>$noticia2[name]</option>"."<BR>";
			} else {
				echo  "<option value='$noticia2[pais_id]'>$noticia2[name]</option>";
			}
		}
		echo "</select>";
        ?>
        
        <?php
        #Fifth Dropdown ---ciudad destino---
        echo "
		<select class='ciudad2' name='ciudad2' onchange=\"reload6(this.form)\">
		<option value=''>Seleccionar</option>";
		foreach ($dbo->query($quer5) as $noticia) {
			if($noticia['ciudad_id']==@$ciudad2){
				echo "<option selected value='$noticia[ciudad_id]'>$noticia[name]</option>"."<BR>";
			} else {
				echo  "<option value='$noticia[ciudad_id]'>$noticia[name]</option>";
			}
		}
		echo "</select>";
        ?>
        
        <?php
        #Sixth Dropdown ---puerto destiono---
        echo "
		<select class='puerto2' name='puerto2' onchange=\"reload7(this.form)\">
		<option value=''>Seleccionar</option>";
		foreach ($dbo->query($quer6) as $noticia) {
			if($noticia['puerto_id']==@$puerto2){
				echo "<option selected value='$noticia[puerto_id]'>$noticia[name]</option>"."<BR>";
			} else {
			echo  "<option value='$noticia[puerto_id]'>$noticia[name]</option>";
			}
		}
		echo "</select>";
        ?>
        
		<!--LOGISTICA LABELS-->
		<label class="form-label form-label-7">Tipo</label>
        <label class="form-label form-label-8">Proveedor</label>
        <p class="logistica">Logistica</p>
        
        <?php
        #Seventh Dropdown ---logistica---
        echo"
		<select class='logistica_tipo' name='logistica' onchange=\"reload8(this.form)\">
		<option value=''>Seleccionar</option>";
		foreach ($dbo->query($quer7) as $noticia2) {
			if($noticia2['logistica_id']==@$logistica){
				echo "<option selected value='$noticia2[logistica_id]'>$noticia2[name]</option>"."<BR>";
			} else {
				echo  "<option value='$noticia2[logistica_id]'>$noticia2[name]</option>";
			}
		}
		echo "</select>";
		?>
		
        <!--PROVEEDOR LABEL-->
        <?php
		#Eigth Dropdown ---proveedor---
		echo "
		<select class='logistica_prov' name='proveedor' onchange=\"reload9(this.form)\">
        <option value=''>Seleccionar</option>";
		foreach ($dbo->query($quer8) as $noticia) {
			if($noticia['proveedor_id']==@$proveedor){
				echo "<option selected value='$noticia[proveedor_id]'>$noticia[name]</option>"."<BR>";
			} else {
				echo  "<option value='$noticia[proveedor_id]'>$noticia[name]</option>";
			}
		}
		echo "</select>";
        ?>
		
		<!--CONTENEDOR LABEL-->
        <label class="form-label form-label-9">Nombre</label>
        <p class="contenedor">Contenedor</p>
        
        <?php
        echo "
        <select class='contenedor_nombre' name='contenedor'>
        <option value=''>Seleccionar</option>";
        foreach ($dbo->query($quer9) as $noticia) {
			if($noticia['contenedor_id']==@$contenedor){
				echo "<option selected value='$noticia[contenedor_id]'>$noticia[name]</option>"."<BR>";
			} else {
			echo  "<option value='$noticia[contenedor_id]'>$noticia[name]</option>";
			}
		}
		echo "</select>";
        ?>
         
          <button class="submit">Buscar</button>
        </form>
        <div class="line"></div>
      </div>
    </section>
  </header>
</body>
</html>
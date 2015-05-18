function reload(form)
{
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
self.location='search.php?pais1=' + val ;
}
function reload3(form)
{
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
var val2=form.ciudad1.options[form.ciudad1.options.selectedIndex].value; 

self.location='search.php?pais1=' + val + '&ciudad1=' + val2 ;
}
function reload4(form){
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
var val2=form.ciudad1.options[form.ciudad1.options.selectedIndex].value; 
var val3=form.puerto1.options[form.puerto1.options.selectedIndex].value;

self.location='search.php?pais1=' + val + '&ciudad1=' + val2 + '&puerto1=' + val3 ;
}
function reload5(form){
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
var val2=form.ciudad1.options[form.ciudad1.options.selectedIndex].value; 
var val3=form.puerto1.options[form.puerto1.options.selectedIndex].value;
var val4=form.pais2.options[form.pais2.options.selectedIndex].value;

self.location='search.php?pais1=' + val + '&ciudad1=' + val2 + '&puerto1=' + val3 + '&pais2=' + val4 ;
}

function reload6(form){
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
var val2=form.ciudad1.options[form.ciudad1.options.selectedIndex].value; 
var val3=form.puerto1.options[form.puerto1.options.selectedIndex].value;
var val4=form.pais2.options[form.pais2.options.selectedIndex].value;
var val5=form.ciudad2.options[form.ciudad2.options.selectedIndex].value; 

self.location='search.php?pais1=' + val + '&ciudad1=' + val2 + '&puerto1=' + val3 + '&pais2=' + val4 + '&ciudad2=' + val5 ;
}

function reload7(form){
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
var val2=form.ciudad1.options[form.ciudad1.options.selectedIndex].value; 
var val3=form.puerto1.options[form.puerto1.options.selectedIndex].value;
var val4=form.pais2.options[form.pais2.options.selectedIndex].value;
var val5=form.ciudad2.options[form.ciudad2.options.selectedIndex].value; 
var val6=form.puerto2.options[form.puerto2.options.selectedIndex].value;

self.location='search.php?pais1=' + val + '&ciudad1=' + val2 + '&puerto1=' + val3 + '&pais2=' + val4 + '&ciudad2=' + val5 + '&puerto2=' + val6 ;
}

function reload8(form){
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
var val2=form.ciudad1.options[form.ciudad1.options.selectedIndex].value; 
var val3=form.puerto1.options[form.puerto1.options.selectedIndex].value;
var val4=form.pais2.options[form.pais2.options.selectedIndex].value;
var val5=form.ciudad2.options[form.ciudad2.options.selectedIndex].value; 
var val6=form.puerto2.options[form.puerto2.options.selectedIndex].value;
var val7=form.logistica.options[form.logistica.options.selectedIndex].value;

self.location='search.php?pais1=' + val + '&ciudad1=' + val2 + '&puerto1=' + val3 + '&pais2=' + val4 + '&ciudad2=' + val5 + '&puerto2=' + val6 + '&logistica=' + val7 ;
}

function reload9(form){
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
var val2=form.ciudad1.options[form.ciudad1.options.selectedIndex].value; 
var val3=form.puerto1.options[form.puerto1.options.selectedIndex].value;
var val4=form.pais2.options[form.pais2.options.selectedIndex].value;
var val5=form.ciudad2.options[form.ciudad2.options.selectedIndex].value; 
var val6=form.puerto2.options[form.puerto2.options.selectedIndex].value;
var val7=form.logistica.options[form.logistica.options.selectedIndex].value;
var val8=form.proveedor.options[form.proveedor.options.selectedIndex].value;

self.location='search.php?pais1=' + val + '&ciudad1=' + val2 + '&puerto1=' + val3 + '&pais2=' + val4 + '&ciudad2=' + val5 + '&puerto2=' + val6 + '&logistica=' + val7 + '&proveedor=' + val8 ;
}

function reload10(form){
var val=form.pais1.options[form.pais1.options.selectedIndex].value; 
var val2=form.ciudad1.options[form.ciudad1.options.selectedIndex].value; 
var val3=form.puerto1.options[form.puerto1.options.selectedIndex].value;
var val4=form.pais2.options[form.pais2.options.selectedIndex].value;
var val5=form.ciudad2.options[form.ciudad2.options.selectedIndex].value; 
var val6=form.puerto2.options[form.puerto2.options.selectedIndex].value;
var val7=form.logistica.options[form.logistica.options.selectedIndex].value;
var val8=form.proveedor.options[form.proveedor.options.selectedIndex].value;
var val9=form.contenedor.options[form.contenedor.options.selectedIndex].value;

self.location='search.php?pais1=' + val + '&ciudad1=' + val2 + '&puerto1=' + val3 + '&pais2=' + val4 + '&ciudad2=' + val5 + '&puerto2=' + val6 + '&logistica=' + val7 + '&proveedor=' + val8 + '&contenedor=' + val9 ;
}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
<link rel="icon" href="<?=URL?>public/img/favicon.ico" type="image/x-icon">

    <title>MyC SA | Productos </title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/css/css.css" rel="stylesheet">
 <link href="<?=URL?>public/css/carousel.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=URL?>public/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=URL?>public/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<script type="text/javascript">
window.onload = function() {
setInterval(cambiarFondo, 5000);// 5 segundos
setInterval(cambiarFondo3, 5000);// 5 segundos
setInterval(cambiarFondo4, 5000);// 5 segundos
setInterval(cambiarFondo6, 5000);// 5 segundos
setInterval(cambiarFondo7, 5000);// 5 segundos
setInterval(cambiarFondo8, 5000);// 5 segundos
setInterval(cambiarFondo11, 5000);// 5 segundos
setInterval(cambiarFondo12, 5000);// 5 segundos
};


fondoActual = 0;
imagenes = ["<?=URL?>public/img/atm/tamiz.jpg","<?=URL?>public/img/atm/l3p.jpg", "<?=URL?>public/img/atm/ROTAP.jpg","<?=URL?>public/img/atm/sonic.jpg"];
imagenes3 = ["<?=URL?>public/img/gilson/caja.jpg","<?=URL?>public/img/gilson/HORNO.jpg","<?=URL?>public/img/gilson/recipiente.jpg","<?=URL?>public/img/gilson/cuartea.jpg"];
imagenes4 = ["<?=URL?>public/img/BICO/bond.jpg","<?=URL?>public/img/BICO/pulve.jpg"];
imagenes6 = ["<?=URL?>public/img/rocklabs/pulve.jpg","<?=URL?>public/img/rocklabs/chanca.jpg","<?=URL?>public/img/rocklabs/comb.jpg","<?=URL?>public/img/rocklabs/mate.jpg"];
imagenes7 = ["<?=URL?>public/img/salter/hidro1.jpg","<?=URL?>public/img/salter/sepa1.jpg","<?=URL?>public/img/salter/sepa2.jpg"];
imagenes8 = ["<?=URL?>public/img/SEPOR/concen.png","<?=URL?>public/img/SEPOR/ciclo.jpg","<?=URL?>public/img/SEPOR/molino.jpg"];
imagenes11 = ["<?=URL?>public/img/dun/acople.jpg","<?=URL?>public/img/dun/submarina.jpg"];
imagenes12 = ["<?=URL?>public/img/hum/equipo.jpg","<?=URL?>public/img/hum/hornos.jpg"];
function cambiarFondo() {
document.getElementById('atm').style.backgroundImage = "url(" + imagenes[++fondoActual % imagenes.length] + ")"; 
};
function cambiarFondo3() {
document.getElementById('gilson').style.backgroundImage = "url(" + imagenes3[++fondoActual % imagenes3.length] + ")";
};

 function cambiarFondo4() {
 document.getElementById('bico').style.backgroundImage = "url(" + imagenes4[++fondoActual % imagenes4.length] + ")";
}

function cambiarFondo6() {
document.getElementById('rocklabs').style.backgroundImage = "url(" + imagenes6[++fondoActual % imagenes6.length] + ")";
}
function cambiarFondo7() {
 document.getElementById('salter').style.backgroundImage = "url(" + imagenes7[++fondoActual % imagenes7.length] + ")";
}
function cambiarFondo8() {
 document.getElementById('sepor').style.backgroundImage = "url(" + imagenes8[++fondoActual % imagenes8.length] + ")";
}
function cambiarFondo11() {
 document.getElementById('dun').style.backgroundImage = "url(" + imagenes11[++fondoActual % imagenes11.length] + ")";
}
function cambiarFondo12() {

 document.getElementById('hum').style.backgroundImage = "url(" + imagenes12[++fondoActual % imagenes12.length] + ")";
}


</script>



  </head>

<body>




<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top header" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navegador</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img src="<?=URL?>public/img/logo2.png"> 
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right"> 
                          
            <li ><a href="<?=URL?>home/index" style="font-size: 120%; color:#a21c27; "><span style="margin-right: 5px;" class="glyphicon glyphicon-home"></span> Inicio</a></li>
            <li><a href="<?=URL?>home/nosotros" style="color:#a21c27; font-size: 120%;"><span style="margin-right: 0px;" class="glyphicon glyphicon-globe"></span> ¿Quíenes somos?</a></li>
            <li class="active"><a href="<?=URL?>home/productos" style="color:#white;font-size: 120%;"><span style="margin-right: 5px;" class="glyphicon glyphicon-shopping-cart"></span>Productos</a></li>
            <li><a href="<?=URL?>home/marcas" style="color:#a21c27; font-size: 120%;"><span style="margin-right: 5px;" class="glyphicon glyphicon-eye-open"></span>Nuestras Marcas</a></li>
             <li><a data-toggle="modal" data-target="#suma" style="color:#a21c27; font-size: 120%; cursor:pointer;"><span style="margin-right: 5px;" class="glyphicon glyphicon-envelope"></span>Contactenos</a></li>
          </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

<div class="container" style="background:#a21c27; padding: 0px;">
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 70px; ">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?=URL?>public/img/BANNER1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
             
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?=URL?>public/img/BANNER2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?=URL?>public/img/BANNER3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
             
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
</br>
</div>

<!-- Productos -->

<div class="container" style="background:white;" >

<div class="row">
<div class="col-md-4">

</br>
<ul class="nav nav-pills nav-stacked center " style="text-align:center;">

  <li class="active"><a href="#" data-toggle="collapse" data-target="#Mision">Proveedores</a></li>
 <li> <a href="#" data-toggle="modal" data-target="#myModal1"> <img class="img-rounded" src="<?=URL?>public/img/provee/ADVANTECH.jpeg" style="width: 103px; height: 50px;">  </a>  </li>
  <li><a href="#" data-toggle="modal" data-target="#myModalx"> <img class="img-rounded" src="<?=URL?>public/img/provee/BANDO.png" style="width: 107px; height: 50px;"> </a></li>

   <li><a href="#" data-toggle="modal" data-target="#myModal3"> <img class="img-rounded" src="<?=URL?>public/img/provee/GILSON.png" style="width: 134px; height: 50px;"> </a></li>

 <li><a href="#" data-toggle="modal" data-target="#myModal4"> <img class="img-rounded" src="<?=URL?>public/img/provee/BICO.png" style=" height: 60px;"> </a></li>
  <li><a href="#" data-toggle="modal" data-target="#myModal5"><img class="img-rounded" src="<?=URL?>public/img/provee/ore.png" style="width: 103px; height: 50px;"></a></li>
   <li><a href="#" data-toggle="modal" data-target="#myModal6"><img class="img-rounded" src="<?=URL?>public/img/provee/ROCKLABS.png" style="width: 264px; height: 50px;"></a></li>
   <li><a href="#" data-toggle="modal" data-target="#myModal7"><img class="img-rounded" src="<?=URL?>public/img/provee/salter.png" style="width: 50px; height: 60px;"></a></li>
   <li><a href="#" data-toggle="modal" data-target="#myModal8"><img class="img-rounded" src="<?=URL?>public/img/provee/SEPOR.png" style="width: 150px; height: 60px;"></a></li>
   <li><a href="#" data-toggle="modal" data-target="#myModal9"><img class="img-rounded" src="<?=URL?>public/img/provee/twi.jpg" style="width: 150px; height: 60px;"></a></li>
   <li><a href="#" data-toggle="modal" data-target="#myModal10"><img class="img-rounded" src="<?=URL?>public/img/provee/universal.jpg" style="width: 150px; height: 60px;"></a></li>
   <li><a href="#" data-toggle="modal" data-target="#myModal11"><img class="img-rounded" src="<?=URL?>public/img/provee/dun.jpg" style="width: 150px; height: 60px;"></a></li>
<li><a href="#" data-toggle="modal" data-target="#myModal12"><img class="img-rounded" src="<?=URL?>public/img/provee/hum.png" style="width: 150px; height: 60px;"></a></li>
   
</ul>






</div>
<div class="col-md-8">
</br>
<div class="aux btn-warning">Nuestros productos</div> </br>
<ul class="nav nav-pills nav-justified" role="tablist">
  <li class="active"><a href="#producto1" role="tab" data-toggle="tab"> <div class="help"><span class="glyphicon glyphicon-save"></span></div> Recipientes y Tamices
</a></li>
  <li><a href="#producto2" role="tab" data-toggle="tab"><div class="help"><span class="glyphicon glyphicon-wrench"></span></div>Maquinarias y Equipos 
</a></li>
  <li><a href="#producto3" role="tab" data-toggle="tab"><div class="help"><span class="glyphicon glyphicon-glass"></span></div>Accesorios y Equipos Auxiliares
</a></li>
  <li><a href="#producto4" role="tab" data-toggle="tab"><div class="help"><span class="glyphicon glyphicon-filter"></span></div>Laboratorio y Material Referencial</a></li>
</ul>

<div class="tab-content" style="padding:0px 10px 0px 0px;">
  <div class="tab-pane active" id="producto1" style="font-size: 120%;">
	<!--PRIMER PANEL LABORATORIO-->


<div class="panel-group justifica" id="accordion">
</br>
<!--1 PRODUCTO-->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
          Tamices ATM
	

        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/tamices1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px; ">
   </div> 
   <div class="col-md-8">      
          Tamices de alta precisión al mejor precio. Cada uno contiene su certificado de calidad, desarrollado por nuestra linea Advantech
        </br></br>
<!-- Button trigger modal SUMA -->
 

  <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
<!-- Button trigger modal Correo -->

    </div> 
  </div>
      </div>
    </div>
 </div>

<!--1 PRODUCTO FIN-->
</br>
<!--2 PRODUCTO-->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro2">
          Tamiz Advantech
	
        </a>
      </h4>
    </div>
    <div id="prod2" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle"  src="<?=URL?>public/img/atm/tamiz1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          

    Cuidamos hasta el más mínimo detalle de cada tamiz de ensayo utilizando múltiples puntos de inspección incorporados a nuestros procesos, a fin de asegurar la integridad de la calidad. 

  </br></br>

<!-- Button trigger modal Correo -->
 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--2 PRODUCTO FIN-->
</br>
<!--3 PRODUCTO-->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
          Tapas y Fondo 
	
	

        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/tapa1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Utilizados para un mejor proceso
de tamizado.
A su vez, las bandejas de
reborde también se aplican en
los tamices.
</br></br>
<!-- Button trigger modal SUMA -->
 

  <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
<!-- Button trigger modal Correo -->

    </div> 
  </div>
      </div>
    </div>
 </div>
<!--3 PRODUCTO FIN-->
</br>
<!--4 PRODUCTO-->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Bandejas
	

        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/gilson/BANDEJAS1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Bandejas de aluminio de gran
espesor, económicas, duraderas,
ligeras e inoxidables. Desarrollados por la marca Gilson </br></br>
<!-- Button trigger modal SUMA -->
 

  <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
<!-- Button trigger modal Correo -->

    </div> 
  </div>
      </div>
    </div>
 </div>
<!--4 PRODUCTO FIN-->

</br>
<!--4 PRODUCTO-->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Recipiente para balanza
  

        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/gilson/recipiente1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">  

        Recipiente de aluminio de gran calidad, encontrados en nuestra linea Gilson.    
          </br></br>
<!-- Button trigger modal SUMA -->
 

  <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
<!-- Button trigger modal Correo -->

    </div> 
  </div>
      </div>
    </div>
 </div>
<!--4 PRODUCTO FIN-->




</div>
<!--SEGUNDO PANEL LABORATORIO FINAL-->

  </div>



<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->




  <div class="tab-pane" id="producto2">
		<!--PRIMER PANEL CONcreto -->


<div class="panel-group justifica" id="accordion">
</br>
<!--1 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
          Duratap top rotap
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/duratap1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Fabricado con materiales de
acero y aleación resistente
para ciclos exigentes.
Garantía de un rendimiento </br></br><!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->
</br>
<!--2 PRODUCTO-->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro2">
         L3p Sonic Sifter Sieves
	
        </a>
      </h4>
    </div>
    <div id="prod2" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/l3p1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">   Tamices de alta precisión al mejor precio. Cada uno contiene su certificado de calidad, desarrollado por nuestra linea Advantech    
           </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--2 PRODUCTO FIN-->
</br>
<!--3 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
          Meinzer II Advantech Brass
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/mei1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Funcionamiento silencioso, Compacto, ligero y portátil Reloj de 60 min, Menos desgaste de tamices, Sin partes móviles </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--3 PRODUCTO FIN-->

</br>
<!--4 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
          Rotap
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/ROTAP1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          
Desarrollado con los mejores materiales y de acero
Garantía de un rendimiento, disponible en nuestra linea Advantech

          </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--4 PRODUCTO FIN-->
</br>
<!--5 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
        Sonic Sifter
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/sonic1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Equipo tamizador superior de
precisión, versátil e ideal para
aplicaciones </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--5 PRODUCTO FIN-->
</br>
<!--6 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
          Horno
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/gilson/HORNO1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          GILSON cuenta con
diversos modelos de hornos
ideales para cualquier aplicación
en los laboratorios. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--6 PRODUCTO FIN-->
</br>
<!--7 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Splitter o cuarteadores
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/gilson/cuartea1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Cuarteadores en acero de
diferentes capacidades y
tamaños para dividir las muestras
o materiales
secos.</br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
                        </button> 
    </div> 
         </div>
            </div>
         </div>
         </div>
<!--7 PRODUCTO FIN-->
</br>
<!--8 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
       Testing Screens
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" <img src="<?=URL?>public/img/gilson/test1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Equipos agitadores de
Gruesos y de fácil control ; con
tolvas integradas para facilitar el
ingreso del
material de muestra. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--8 PRODUCTO FIN-->
</br>
<!--9 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
        Pulverizador de Disco
	
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/BICO/pulve1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Cuarteadores en acero de
diferentes capacidades y
tamaños para dividir las
muestras o materiales
secos. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
       </button> 
       </div> 
         </div>
      </div>
    </div>
 </div>
<!--9 PRODUCTO FIN-->
</br>
<!--10 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
        F.C Bond Mill
			
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/BICO/bond1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
         Utilizado en el cálculo de la capacidad de la molienda de todo el mineral. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
       </button> 
        </div> 
       </div>
      </div>
    </div>
 </div>
<!--10 PRODUCTO FIN-->
</br>
<!--11 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
        Pulverizador 
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/rocklabs/pulve1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Utilizados para pulverizar una
variedad de materiales para
su posterior análisis por
métodos instrumentales o
químicos. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
       </button> 
          </div> 
       </div>
      </div>
    </div>
 </div>
<!--11 PRODUCTO FIN-->
</br>
<!--12 PRODUCTO-->
<div class="panel panel-primary">
          <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
        Sistemas Combo
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/rocklabs/comb1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">   

      Combina una chancadora de
doble efecto con un
divisor de muestras giratorio
para una reducción de 50 mm a
2 mm en una sola pasada.
          </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
        </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--12 PRODUCTO FIN-->
</br>
<!--11 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
       Chancadora
	
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/rocklabs/chanca1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">  

       Chancadora de mandíbula fina,
puede albergar 5 kg de muestra y
reduce la muestra de 50 mm a 2
mm en una sola
pasada.
          </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--11 PRODUCTO FIN-->
</br>
<!--11 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
    SmartBoydRSD 
	
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/rocklabs/smar1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Equipado con un controlador
lógico programable (PLC) para
el control de la división de la
muestra. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--11 PRODUCTO FIN-->
</br>
<!--12 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
        Concentrador
	
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/SEPOR/concen1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Retiene las partículas altas en densidad para
producir una pequeña concentración de la
partícula con un grado mas alto de
concentrado. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--12 PRODUCTO FIN-->
</br>
<!--13 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
      Molinos
	
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/SEPOR/molino1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Diseñados para dar
reducción de tamaño a cantidades
utilizadas en laboratorio
de minerales.
Robustos y resistentes para
manejar materiales duros. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--13 PRODUCTO FIN-->
</br>
<!--14 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
     Manguera GLP
	
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" img src="<?=URL?>public/img/dun/manguera1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Prueba de aislamiento térmico.
Prueba de ciclos
térmicos.</br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--14 PRODUCTO FIN-->
</br>
<!--15 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
        Manguera SubMarina
	
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/dun/submarina1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8"> 
   Diseño probado
Altamente flexible
Excelente resistencia
Segundo revestimiento     
         </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--15 PRODUCTO FIN-->
</br>
<!--16 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
       Acoples
		
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/dun/submarina1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">
   Aptas para cada modelo de mangueras
(hidráulicas e industriales) que le darán una
presión equilibrada.      
          </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--16 PRODUCTO FIN-->
</br>
<!--17 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
       Equipo de comprensión de concreto
	
		
	
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/hum/equipo1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">     
    Utilizados para determinar la
resistencia de tracción de los
concretos.
Disponibles en toda su gama de
series acorde a su requerimiento.
          </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--17 PRODUCTO FIN-->
</br>
<!--18 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
       H-3962 Sample Splitters
	
	
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/hum/h1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          En material de acero de diferentes
capacidades, y tamaños
para dividir las muestras y/o
materiales
Secos. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--18 PRODUCTO FIN-->
</br>
<!--19 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
      Maquina de Abrasión	
	
	
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/hum/maquina1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          quipo con marco de
acero, capaz de realizar abrasión
en la roca
triturada y grava sin triturar.
Cumple con la norma ASTM. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--19 PRODUCTO FIN-->
</br>

<!--21 PRODUCTO FIN-->

</div>
<!--SEGUNDO PANEL LABORATORIO FINAL-->

 </div>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->

  <div class="tab-pane" id="producto4">

	<!--PRIMER PANEL LABORATORIO-->


<div class="panel-group justifica" id="accordion">
</br>
<!--1 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
          Tabla Material
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
       

     <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/material.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
         Material referencial para pruebas de laboratorio, en nuestra Linea LAB de proveedor ORE. </br></br>
<!-- Button trigger modal SUMA -->






<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      

 </div>


 </div>


     
  </div>
<!--1 PRODUCTO FIN-->

<!--2 PRODUCTO FIN-->

 </br>
      </br>
      </br>
      </br>
      </br>
      </br>
      </br>
</br>
      </br>
      </br>
      </br>
      </br>
      </br>
</div>
<!--PRIMER PANEL LABORATORIO FINAL-->
</div>

  <div class="tab-pane" id="producto3">
	<!--PRIMER PANEL LABORATORIO-->


<div class="panel-group justifica" id="accordion">
</br>
<!--1 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Balanza Marcy
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/gilson/balanza1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Balanza especialmente
diseñada para medir
porcentajes solidos y
densidades de pulpa para
diferentes escalas.
</br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->
</br>
<!--1 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
       Caja Acustica
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/gilson/caja1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Diseñadas para reducir el ruido
en los equipos tamizadores tipo
Rotap.</br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->
</br>
<!--1 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
       Disco de Pulverizadores
		
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/BICO/disco1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
         Diseñados para proporcionar
una pulverización eficiente,
mayor vida útil y sin
vibraciones. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->
</br>
<!--1 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Hidrociclones 
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/salter/hidro1a.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          De poliuretano
resistente a la abrasión para
una gama de temperatura.
Eficaces, compactos y ligeros. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->
</br>
</br>

<!--1 PRODUCTO FIN-->
</br>
<!--1 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Separador Multigravitatorio
	
	
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/salter/sepa2a.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Recuperación y concentración selectiva de
los minerales ultra finos en múltiples fuerzas
gravitacionales.
Sistema comparado a mesas vibratorias.
</br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->
</br>
<!--1 PRODUCTO-->
<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
Clyclosizer
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/SEPOR/ciclo1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
         Análisis de partículas rápido y preciso.
Maneja muestras hasta de 100 gr
Dimensiones:
160 cm x48 cm L , 180 cm W H. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->
</br>
<!--1 PRODUCTO-->

<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Filtro Prensa
	
	
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/SEPOR/algo1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
         Filtro de presión diseñado
para la filtración de lotes de
cantidades a escala de
laboratorio bajo
presiones de 60 PSI. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->

<!--1 PRODUCTO-->

<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Alambre TUFFLEX
  
  
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/malla.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          TWIN CITY WIRE es una de las líneas también proveedoras de mallas de alambre con gran resistencia a la
corrosión y con un recubrimiento especial que hará mas larga la vida útil del producto.
A su vez, presenta una amplia gama de mallas para todo tipo de uso. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
   <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->

<!--1 PRODUCTO-->

<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         malla de acero
  
  
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/atm/malla2.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          UNIVERSAL tiene el inventario mas grande a lo que se refiere en mallas de alambre en acero al
carbón y acero inoxidable. De aberturas hasta 400 mesh. Resultando ser una buena opción al realizar
compras de mallas. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
   <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->

<!--1 PRODUCTO-->

<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Analizador Hidrométrico
  
  
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/hum/analiza1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Fabricado para la
determinación de la
distribución de las
partículas de suelo.
Diseñado para una T° de
68°F. </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
   <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->

<!--1 PRODUCTO-->

<div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#pro1">
         Hornos Humboldt
  
  
        </a>
      </h4>
    </div>
    <div id="prod1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
  <div class="col-md-4">
   <img class="img-circle" src="<?=URL?>public/img/hum/hornos1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
   </div> 
   <div class="col-md-8">      
          Equipo con aislamiento de fibra
de cerámica lo que proporciona
mas rápido el calentamiento
y la reducción de
consumo de energía . </br></br>
<!-- Button trigger modal SUMA -->

<!-- Button trigger modal Correo -->
   <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
    ¿Dudas?
  </button> 
    </div> 
  </div>
      </div>
    </div>
 </div>
<!--1 PRODUCTO FIN-->

</div>
<!--PRIMER PANEL LABORATORIO FINAL-->
</div>
</div>
</div>
</div>
<div class="container">

<footer>
        <p class="pull-right"><a href="#"><span class="glyphicon glyphicon-chevron-up"></span></a></p>

      	
        <p>&copy; 2014 minas y concentradoras SA &middot; <a href="<?=URL?>home/index">Derechos Reservados</a> &middot; <a href="https://www.facebook.com/frank.izrael.delarosa">Free Lance wamp</a></p>
      </footer>


</div>

<!--MODAL 1 ATM-->
<div class="modal fade bs-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"> 
    <div class="modal-content">
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Advantech</h4>
      </div>
      <div class="modal-body" style="padding-top:0px; padding-bottom:0px;">
            
            <div class="row">
            <div class="col-md-7 imagenes" id="atm">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                  <div class="col-md-3 circulo"> 
                    <span class="glyphicon glyphicon-wrench"></span>
                  </div>
                 </div>
                 </br> </br> </br> 
               <div class="row">
                  <div class="col-md-6"> </div>
                  <div class="col-md-6" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagen1"><span class="label label-primary tam"> Duratap top rotap
</span></a> </br> </br>


                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagen2"><span class="label label-success tam">L3p Sonic Sifter Sieves
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagen3"><span class="label label-warning tam"> Meinzer II Advantech Brass
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagen4"><span class="label label-danger tam"> Rotap
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagen5"><span class="label label-info tam"> Sonic Sifter
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagen6"><span class="label label-success tam"> Tamices ATM
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagen7"><span class="label label-danger tam"> Tamiz Advantech
 </span></a> </br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagen8"><span class="label label-primary tam">Tapas y Fondos
 </span> </a> </br> </br>
                  </div>
                 
               </div>  
                        
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -1px;">   

            <h2> Maquinarias & Tamices </h2>

Fabricado con materiales de
acero y aleación resistente
para ciclos exigentes.
Garantía de un rendimiento
<hr>
Tamices de alta precisión al
mejor precio.
Cada uno contiene su certificado
de calidad.
<hr>
 Funcionamiento silencioso, Compacto, ligero y portátil Reloj de 60 min, Menos desgaste de tamices, Sin partes móviles
<hr>
Equipo tamizador superior de
precisión, versátil e ideal para
aplicaciones
<hr>
Utilizados para un mejor proceso
de tamizado.
A su vez, las bandejas de
reborde también se aplican en
los tamices.
            </div>
            </div>





      </div>
      <div class="modal-footer cabeza">
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button> 
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      
      </div>
    </div>
  </div>
</div>


<!-- imagen  modal -->
<div style="text-align: center" class="modal fade" id="imagen1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Duratap top rotap</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/atm/duratap1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN -->

<!-- imagen  modal 2 -->
<div style="text-align: center" class="modal fade" id="imagen2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">L3p Sonic Sifter Sieves</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/atm/l3p1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FINc2  -->

<!-- imagen  modalc3 -->
<div style="text-align: center" class="modal fade" id="imagen3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Meinzer II Advantech Brass</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/atm/mei1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 3 -->

<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagen4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Rotap</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/atm/ROTAP1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!-- imagen  modal 5-->
<div style="text-align: center" class="modal fade" id="imagen5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sonic Sifter</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/atm/sonic1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 5-->

<!-- imagen  modal 6 -->
<div style="text-align: center" class="modal fade" id="imagen6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tamices ATM</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/atm/tamices1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 6-->

<!-- imagen  modal 7-->
<div style="text-align: center" class="modal fade" id="imagen7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tamiz Advantech</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/atm/tamiz1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 7-->

<!-- imagen  modal 8-->
<div style="text-align: center" class="modal fade" id="imagen8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tapas y Fondos</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/atm/tapa1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 8-->
<!--FIN MODAL 1-->
<!--MODAL 2-->
<div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">  
    <div class="modal-content">
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Bando</h4>
      </div>
      <div class="modal-body">
       			<div class="row">
            <div class="col-md-7 imagenes3" id="gilson">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                  <div class="col-md-3 circulo4"> 
                    <span class="glyphicon glyphicon-save"></span>
                  </div>
                 </div>
                 </br> </br> </br>
               <div class="row">
                  <div class="col-md-6"> </div>
                  <div class="col-md-6" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena1"><span class="label label-primary tam"> Balanza Marcy
</span></a> </br> </br>


                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena2"><span class="label label-success tam"> Bandejas
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena3"><span class="label label-warning tam"> Caja Acustica
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena4"><span class="label label-danger tam"> Horno
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena5"><span class="label label-info tam"> Recipiente para balanza
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena6"><span class="label label-success tam"> Splitter o cuarteadores
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena7"><span class="label label-danger tam"> Testing Screens
 </span></a> </br> </br>
                      
                  </div>
                 
               </div>  
                        
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Balanzas y Recipientes </h2>

Cuarteadores en acero de
diferentes capacidades y
tamaños para dividir las muestras
o materiales
secos.
<hr>
GILSON cuenta con
diversos modelos de hornos
ideales para cualquier aplicación
en los laboratorios.
<hr>
Bandejas de aluminio de gran
espesor, económicas, duraderas,
ligeras e inoxidables.
<hr>
Balanza especialmente
diseñada para medir
porcentajes solidos y
densidades de pulpa para
diferentes escalas.
<hr>
Equipos agitadores de
Gruesos y de fácil control ; con
tolvas integradas para facilitar el
ingreso del
material de muestra.
            </div>
            </div>

      </div>
      <div class="modal-footer cabeza">
	<a href="#"><button type="button" class="btn btn-success" data-dismiss="modal">Bando</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!--FIN MODAL 2-->

<!--MODAL 3-->
<div class="modal fade bs-example-modal-lg" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"> 
    <div class="modal-content">
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Gilson</h4>
      </div>
      <div class="modal-body">
      	
          <div class="row">
            <div class="col-md-7 imagenes3" id="gilson">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                  <div class="col-md-3 circulo4"> 
                    <span class="glyphicon glyphicon-save"></span>
                  </div>
                 </div>
                 </br> </br> </br>
               <div class="row">
                  <div class="col-md-6"> </div>
                  <div class="col-md-6" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena1"><span class="label label-primary tam"> Balanza Marcy
</span></a> </br> </br>


                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena2"><span class="label label-success tam"> Bandejas
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena3"><span class="label label-warning tam"> Caja Acustica
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena4"><span class="label label-danger tam"> Horno
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena5"><span class="label label-info tam"> Recipiente para balanza
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena6"><span class="label label-success tam"> Splitter o cuarteadores
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagena7"><span class="label label-danger tam"> Testing Screens
 </span></a> </br> </br>
                      
                  </div>
                 
               </div>  
                        
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Balanzas y Recipientes </h2>

Cuarteadores en acero de
diferentes capacidades y
tamaños para dividir las muestras
o materiales
secos.
<hr>
GILSON cuenta con
diversos modelos de hornos
ideales para cualquier aplicación
en los laboratorios.
<hr>
Bandejas de aluminio de gran
espesor, económicas, duraderas,
ligeras e inoxidables.
<hr>
Balanza especialmente
diseñada para medir
porcentajes solidos y
densidades de pulpa para
diferentes escalas.
<hr>
Equipos agitadores de
Gruesos y de fácil control ; con
tolvas integradas para facilitar el
ingreso del
material de muestra.
            </div>
            </div>
      </div>
      <div class="modal-footer cabeza">
	 <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button> 
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      </form>
      </div>
    </div>
  </div>
</div>



<!-- imagen  modal -->
<div style="text-align: center" class="modal fade" id="imagena1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> Balanza Marcy

</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/gilson/balanza1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN -->

<!-- imagen  modal 2 -->
<div style="text-align: center" class="modal fade" id="imagena2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">

Bandejas
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/gilson/BANDEJAS1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FINc2  -->

<!-- imagen  modalc3 -->
<div style="text-align: center" class="modal fade" id="imagena3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Caja Acustica
 </h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/gilson/caja1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 3 -->

<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagena4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Horno
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/gilson/HORNO1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!-- imagen  modal 5-->
<div style="text-align: center" class="modal fade" id="imagena5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Recipiente para balanza
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/gilson/recipiente1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 5-->

<!-- imagen  modal 6 -->
<div style="text-align: center" class="modal fade" id="imagena6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> Splitter o cuarteadores
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/gilson/cuartea1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 6-->

<!-- imagen  modal 7-->
<div style="text-align: center" class="modal fade" id="imagena7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Testing Screens</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/gilson/test1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 7-->

<!--FIN MODAL 3-->

<!--MODAL 4 BICO -->
<div class="modal fade bs-example-modal-lg" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea BICO</h4>
      </div>
      <div class="modal-body">
       

          <div class="row">
            <div class="col-md-7 imagenes4" id="bico">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                  <div class="col-md-3 circulo"> 
                    <span class="glyphicon glyphicon-wrench"></span>
                  </div>
                 </div>
                 </br> </br> </br> 
               <div class="row">
                  <div class="col-md-6"> </div>
                  <div class="col-md-6" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenb1"><span class="label label-primary tam"> Disco de Pulverizadores
</span></a> </br> </br>


                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenb2"><span class="label label-success tam"> F.C Bond Mill
 </span> </a></br> </br>
                
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenb3"><span class="label label-danger tam"> Pulverizador de Disco
</span> </a></br> </br>
      
                      
                  </div>
                 
               </div>  
                        
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Maquinaria </h2>

 Diseñados para proporcionar
una pulverización eficiente,
mayor vida útil y sin
vibraciones.
<hr>
Utilizado en el cálculo de la capacidad de la
 molienda de todo el mineral.
<hr>
Cuarteadores en acero de
diferentes capacidades y
tamaños para dividir las
muestras o materiales
secos.
<hr>
            </div>
            </div>



      </div>
      <div class="modal-footer cabeza">
	<button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
       
      </div>
    </div>
  </div>
</div>


<!-- imagen  modal 5-->
<div style="text-align: center" class="modal fade" id="imagenb1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Disco de Pulverizadores
</h4>
      </div>
      <div class="modal-body">
       
        
        <img src="<?=URL?>public/img/BICO/disco1.jpg">
      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 5-->

<!-- imagen  modal 6 -->
<div style="text-align: center" class="modal fade" id="imagenb2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> F.C Bond Mill
</h4>
      </div>
      <div class="modal-body">
       <img src="<?=URL?>public/img/BICO/bond1.jpg">
        

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 6-->

<!-- imagen  modal 7-->
<div style="text-align: center" class="modal fade" id="imagenb3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Pulverizador de Disco</h4>
      </div>
      <div class="modal-body">
       
          <img src="<?=URL?>public/img/BICO/pulve1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 7-->

<!--FIN MODAL 4-->
<!--MODAL 5-->
<div class="modal fade bs-example-modal-lg" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"> 
    <div class="modal-content">
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea ORE</h4>
      </div>
      <div class="modal-body">
      
 <div class="row">
            <div class="col-md-7 imagenes5" id="bico">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                  <div class="col-md-3 circulo3"> 
                    <span class="glyphicon glyphicon-filter"></span>
                  </div>
                 </div>
                 </br> </br> </br>   </br> </br> </br>   </br> </br> </br> 
               <div class="row">
                  
                  <div class="col-md-12" style="text-align: right;">
<span class="label label-danger tam"> MULTI-Material Referencial
</span></br> </br>   
                  </div>
                 
               </div>  
                        
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Material Referencial de Laboratorio </h2>

Nuestra línea ORE, es proveedor de material referencial certificado para la exploración de
la minería y las industrias analíticas.
<hr>
Material referencial son producidos por
nuestra línea Ore
<hr>

            </div>
            </div>

      </div>
      <div class="modal-footer cabeza">
	<button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      
      </div>
    </div>
  </div>
</div>
<!--FIN MODAL 5-->
<!--MODAL 6-->
<div class="modal fade bs-example-modal-lg" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">   
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea RockLabs</h4>
      </div>
      <div class="modal-body">
       
          <div class="row">
            <div class="col-md-7 imagenes6" id="rocklabs">
              
                <div class="row">
                  <div class="col-md-6"> </div> 
                  <div class="col-md-3 circulo" style="margin-left: 20px;"> 
                    <span class="glyphicon glyphicon-wrench"></span>
                  </div>
                    <div class="col-md-3 circulo3" style="margin-left: 20px;"> 
                    <span class="glyphicon glyphicon-filter"></span>
                  </div>
                 </div>
                 </br> </br> </br> </br></br> </br></br> </br> </br> </br></br> </br>
               <div class="row">
                  <div class="col-md-2"> </div>
                  <div class="col-md-10" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenr1"><span class="label label-primary tam"> Pulverizador
</span></a> </br> </br>


                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenr2"><span class="label label-success tam"> Sistemas Combo
 </span> </a></br> </br>
                
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenr3"><span class="label label-danger tam"> Chancadora
</span> </a></br> </br>

                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenr4"><span class="label label-warning tam"> SmartBoydRSD
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenr5"><span class="label label-success tam"> Material Referencial Certificado 
</span></a> </br> </br>                    
             

      
                      
                  </div>
                 
               </div>  
                        
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Maquinaria & Material de laboratorio </h2>

Utilizados para pulverizar una
variedad de materiales para
su posterior análisis por
métodos instrumentales o
químicos.
<hr>
Combina una chancadora de
doble efecto con un
divisor de muestras giratorio
para una reducción de 50 mm a
2 mm en una sola pasada.
<hr>
Chancadora de mandíbula fina,
puede albergar 5 kg de muestra y
reduce la muestra de 50 mm a 2
mm en una sola
pasada.
<hr>
Equipado con un controlador
lógico programable (PLC) para
el control de la división de la
muestra.
<hr>
Sistemas automatizados que molienda de todo el mineral.
permite procesar hasta 300
muestras al día o más.
<hr>
Minerales pulverizados con
contenido de oro y adecuado
para el análisis por el ensayo o
agua regia.
            </div>
            </div>
      </div>
      <div class="modal-footer cabeza">
	<button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!--image 1-->
<div style="text-align: center" class="modal fade" id="imagenr1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Pulverizador
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/rocklabs/pulve1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 5-->

<!--image 1-->
<div style="text-align: center" class="modal fade" id="imagenr2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sistemas Combo
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/rocklabs/comb1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 5-->
<!--image 2-->
<div style="text-align: center" class="modal fade" id="imagenr3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Chancadora
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/rocklabs/chanca1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 2-->
<!--image 3-->
<div style="text-align: center" class="modal fade" id="imagenr4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">SmartBoydRSD
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/rocklabs/smar1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 5-->
<!--image 4-->
<div style="text-align: center" class="modal fade" id="imagenr5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Material Referencial Certificado para Pt, Pd, Au
</h4>
      </div>
      <div class="modal-body">
      <img src="<?=URL?>public/img/rocklabs/mate1.jpg">
      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 5-->
<!-- imagen FIN 5-->
<!--FIN MODAL 6-->
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<!--MODAL 7-->
<div class="modal fade bs-example-modal-lg" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Salter</h4>
      </div>
      <div class="modal-body">
       

 
            <div class="row">
            <div class="col-md-7 imagenes7" id="salter">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                  <div class="col-md-3 circulo2"> 
                    <span class="glyphicon glyphicon-glass"></span>
                  </div>
                 </div>
                 </br> </br>  </br> </br>  </br> </br>  </br> </br>
               <div class="row">
                  <div class="col-md-4"> </div>
                  <div class="col-md-8" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenc1"><span class="label label-primary tam"> Hidrociclones
</span></a> </br> </br>


                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenc2"><span class="label label-success tam"> Hydrociclons
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenc3"><span class="label label-warning tam"> Separador de minerales de laboratorio
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenc4"><span class="label label-danger tam"> Separador Multigravitatorio
</span> </a>
                  </div>
                 
               </div>  
                 </br></br>       
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Accesorios y Equipos de laboratorio </h2>

De poliuretano
resistente a la abrasión para
una gama de temperatura.
Eficaces, compactos y ligeros.
<hr>
Recuperación y concentración selectiva de
los minerales ultra finos en múltiples fuerzas
gravitacionales.
Sistema comparado a mesas vibratorias..
<hr>
Establece en minutos la cantidad, calidad y el
grado de liberación del mineral.
Equipado con bandejas V y bandejas planas.
<hr>
Repuestos activos y de
apoyo con larga vida útil
diseñados específicamente para necesitar un
mantenimiento anual

            </div>
            </div>
      </div>
      <div class="modal-footer cabeza">
	<button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!--FIN MODAL 7-->

<!-- imagen  modal 2 -->
<div style="text-align: center" class="modal fade" id="imagenc1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">

Hidrociclones
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/salter/hidro1a.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FINc2  -->

<!-- imagen  modal 2 -->
<div style="text-align: center" class="modal fade" id="imagenc2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">

Hydrociclons
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/salter/hidro2a.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FINc2  -->

<!-- imagen  modalc3 -->
<div style="text-align: center" class="modal fade" id="imagenc3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Separador de minerales de laboratorio
 </h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/salter/sepa1a.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 3 -->

<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagenc4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Separador Multigravitatorio
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/salter/sepa2a.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->
<!--MODAL 8-->
<div class="modal fade bs-example-modal-lg" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Sepor</h4>
      </div>
      <div class="modal-body">
      
            <div class="row">
            <div class="col-md-7 imagenes8" id="sepor">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                  <div class="col-md-3 circulo"> 
                    <span class="glyphicon glyphicon-wrench"></span>
                  </div>
                 </div>
                 </br> </br> </br> </br> </br> </br> </br> </br> </br> 
               <div class="row">
                  <div class="col-md-4"> </div>
                  <div class="col-md-8" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenf1"><span class="label label-primary tam"> Concentrador
</span></a> </br> </br>


                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenf2"><span class="label label-success tam"> Clyclosizer sepor
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenf3"><span class="label label-warning tam"> Molinos
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenf4"><span class="label label-danger tam"> Filtro Prensa
</span> </a> 
                     
                  </div>
                 
               </div>  
                  
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Maquinaria  </h2>

Filtro de presión diseñado
para la filtración de lotes de
cantidades a escala de
laboratorio bajo
presiones de 60 PSI.
<hr>
Análisis de partículas rápido y preciso.
Maneja muestras hasta de 100 gr
Dimensiones:
160 cm x48 cm L , 180 cm W H.
<hr>
Diseñados para dar
reducción de tamaño a cantidades
utilizadas en laboratorio
de minerales.
Robustos y resistentes para
manejar materiales duros.
<hr>
Retiene las partículas altas en densidad para
producir una pequeña concentración de la
partícula con un grado mas alto de
concentrado.

            </div>
            </div>

      </div>
      <div class="modal-footer cabeza">
	<button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      </form>
      </div>
    </div>
  </div>
</div>



<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagenf1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Concentrador
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/SEPOR/concen1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagenf2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Clyclosizer
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/SEPOR/ciclo1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagenf3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Molinos
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/SEPOR/molino1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagenf4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Filtro Prensa
</h4>
      </div>
      <div class="modal-body">
       
         <img src="<?=URL?>public/img/SEPOR/algo1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!--FIN MODAL 8-->
<!--MODAL 9-->
<div class="modal fade bs-example-modal-lg" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Twin city wire</h4>
      </div>
      <div class="modal-body">
       

            <div class="row">
            <div class="col-md-7 imagenes9" >
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                   <div class="col-md-3 circulo2"> 
                    <span class="glyphicon glyphicon-glass"></span>
                  </div>
                 </div>
                 </br> </br> </br> 
               <div class="row">
                  <div class="col-md-4"> </div>
                  <div class="col-md-8" style="text-align: right;"> 
                    
                      <span class="label label-primary tam"> Alambre TUFFLEX
</span> </br> </br>


                     <span class="label label-success tam">  TwinWire
 </span> </br> </br>
                      <span class="label label-warning tam">  Alambre SuperFlow Poliuretano

</span> </br> </br>
                   
                     
                  </div>
                 
               </div>  
                  
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Alambres </h2>
<hr>
TWIN CITY WIRE es una de las líneas también proveedoras de mallas de alambre con gran resistencia a la
corrosión y con un recubrimiento especial que hará mas larga la vida útil del producto.
A su vez, presenta una amplia gama de mallas para todo tipo de uso.
<hr>


            </div>
            </div>


      </div>
      <div class="modal-footer cabeza">
	  <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!--FIN MODAL 9-->

<!--MODAL 10-->
<div class="modal fade bs-example-modal-lg" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Universal</h4>
      </div>
      <div class="modal-body">
      
            <div class="row">
            <div class="col-md-7 imagenes10" >
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                   <div class="col-md-3 circulo2"> 
                    <span class="glyphicon glyphicon-glass"></span>
                  </div>
                 </div>
                 </br> </br> </br> 
               <div class="row">
                  <div class="col-md-4"> </div>
                  <div class="col-md-8" style="text-align: right;"> 
                    
                      <span class="label label-primary tam"> Alambre de Acero
</span> </br> </br>
                     <span class="label label-success tam">  Mallas de Acero
 </span> </br> </br>
                  </div>
                 
               </div>  
                  
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Alambres  </h2>
<hr>
UNIVERSAL tiene el inventario mas grande a lo que se refiere en mallas de alambre en acero al
carbón y acero inoxidable. De aberturas hasta 400 mesh. Resultando ser una buena opción al realizar
compras de mallas.<hr>


            </div>
            </div>
      </div>
      <div class="modal-footer cabeza">
  <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      
      </div>
    </div>
  </div>
</div>

<!--FIN MODAL 10-->


<!--MODAL 11-->
<div class="modal fade bs-example-modal-lg" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Dunlop</h4>
      </div>
      <div class="modal-body">
      

 <div class="row">
            <div class="col-md-7 imagenes11" id="dun">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                   <div class="col-md-3 circulo"> 
                    <span class="glyphicon glyphicon-wrench"></span>
                  </div>
                 </div>
                 </br> </br> </br> 
               <div class="row">
                  <div class="col-md-4"> </div>
                  <div class="col-md-8" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenw1"><span class="label label-success tam"> Manguera Submarina
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenw2"><span class="label label-warning tam"> Manguera GLP
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagenw3"><span class="label label-danger tam"> Acoples
</span> </a> 
                      
                   
                     </br> </br> 
                  </div>
                 
               </div>  
                  
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Manguerás  </h2>
<hr>
Diseño probado
Altamente flexible
Excelente resistencia
Segundo revestimiento.<hr>
Prueba de aislamiento térmico.
Prueba de ciclos
térmicos.
<hr> Aptas para cada modelo de mangueras
(hidráulicas e industriales) que le darán una
presión equilibrada. </br>
</br>
            </div>
            </div>



      </div>
      <div class="modal-footer cabeza">
    <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
      </form>
      </div>
    </div>
  </div>
</div>


<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagenw1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Manguera Submarina
</h4>
      </div>
      <div class="modal-body">
       
         <img src="<?=URL?>public/img/dun/manguera1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagenw2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Manguera SubMarina
</h4>
      </div>
      <div class="modal-body">
       
         <img src="<?=URL?>public/img/dun/submarina1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!-- imagen  modal   4-->
<div style="text-align: center" class="modal fade" id="imagenw3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Acople
</h4>
      </div>
      <div class="modal-body">
       
         <img src="<?=URL?>public/img/dun/acople1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 4-->

<!--FIN MODAL 11-->


<!--MODAL 12-->
<div class="modal fade bs-example-modal-lg" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Linea Humboldt</h4>
      </div>
      <div class="modal-body">
       

            <div class="row">
            <div class="col-md-7 imagenes12" id="hum">
              
                <div class="row">
                  <div class="col-md-9"> </div> 
                  <div class="col-md-3 circulo"> 
                    <span class="glyphicon glyphicon-wrench"></span>
                  </div>
                 </div>
                 </br> </br> </br> </br> </br> </br> </br> </br> </br> 
               <div class="row">
                  <div class="col-md-4"> </div>
                  <div class="col-md-8" style="text-align: right;"> 
                    
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagend1"><span class="label label-primary tam"> Analizador Hidrométrico
</span></a> </br> </br>


                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagend2"><span class="label label-success tam"> Equipo de comprensión de concreto
 </span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagend3"><span class="label label-warning tam"> H-3962 Sample Splitters
</span> </a></br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagend4"><span class="label label-danger tam"> Hornos Humboldt
</span> </a> </br> </br>
                      <a data-toggle="modal" style="cursor:pointer;" data-target="#imagend5"><span class="label label-danger tam"> Maquina de Abrasión
</span> </a>
                  </div>
                 
               </div>  
                 </br></br>       
            </div>
            <div class="col-md-5 cabeza1" style="margin-top: -16px;">   

            <h2> Maquinaria  </h2>

Equipo con aislamiento de fibra
de cerámica lo que proporciona
mas rápido el calentamiento
y la reducción de
consumo de energía .
<hr>
En material de acero de diferentes
capacidades, y tamaños
para dividir las muestras y/o
materiales
Secos.
<hr>
Fabricado para la
determinación de la
distribución de las
partículas de suelo.
Diseñado para una T° de
68°F.
<hr>
Equipo con marco de
acero, capaz de realizar abrasión
en la roca
triturada y grava sin triturar.
Cumple con la norma ASTM.
<hr>
Utilizados para determinar la
resistencia de tracción de los
concretos.
Disponibles en toda su gama de
series acorde a su requerimiento.
            </div>
            </div>




      </div>
      <div class="modal-footer cabeza">
    <button class="btn btn-success margen" data-toggle="modal" data-target="#suma">
          Cotizar
       </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
     
      </div>
    </div>
  </div>
</div>


<!-- imagen  modal   1-->
<div style="text-align: center" class="modal fade" id="imagend1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Analizador Hidrométrico
</h4>
      </div>
      <div class="modal-body">
       
        <img src="<?=URL?>public/img/hum/analiza1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 1-->
<!-- imagen  modal   1-->
<div style="text-align: center" class="modal fade" id="imagend2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Equipo de comprensión de concreto
</h4>
      </div>
      <div class="modal-body">
       
         <img src="<?=URL?>public/img/hum/equipo1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 1-->
<!-- imagen  modal   1-->
<div style="text-align: center" class="modal fade" id="imagend3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">H-3962 Sample Splitters
</h4>
      </div>
      <div class="modal-body">
       
         <img src="<?=URL?>public/img/hum/h1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 1-->
<!-- imagen  modal   1-->
<div style="text-align: center" class="modal fade" id="imagend4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Hornos Humboldt
</h4>
      </div>
      <div class="modal-body">
       
         <img src="<?=URL?>public/img/hum/hornos1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 1-->
<!-- imagen  modal   1-->
<div style="text-align: center" class="modal fade" id="imagend5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content"> 
      <div class="modal-header cabeza1">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> Maquina de Abrasión
</h4>
      </div>
      <div class="modal-body">
       
         <img src="<?=URL?>public/img/hum/maquina1.jpg">

      </div>
      
    </div>
  </div>
</div>
<!-- imagen FIN 1-->
<!--FIN MODAL 12-->
<!--MODAL SUMA-->
<div class="modal fade" id="suma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Envianos una consulta</h4>
      </div>
      <div class="modal-body">
	<div class="row">
	<div class="col-md-6 model1">
	<ul class="list-group">
  <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-search"></span> Localización: Dirección Lima Av. Canaval y Moreyra 609 - Oficina A. San Isidro

.</li>
  <li style="text-align: left;" class="list-group-item list-group-item-info"> <span class="glyphicon glyphicon-envelope"></span> Contactenos a : mycsa@minasyconcentradoras.com</li>
  <li class="list-group-item list-group-item-warning"> <span class="glyphicon glyphicon-warning-sign"></span> FAX (51-1) 224-2822
. </li>
  <li class="list-group-item list-group-item-danger"> <span class="glyphicon glyphicon-earphone"></span> Telefono: (51-1) 512-1400</li>
</ul>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.2112818426676!2d-77.01788850000001!3d-12.097683499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c870ebadbf65%3A0x96f07780f73630ef!2sAvenida+Enrique+Canaval+y+Moreyra%2C+San+Isidro+15036!5e0!3m2!1ses!2spe!4v1413241400469" width="250" height="250" frameborder="0" style="border:0"></iframe>
	</div>
	<div class="col-md-6">

	<form action="<?=URL?>home/enviar_email" method="post">
       	<div class="input-group">
  		<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  		<input type="text" name="name" id="name" class="form-control" placeholder="Nombre y Apellido...">
	</div>
	</br>
	<div class="input-group">
  		<span class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></span>
  		<input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa...">
	</div>
	</br>
	<div class="input-group">
  		<span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
  		<input type="text" name="cargo" id="cargo" class="form-control" placeholder="Cargo...">
	</div>
	</br>
	<div class="input-group">
  		<span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
  		<input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono...">
	</div>
</br>
	<div class="input-group">
  		<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
  		<input type="text" name="correo" id="correo" class="form-control" placeholder="Email...">
	</div>
</br>
	<div class="input-group">
  		<span class="input-group-addon"><span class="glyphicon glyphicon-fire"></span></span>
  		<textarea class="form-control" name="mensaje" id="mensaje" rows="8" placeholder="Déjanos un comentario..."></textarea>
	</div>
	</div>
	</div>
      </div>
      <div class="modal-footer cabeza">
	<input type="submit" class="btn btn-danger" value="Consultar Ahora">
	</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cierra</button>
   </br>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?=URL?>public/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/js/docs.min.js"></script>
  </body>
</html>

</div>
</body>
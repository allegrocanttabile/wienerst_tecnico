<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

  <title>Inventario Wieners Tech</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="vistas/img/plantilla/icono-negro.png">

   <!--=====================================
  PLUGINS DE CSS
  ======================================-->


  <link rel="stylesheet" href="vistas/nuevo/select2.min.css" />

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">

  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->

  <!-- jQuery 3 -->
  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>





  <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
 
  <!-- SweetAlert 2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="vistas/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- jQuery Number -->
  <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="vistas/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="vistas/bower_components/raphael/raphael.min.js"></script>
  <script src="vistas/bower_components/morris.js/morris.min.js"></script>

  <!-- ChartJS http://www.chartjs.org/-->
  <script src="vistas/bower_components/Chart.js/Chart.js"></script>

  <script src="vistas/nuevo/select2.min.js"></script>

  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />

  
  
  <script type="text/javascript">


    function checkLetras(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla == 8) {
        return true;
      }
      patron = /[A-Za-zñÑáéíóúÁÉÍÓÚ ]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }


    function checkNumeroRaya(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla == 8) {
        return true;
      }
      patron = /[0-9--]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    function checkNumeroPunto(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla == 8) {
        return true;
      }
      patron = /[0-9-.]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }


    function checkLetrasNumeros(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla == 8) {
        return true;
      }
      patron = /[a-zA-Z0-9 ]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }


    function checkEspecial(e) {
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla == 8) {
        return true;
      }
      patron = /[a-zA-Z0-9.-/-+& ]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }

    

  </script>


  <style type="text/css">


 

   #mdialTamanio{
    width: 50% !important;
  }

  .botonRojo {
    background-color: white;
    color: black;
    border: 5px solid #f44336;

  }

  .botonMorado {
    background-color: white;
    color: black;
    border: 5px solid #7733FF;

  }

  .botonAmarillo {
    background-color: white;
    color: black;
    border: 5px solid #FFC300;
  }

  .botonVerde {
    background-color: white;
    color: black;
    border: 5px solid #4CAF50;

  }

  .parpadea {

    animation-name: parpadeo;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;

    -webkit-animation-name:parpadeo;
    -webkit-animation-duration: 1s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
  }

  @-moz-keyframes parpadeo{
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
  }

  @-webkit-keyframes parpadeo {
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
  }

  @keyframes parpadeo {
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
  }

  .letraBold {
    font-weight: bold;
  }

</style>

</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

  <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

   echo '<div class="wrapper">';

    /*=============================================
    CABEZOTE
    =============================================*/

    include "modulos/cabezote.php";

    /*=============================================
    MENU
    =============================================*/

    include "modulos/menu.php";

    /*=============================================
    CONTENIDO
    =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
       $_GET["ruta"] == "usuarios" ||
       $_GET["ruta"] == "clientes" ||
       $_GET["ruta"] == "productos" ||
       $_GET["ruta"] == "productos-cliente" ||
       $_GET["ruta"] == "productos-clienteEspecial" ||
       $_GET["ruta"] == "cotizacion" ||
       $_GET["ruta"] == "serviciosTecnicos" ||
       $_GET["ruta"] == "alertas" ||
       $_GET["ruta"] == "envios" ||
       $_GET["ruta"] == "ventas-parcial" ||
       $_GET["ruta"] == "ventas-total" ||
       $_GET["ruta"] == "ventas-prueba" ||
       $_GET["ruta"] == "crear-venta" ||
       $_GET["ruta"] == "editar-venta" ||
       $_GET["ruta"] == "reportes" ||
       $_GET["ruta"] == "salir"||
       $_GET["ruta"] == "almacenes"||
       $_GET["ruta"] == "pasajeros"||
       $_GET["ruta"] == "compras"||
       $_GET["ruta"] == "proveedores"||
       $_GET["ruta"] == "crear-previosListados"||
       $_GET["ruta"] == "categorias-marcas-modelos"||
       $_GET["ruta"] == "existencias"
       
     ){

        include "modulos/".$_GET["ruta"].".php";

    }else{

      include "modulos/404.php";

    }

  }else{

    include "modulos/inicio.php";

  }

    /*=============================================
    FOOTER
    =============================================*/

    include "modulos/footer.php";

    echo '</div>';

  }else{

    include "modulos/login.php";

  }

  ?>


  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/productos.js"></script>
  <script src="vistas/js/serviciosTecnicos.js"></script>
  <script src="vistas/js/clientes.js"></script>
  <script src="vistas/js/ventas.js"></script>
  <script src="vistas/js/reportes.js"></script>
  <script src="vistas/js/productos-cliente.js"></script>
  <script src="vistas/js/productos-clienteEspecial.js"></script>
  <script src="vistas/js/categorias.js"></script>
  <script src="vistas/js/marcas.js"></script>
  <script src="vistas/js/modelos.js"></script>
  <script src="vistas/js/cotizacion.js"></script>
  <script src="vistas/js/alertas.js"></script>
  <script src="vistas/js/envios.js"></script>
  <script src="vistas/js/ventasDetalles.js"></script>
 
  <script src="vistas/js/almacenes.js"></script>
  <script src="vistas/js/faltantes.js"></script>
  <script src="vistas/js/pasajeros.js"></script>
  <script src="vistas/js/compras.js"></script>
  <script src="vistas/js/proveedores.js"></script>
  <script src="vistas/js/previosListados.js"></script>
  <script src="vistas/js/existencias.js"></script>
  <script src="vistas/js/alertas.js"></script>

</body>
</html>
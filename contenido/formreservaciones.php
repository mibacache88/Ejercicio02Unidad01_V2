<?php
include('lib/constantes.php');
include('lib/reservaciones.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$_SESSION["hm"];?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
                    <div id="contenido">
                        <form class="vacaciones form-horizontal" action="../lib/recepcionreserva.php" method="post">
                            <div class="form-group"> 
                                <label class="col-sm-2 control-label">Rut:</label> 
                                <div class="col-sm-10">
                                    <input class="form-control input-sm" id="name" name="name" type="text">
                                </div>
                            </div>
                            <br>Nombre: <input id="name" name="name" type="text">
                            <br>Email: <input id="email" name="email" type="email">
                            <br>Source Region: <input id="sourceregion" name="sourceregion" type="checkbox">
                            <br>English Language: <input id="englishlanguage" name="englishlanguage" type="checkbox">
                            <br>Date Check In:<input id="date_check_in" name="date_check_in" type="text">
                            <br>Date Check Out:<input id="date_check_out" name="date_check_out" type="text">
                            <input type="submit" value="Enviar"  >                     
                        </form>
                        <form class="vacaciones form-horizontal" action="../lib/eliminar.php" method="post">
                            <div class="form-group"> 
                                <label class="col-sm-2 control-label">Name:</label> 
                                <div class="col-sm-10">
                                    <input class="form-control input-sm" id="eliminarut" name="rut" type="text">
                                </div>
                           
                                <input id="btneliminar" type="button" value="Eliminar"  >   
                            </div>
                        </form>
                        <form class="vacaciones form-horizontal" action="../lib/eliminar.php" method="post">
                            <div class="form-group"> 
                                <label class="col-sm-2 control-label">Name:</label> 
                                <div class="col-sm-10">
                                    <input class="form-control input-sm" id="eliminarut_jq" name="rut" type="text">
                                </div>
                           
                                <input id="btneliminar" type="button" value="Eliminar"  >   
                            </div>
                        </form>
                    </div>

        </div>
        <div id="resultado"></div>
    </body>
    
    <script>
        $("#btneliminar").on( "click", function( event ) {
           $.post( "../lib/eliminar.php", { rut:  $("#eliminarut_jq").value() }, function( data ) {
                $( "#resultado" ).html( data );
              });
           
            });
            
        $("[id*=subsolicitud]").show();
        $("#subsolicitud").addClass("active");
        $("[id*=subsolicitud]").css("display","block");
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>

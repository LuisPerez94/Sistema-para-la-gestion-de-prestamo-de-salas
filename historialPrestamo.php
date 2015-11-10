<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenido :D</title>
        <link rel="stylesheet" href="estilos/bs/css/bootstrap.css">
        <link rel="stylesheet" href="estilos/estilo1.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



    </head>
    <body>

        <?php
        require 'scripts/conecta.php';
        $sql = "SELECT * FROM Peticion";
        $result = $con->query($sql);
        $num = mysqli_num_rows($result);
        ?>
        <nav role="navigation" class="navbar navbar-inverse">
            <!-- Agrupamos para mejor  visualizacion en mobiles-->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Sistema de Gestión de Salas</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  href="#" class="navbar-brand">SisGes</a>
            </div>
            <!--Conjunto de los links de nav para el toggleo-->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="homeusu.php">Home</a></li>
                    <li><a href="calendarizacion.php">Calendarización</a></li>
                    <li class="active"><a href="historialPrestamo.php">Historial De Prestamos</a></li>
                    <li><a href="peticion.php">Hacer una Petición</a></li>

                </ul>
                <ul class="nav navbar navbar-right">
                    <li><a href="www.itver.edu.mx" target="_blank">Itver</a></li>
                </ul>
            </div>
        </nav>	

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Este es tu historial de prestamos :)</h4>
                        <br>
                        <p>Numero de prestamos realizados <span class="badge"><?php echo $num; ?></span></p>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-condensed">
                            <tr>
                                <th class="text-center">Nombre del evento</th>
                                <th class="text-center">Descripción del evento</th>
                                <th class="text-center">Sala que se prestó para este evento</th>
                                <th class="text-center">Fecha del préstamo</th>
                                <th class="text-center">Numero de personas que asistieron</th>
                                <th class="text-center">Clima</th>
                                <th class="text-center">Proyector</th> 
                                <th class="text-center">Internet</th>
                                <th class="text-center">Numero de mesas</th>
                                <th class="text-center">Numero de sillas</th>



                            </tr>
                            <?php
                            for ($i = 0; $i < $num; $i++) {
                                $row = $result->fetch_assoc();
                                echo '<tr>';
                                echo '<td class="text-center">' . $row['nombreEvento'] . '</td>';
                                echo '<td class="text-center">' . $row['descripcion'] . '</td>';
                                echo '<td class="text-center">' . $row['idSala'] . '</td>';
                                echo '<td class="text-center">' . $row['fechaInicial'] . ' - ' . $row['fechaFinal'] . '</td>';
                                echo '<td class="text-center">' . $row['numPersonas'] . '</td>';

                                echo '<td class="text-center">' . (($row['clima'] == 1) ? '<span class="glyphicon glyphicon-ok-sign"></span>' :
                                        '<span class="glyphicon glyphicon-remove-sign"></span>') . '</td>';
                                echo '<td class="text-center">' . (($row['proyector'] == 1) ? '<span class="glyphicon glyphicon-ok-sign"></span>' :
                                        '<span class="glyphicon glyphicon-remove-sign"></span>') . '</td>';
                                echo '<td class="text-center">' . (($row['internet'] == 1) ? '<span class="glyphicon glyphicon-ok-sign"></span>' :
                                        '<span class="glyphicon glyphicon-remove-sign"></span>') . '</td>';
                                echo '<td class="text-center">' . $row['numMesas'] . '</td>';
                                echo '<td class="text-center">' . $row['numSillas'] . '</td>';



                                echo '</tr>';
                            }
                            ?>
                        </table>
                    </div>
                </div>

            </div>

        </div>


        <br>


        <!--Footer-->
        <footer>

            <div class="row">
                <div class="col-md-5">


                    <address>
                        <strong>Instituto Tecnólogico de Veracruz</strong><br>
                        Calz. Miguel Angel de Quevedo 2779 Col. Formando Hogar<br>
                        Veracruz,Ver. MEXICO<br>
                        <abbr title="Phone">Tel:</abbr> (229) 934 15 00
                    </address>

                    <address>
                        <strong>Luis Angel Perez Muñoz -> WebMaster</strong><br>
                        <a href="mailto:#">ingluisperez.m@outlook.com</a>
                    </address>

                    <p>Derechos Reservados 2015-2016</p>

                </div>
                <div class="col-md-3">
                    <p>Siguenos en las redes sociales :)</p>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Enlaces asociados</p>
                    <ul>
                        <li>Instituto Tecnologico de Veracruz</li>
                        <li>Moddle</li>
                        <li>LCI</li>
                        <li>CEPC</li>
                        <li>Cisco</li>
                    </ul>
                </div>
            </div>
        </footer>
        <?php mysqli_close($con); ?>
    </body>
</html>
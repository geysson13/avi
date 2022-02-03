<?php
 
 session_start ();
 if (!isset($_SESSION['usuario'])) {
     header ("location: index.php");
 }

 $usuario = $_SESSION['usuario'];
 
?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>SAGA GO</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Panel de administrador</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Administrador <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Perfil</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Salir</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="principal.php">SAGA GO</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Contenido <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href= "css/psaga.pdf" target= "_blanck">Presentacion SAGA GO</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="css/plansaga.pdf" target= "_blanck">Planes</a>
                                    </li>
                                                                     
                                    
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Usuarios <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="registro2.php">Crear usuario </a>
                                    </li>
                                     <li>
                                        <a tabindex="-1" href="modificar.php">Lista de usuarios</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="principal.php"><i class="icon-chevron-right"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Calendario</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Estadisticas</a>
                        </li>
                        <li>
                            <a href="actividad.php"><i class="icon-chevron-right"></i>Actividades</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="icon-chevron-right"></i> Tablas</a>
                        </li>
                                               
                                            
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">27</span> Clientes</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">15</span> Usuarios</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">2</span> Mensajes</a>
                        </li>
                        <li>
                            <a href="reporte2.php"><span class="badge badge-info pull-right">1</span> Reportes</a>
                        </li>
                        
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            
                          "Operacion completada"</div>
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="index.html">Inicio</a> <span class="divider">/</span>	
	                                    </li>
	                                    <li>
	                                        <a href="#">Configuracion</a> <span class="divider"></span>	
	                                    </li>
	                              </ul>
                            	</div>
                        	</div>
                    	</div>
                    <div class="row-fluid">
                                                <!-- /block -->
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Usuarios</div>
                                    <div class="pull-right"><span class="badge badge-info">15</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Nombre de usuario</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Geordy</td>
                                                <td>Favregas</td>
                                                <td>Geordy09</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Diana</td>
                                                <td>Torrealba</td>
                                                <td>Dian13</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Carlos</td>
                                                <td>ruiz</td>
                                                <td>Cdesing21</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Servicios</div>
                                    <div class="pull-right"><span class="badge badge-info">7</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Actividad</th>
                                                <th>fecha</th>
                                                <th>Monto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Merchandising</td>
                                                <td>02/12/2021</td>
                                                <td>$150</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Producción audiovisual</td>
                                                <td>01/12/2021</td>
                                                <td>$60</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Wi-Fi marketing</td>
                                                <td>12/12/2021</td>
                                                <td>$30</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Clientes</div>
                                    <div class="pull-right"><span class="badge badge-info"></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Alfredo</td>
                                                <td>Mejias</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Felix</td>
                                                <td>Arteaga</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Marisela</td>
                                                <td>salazar</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                        <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Estadisticas</div>
                            <div class="pull-right"><span class="badge badge-warning">ver mas</span>

                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span4">
                                <div class="chart" data-percent="73">73%</div>
                                <div class="chart-bottom-heading"><span class="label label-info">Clientes</span>

                                </div>
                            </div>
                           
                            <div class="span4">
                                <div class="chart" data-percent="83">83%</div>
                                <div class="chart-bottom-heading"><span class="label label-info">Usuarios</span>

                                </div>
                            </div>
                            <div class="span4">
                                <div class="chart" data-percent="93">93%</div>
                                <div class="chart-bottom-heading"><span class="label label-info">Actividades</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                                  </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                                                <!-- block -->
                                                <div class="block">
                                                    <div class="navbar navbar-inner block-header">
                                                        <div class="muted pull-left">Galeria</div>
                                                        <div class="pull-right"><span class="badge badge-info">16</span>
                        
                                                        </div>
                                                    </div>
                                                    <div class="block-content collapse in">
                                                        <div class="row-fluid padd-bottom">
                                                          <div class="span3">
                                                              <a href="css/s1.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s1.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s2.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s2.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s3.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s3.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s4.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s4.png">
                                                              </a>
                                                          </div>
                                                        </div>
                        
                                                        <div class="row-fluid padd-bottom">
                                                          <div class="span3">
                                                              <a href="css/s5.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s5.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s6.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s6.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s7.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s7.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s8.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s8.png">
                                                              </a>
                                                          </div>
                                                        </div>
                        
                                                        <div class="row-fluid padd-bottom">
                                                          <div class="span3">
                                                              <a href="css/s9.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s9.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s10.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s10.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s11.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s11.png">
                                                              </a>
                                                          </div>
                                                          <div class="span3">
                                                              <a href="css/s12.png" class="thumbnail" target= "_blanck">
                                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="css/s12.png">
                                                              </a>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                    </div>

                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Geysson Lopez 2021</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>
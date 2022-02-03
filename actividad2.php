<!DOCTYPE html>
<html>
    
    <head>
        <title>Actividades</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
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
                    <a class="brand" href="#">SAGA GO</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Empleado <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Perfil</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="index.php">salir</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Panel de empleado</a>
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
                        <li>
                            <a href="secundario.php"><i class="icon-chevron-right"></i> inicio</a>
                        </li>
                                             
                        
                                         
                        
                    </ul>
                </div>
                <!--/span-->
                <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal">
                                      <fieldset>
                                        <legend>Actividad asignada</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Nombre</label>
                                          <div class="controls">
                                            <input class="input-xlarge " id="focusedInput" type="text" value="Geysson Lopez">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Cargo</label>
                                          <div class="controls">
                                            <span class="input-xlarge uneditable-input">2</span>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Actividad</label>
                                          <div class="controls">
                                          <input class="input-xlarge " id="focusedInput" type="text" value="plan Saga">
                                          </div>
                                        </div>
                                        
                                        <div class="control-group warning">
                                          <label class="control-label" for="inputError">Fecha de inicio</label>
                                          <div class="controls">
                                            <input type="text" id="inputError" value="12-12-2021">
                                            <span class="help-inline"></span>
                                          </div>
                                        </div>
                                        <div class="control-group error">
                                          <label class="control-label" for="inputError">Fecha de entrega</label>
                                          <div class="controls">
                                            <input type="text" id="inputError" value="07-01-2022">
                                            <span class="help-inline"></span>
                                          </div>
                                        </div>
                                        <div class="control-group success">
                                          <label class="control-label" for="inputError">Nombre del proyecto</label>
                                          <div class="controls">
                                            <input type="text" id="inputError"value="star up">
                                            <span class="help-inline">Prioritario</span>
                                          </div>
                                        </div>
                                        <div class="control-group success">
                                          <label class="control-label" for="selectError">Fases</label>
                                          <div class="controls">
                                            <select id="selectError" value="fase 1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                             
                                            </select>
                                            <span class="help-inline">Marcar</span>
                                          </div>
                                        </div>
                                        
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                     <div class="row-fluid">
                        
                        <!-- /block -->
                    </div>

                     <!-- wizard -->
                    <div class="row-fluid section">
                        
                    </div>
	            <!-- /wizard -->

                    

                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Geysson Lopez 2021</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

	<script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
        
	<script src="assets/scripts.js"></script>
        <script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>
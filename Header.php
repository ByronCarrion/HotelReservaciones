<?php
include "Meta.php";
 ?>

<header class="">

      <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="bannerprincipal">
        <div class="container-fluid" >
          <div class="navbar-header">
            <a class="navbar-brand" href="Index.php">Hotel Reservaciones</a>
            <ul class="nav navbar-nav">
              <li><a href="Alojamiento.php" class="navbar-brand">Alojamientos</a></li>
              <li><a href="ofertas.php" class="navbar-brand">Ofertas</a></li>
              <li> <a href="administracion.php" class="navbar-brand"> Administración</a> </li>
            </ul>
          </div>

          <ul class="nav navbar-nav navbar-right">


            <li> <a   class="navbar-brand" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" data-target="#exampleModal" ></span> Iniciar Sesión</a></li>
            <li><a class="navbar-brand" data-toggle="modal" data-target="#myModalRegister"  ><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
          </ul>
        </div>
      </nav>

          <div id="header">
              <!-- container -->
              <div class="container">
                <!-- row -->
                <div class="row">
                  <!-- LOGO -->
                  <div class="col-md-2">
                    <div class="header-logo">
                      <a href="#" class="logo">
                        <img src="./img/logo1.jpg" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="col-md-10">
                    <div class="header-search">
                      <form>



                                <div class='col-sm-4'>
                                    <div class="form-group">
                                        <div class='input-group date' id=''>
                                            <input type='text' class="form-control" name="datefilter" value="DD/MM/YYYY"   />
                                            <span class="input-group-addon"  >
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>


                                </div>
                                <div class='col-sm-4'>
                                    <div class="form-group">
                                        <div class='input-group date' id=''>
                                            <input type='text' class="form-control" placeholder="Motivo"  />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-globe"></span>
                                            </span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date' id=''>
                                                <input type='number' class="form-control" placeholder="Numero habitaciones"  />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-asterisk"></span>
                                                </span>
                                            </div>
                                        </div>
  </div>




                    </form>



    </div>
</div>
</div>
</div>        <!-- /SEARCH BAR -->

                  <!-- ACCOUNT -->



        </header>

        <section>
          <form class="" method="post">

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                	  <div class="modal-dialog">
            				<div class="loginmodal-container">
                      	<div class="imgcontainer" >
                           <img src="img/logo1.jpg" alt="Avatar" class="avatar">
                        </div>
            					<h1>Iniciar Sesión </h1><br>
                      <form action="">
                         <div class="form-group">
                             <label for="user">Usuario:</label>
                             <input type="text" class="form-control" id="user" name="user" required>
                         </div>
                         <div class="form-group">
                             <label for="pwd">Contraseña:</label>
                             <input type="password" class="form-control" id="pwd" name="pwd" required>
                         </div>
                         <div class="form-group">
                             <input class="btn btn-primary" type="submit" value="Iniciar Sesión">
                         </div>
                     </form>

            				  <div class="login-help">

            				  </div>
            				</div>
            			</div>
            		  </div>
          </form>

        </section>
        <section>
          <form class="" method="post">

            <div class="modal fade" id="myModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                	  <div class="modal-dialog">
            				<div class="loginmodal-container">
                      	<div class="imgcontainer" >
                           <img src="img/logo1.jpg" alt="Avatar" class="avatar">
                        </div>
            					<h1>Registrarse en el guayon </h1><br>
                      <form action="">
                        <div class="control-group">
            <label class="control-label" for="Email">Email:</label>
            <div class="controls">
              <input id="Email" name="Email" class="form-control" type="text" placeholder="Example@gmail.com" class="input-large" required="">
            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="userid">Usuario:</label>
            <div class="controls">
              <input id="userid" name="userid" class="form-control" type="text" placeholder="username" class="input-large" required="">
            </div>
          </div>

          <!-- Password input-->
          <div class="control-group">
            <label class="control-label" for="password">Contraseña:</label>
            <div class="controls">
              <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
              <em>1-8 Characters</em>
            </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
            <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
            <div class="controls">
              <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
            </div>
          </div>
          <div class="form-group">
              <input class="btn btn-success" type="submit" value="Iniciar Sesión">
          </div>
                     </form>

            				  <div class="login-help">

            				  </div>
            				</div>
            			</div>
            		  </div>
          </form>
        </section>
<script type="text/javascript">
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
      cancelLabel: 'Clear'
      }
  });
  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
</script>

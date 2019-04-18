<?php
include "Meta.php";
 ?>

<header class="">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="bannerprincipal">
        <div class="container-fluid" >
          <div class="navbar-header">
            <a class="navbar-brand" href="Index.php">Hotel Reservaciones</a>
          </div>
          <ul class="nav navbar-nav">

            <li><a href="Alojamiento.php">Alojamientos</a></li>
            <li><a href="ofertas.php">Ofertas</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">


            <li> <a  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" data-target="#exampleModal" ></span> Iniciar Sesión</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
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

        </header>
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

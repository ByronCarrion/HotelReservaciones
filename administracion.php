<?php

include "Header.php";
include "Meta.php";
 ?>
<article class="">

<section class="imgcontainer">

  <div class="col-lg-2">
        <div class="list-group" >
            <a href="#" class="list-group-item list-group-item-action active">
              Gestionar datos
            </a>
            <a href="gestionaradminis.php" class="list-group-item list-group-item-action">Gestionar  administradores
            </a>
            <a href="GestionarReservaciones.php" class="list-group-item list-group-item-action ">Gestionar reservaciones
            </a>
            <a href="GestionarUsuarios.php" class="list-group-item list-group-item-action "> Gestionar usuarios
            </a>
            <a href="#" class="list-group-item list-group-item-action "> Ingresar Reservaciones
            </a>
          </div>
</div>
<div class="col-lg-10">

  <?php
  include "Calendario/index.php"
  ?>
</div>
</section>


<section>
  <div class="col-lg-6">


  </div>
</section>

</article>

<?php include('header.php') ?>
<section class="crear_invitacion">
  <div class="container relative">
    <h2>Crear invitación</h2>
      <div class="row">
          <div class="col-sm-12 col-lg-6">
              <div class="diseno_invitacion">
                  <div class="datos_invitado">
                    <h4>nombre</h4>
                    <h4>apodo</h4>
                  </div>
                 
                  <!-- imagen de la pareja -->
                  <img id="img_pareja" src="https://api.fnkr.net/testimg/160x100/00CED1/FFF/?text=160x100">

                  <div id="fondo1" class="fondo1 hide"></div>
                  <div id="fondo2" class="fondo2 hide"></div>
                  <div id="fondo3" class="fondo3 hide"></div>
                  <div id="fondo4" class="fondo4 hide"></div>

                  <p id="texto0" class="texto_redaccion">Selecciona el tipo de redacción para tu invitación y un diseño.</p>
          
                  <p id="ludico" class="texto_redaccion hide">Lúdico. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, odio! </p>

                   <p id="formal" class="texto_redaccion hide">Formal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea architecto nulla officiis sapiente optio repudiandae cupiditate error, ut tempora. Porro!</p>

                   <p id="amigos" class=" texto_redaccion hide ">Amigos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis reiciendis ex ut et, iusto quam adipisci odio veniam? Commodi iste excepturi nobis dolores reiciendis est, ab autem quasi eligendi fugit.</p>

                   <p id="elegante" class=" texto_redaccion hide ">Elegante. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa incidunt impedit quis vitae numquam, placeat aspernatur saepe. Provident sed molestias rem autem nobis ea optio mollitia voluptatum ullam cum animi quas reprehenderit vero beatae quos reiciendis rerum sapiente fugit, repudiandae, facere, enim minima excepturi aliquam! Incidunt fugit esse quas.</p>
              </div><!-- diseño invitacion -->

          </div>
          <div class="col-sm-12 col-lg-6">
                <div class="botones_diseno">
                  <h3>selecciona tipo de diseño</h3>
                  <div class="row">
                    <div class="col-xs-6 col-sm-3">
                      <a id="fondo1"  href="">
                          <img class="img-responsive img_tipo_fondo" src="https://api.fnkr.net/testimg/240x240/00CED1/FFF/?text=img+placeholder">
                      </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                      <a id="fondo2"  href="">
                          <img class="img-responsive img_tipo_fondo" src="https://api.fnkr.net/testimg/240x240/00CED1/FFF/?text=img+placeholder">
                      </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                      <a id="fondo3"  href="">
                          <img class="img-responsive img_tipo_fondo" src="https://api.fnkr.net/testimg/240x240/00CED1/FFF/?text=img+placeholder">
                      </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                      <a id="fondo4"  href="">
                          <img class="img-responsive img_tipo_fondo" src="https://api.fnkr.net/testimg/240x240/00CED1/FFF/?text=img+placeholder">
                      </a>
                    </div>
                  </div>
                </div><!-- botonera_select_diseno -->

                <div class="botones_redaccion">
                  <h3>selecciona tipo de redacción</h3>
                    <div class="row">
                      <div class="col-xs-6 col-sm-3">
                          <a id="ludico" href="" class="btn btn-default btn_negro_sm btn_redaccion">lúdico</a>
                      </div>
                       <div class="col-xs-6 col-sm-3">
                          <a id="formal" href="" class="btn btn-default btn_negro_sm btn_redaccion ">formal</a>
                      </div>
                       <div class="col-xs-6 col-sm-3">
                          <a id="amigos" href="" class="btn btn-default btn_negro_sm btn_redaccion ">amigos</a>
                      </div>
                       <div class="col-xs-6 col-sm-3">
                          <a id="elegante" href="" class="btn btn-default btn_negro_sm btn_redaccion ">elegante</a>
                      </div>
                    </div>

                </div><!-- botones_redaccion -->

          </div>



      </div>
      <div class="novios2"></div>
  </div>

  


</section><!-- crear invitacion -->
   <div class="container_btn_al_centro">
     <a href="javascript:void(0);" class="btn btn-default btn_lg">siguiente</a>
  </div>

<?php include('footer.php') ?>



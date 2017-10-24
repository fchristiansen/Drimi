<?php include('header.php') ?>

    <section class="crear_lista">
      <div class="container">
          <h2>Lista de invitados</h2>
           <form id="form_crear_lista" class="form-inline text-center">
           <!--  <a href="javascript:void(0);" class="btn btn-default btn_lg">subir excel</a> -->
           <div class="row">
             <div class="form-group pull-right">
               <label class="btn btn-default btn_sm">
                   Subir excel <input type="file" hidden>
               </label>
             </div>
           </div>
              
          <div class="row">
              <div class="wrap_invitado">
                <div class="box_invitado clearfix">
                 <!--    <div class="num_invitacion">1</div> -->
                 <div class="col-sm-1">
                   <span class="fa-stack fa-lg numero_invitado">
                         <i class="fa fa-inverse" >1</i>
                     </span>
                 </div>
                  <div class="col-sm-5">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="col-sm-5">
                      <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-sm-1"></div>
                </div> <!-- box invitado -->
                  <div class="divider"></div>
              </div>

              <div class="wrap_invitado">
                <div class="box_invitado clearfix">
                 <!--    <div class="num_invitacion">1</div> -->
                 <div class="col-sm-1">
                   <span class="fa-stack fa-lg numero_invitado">
                         <i class="fa fa-inverse" >2</i>
                     </span>
                 </div>
                  <div class="col-sm-5">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="col-sm-5">
                      <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-sm-1"></div>
                </div> <!-- box invitado -->
                  <div class="divider"></div>
              </div>

              <div class="wrap_invitado">
                <div class="box_invitado clearfix">
                 <!--    <div class="num_invitacion">1</div> -->
                 <div class="col-sm-1">
                   <span class="fa-stack fa-lg numero_invitado">
                         <i class="fa fa-inverse" >3</i>
                     </span>
                 </div>
                  <div class="col-sm-5">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="col-sm-5">
                      <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-sm-1"></div>
                </div> <!-- box invitado -->
             
              </div>
                <button type="submit" class="btn btn-default btn_sm pull-right">enviar nuevas invitaciones</button>
                <div class="clear"></div>
                <button type="button" class="btn btn-default btn-circle btn-xl center-block">+</button>
          </div> <!-- // row  -->
             
          </form>
            
           
      </div><!-- container -->
              <div class="container_btn_al_centro">
                <a href="javascript:void(0);" class="btn btn-default btn_lg">siguiente</a>
             </div>
             <div class="pareja"></div>
    </section> <!-- // crear_lista -->

<?php include('footer.php') ?>



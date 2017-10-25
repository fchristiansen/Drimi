<?php get_header(); ?>
<!-- Modal Editar nombre -->
<div class="modal fade modal_edicion" id="editaNombre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->          <h3 class="modal-title" id="myModalLabel">Editar nombre</h3>
        </div>
        <div class="modal-body">
            <input type="text" class="form-control" id="nombre">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn_sm btn_cancel" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary btn_sm">Cambiar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal editar texto -->
<div class="modal fade modal_edicion" id="editaTexto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="">
          <div class="modal-header">
<!--             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 -->            <h3 class="modal-title" id="myModalLabel">Editar Texto</h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
               <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn_sm btn_cancel" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary btn_sm">Cambiar</button>
          </div>
       </form>
    </div>
  </div>
</div>

  <section class="perfil">
    <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6">
                    <div class="resumen_perfil">
                          <a href="javascript:void(0);" class="btn btn-default btn_sm btn_editar" data-toggle="modal" data-target="#editaNombre" >editar</a>
                      <h3>Juan y Paula</h3>
                      <div class="box_img">
                          <!-- 720 x 440 -->
                              <div id="old_img" style="background-image:url(assets/img/old_img.jpg);"> </div>
<!--                           <img id="old_img" class="img-responsive" src="https://api.fnkr.net/testimg/720x440/00CED1/FFF/?text=720x440">
 -->
                          <div id='new_img'></div>
                        <!--   <a href="javascript:void(0);" class="btn btn-default btn_sm btn_editar pull-right">editar</a> -->
                          <div class="form-group pull-right">
                            <label class="btn btn-default btn_sm btn_editar">
                              Cambiar imagen <input type='file' id='getval' hidden>

                            </label>
                          </div>
                      </div><!-- box img -->
                      <h4>Llevamos aportado</h4>
                      <ul>
                        <li>120 ladrillos</li>
                        <li>15 invitados</li>
                      </ul>
                    </div><!-- resumen_perfil -->
              </div>
              <div class="col-sm-12 col-md-6">
                  <div class="descripcion">
                    <h3>Nuestro sueño</h3>
                    <p>Lorem ipsum dolor sit amet,consectetur adipisicing
                      elit, sed do eiusmod tempor indicididunt. Lorem ipsum
                      dolor sit amet,consectetur adipisicing elit, sed doeiusmod
                      tempor indicididunt. Lorem ipsum dolor sit amet,consectetur
                      adipisicing elit, sed do eiusmod tempor indicididunt.
                      Lorem ipsum dolor sit amet,consectetur adipisicing elit,
                      sed doeiusmod tempor indicididunt.</p>

                      <a href="javascript:void(0);" class="btn btn-default btn_sm btn_editar pull-right" data-toggle="modal" data-target="#editaTexto">editar</a>
                  </div>

              </div>
          </div>
    </div>
    </section><!-- // perfil -->
    <section class="datos">
      <div class="container-fluid nopad">
          <div class="row no-gutter nomargin height">
                         <div class="col-sm-12 col-md-7 left_side">
                           <div class="container_tabla">
                             <h3>últimos ladrillos recibidos</h3>
                             <table id="tabla_datos" class="table table-condensed">
                                 <thead>
                                   <tr>
                                     <th>De</th>
                                     <th>Fecha</th>
                                     <th>Cantidad</th>
                                     <th>Monto</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                     <td>John</td>
                                     <td>22/11/2017</td>
                                     <td>13</td>
                                     <td>$49.900</td>
                                   </tr>
                                   <tr>
                                     <td>Mary</td>
                                     <td>22/11/2017</td>
                                     <td>13</td>
                                      <td>$49.900</td>
                                   </tr>
                                   <tr>
                                     <td>July</td>
                                     <td>22/11/2017</td>
                                     <td>13</td>
                                      <td>$49.900</td>
                                   </tr>

                                     <tr>
                                     <td>John</td>
                                     <td>22/11/2017</td>
                                     <td>13</td>
                                     <td>$49.900</td>
                                   </tr>
                                   <tr>
                                     <td>Mary</td>
                                     <td>22/11/2017</td>
                                     <td>13</td>
                                      <td>$49.900</td>
                                   </tr>
                                   <tr>
                                     <td>July</td>
                                     <td>22/11/2017</td>
                                     <td>13</td>
                                      <td>$49.900</td>
                                   </tr>
                                 </tbody>
                               </table>
                             <div class="container_button clearfix text-center">
                                <a href="javascript:void(0);" class="btn btn-default btn_lg">ver todos</a>
                             </div>
                           </div><!-- // container tabla -->
                         </div>
                         <div class="col-sm-12 col-md-5 right_side">
                             <div class="container_total">
                                 <div class="content_total">
                                  <div class="total">
                                    <h3> total recibido</h3>
                                    <p>120 ladrillos</p>
                                      <div class="box_amarillo">
                                          <p>$1.500.000</p>
                                      </div>
                                  </div>

                                 </div>
                             </div>
                         </div>
                   </div>
      </div>
    </section> <!-- // datos -->

<?php get_footer(); ?>



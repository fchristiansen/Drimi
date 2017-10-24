<?php include('header.php') ?>
 <form>
    <section class="crear_matrimonio ">
      <div class="container">
          <h2>Crear perfil de matrimonio</h2>
           <div class="row">
           
                <div class="visible-md visible-lg novia"> </div>
                <div class="visible-md visible-lg novio2"> </div>
                <button id="bt_cambio1" class="btn btn-default btn_sm visible-md visible-lg">cambiar icono</button>
           
                <div class="visible-md visible-lg novio"> </div> 
                <div class="visible-md visible-lg novia2"> </div> 
                <button id="bt_cambio2" class="btn btn-default btn_sm visible-md visible-lg">cambiar icono</button>
           
                <div class="col-sm-6">
                  
                  <div class="form-group">
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre Novi@">
                    </div>
                   <div class="form-group">
                      <input type="text" class="form-control" id="apellido" placeholder="Apellido Novi@">
                    </div>
                   <div class="form-group">
                      <input type="text" class="form-control" id="apodo" placeholder="Apodo Novi@">
                    </div>
                   <div class="form-group">
                      <input type="text" class="form-control" id="date" placeholder="Fecha de Matrimonio" onfocus="(this.type='date')">
                    </div>
                </div>

                <div class="col-sm-6">
                     <div class="form-group">
                       <input type="text" class="form-control" id="nombre" placeholder="Nombre Novi@">
                     </div>
                    <div class="form-group">
                       <input type="text" class="form-control" id="apellido" placeholder="Apellido Novi@">
                     </div>
                    <div class="form-group">
                       <input type="text" class="form-control" id="apodo" placeholder="Apodo Novi@">
                     </div>
                    <div class="form-group">
                       <input type="text" class="form-control" id="date" placeholder="Lugar del matrimonio">
                     </div>
                   </div>
                   <div class="col-sm-12 text-center">
                  
                     <div class="box_img_pareja">
                          
                       <div class="box_img center-block clearfix">
                          <h3> Foto de la pareja</h3>
                         <!--   <img class="img-responsive" src="https://api.fnkr.net/testimg/1920x800/00CED1/FFF/?text=img+placeholder"> -->
                           <img id="icon" src="assets/img/ico_rol.png">
                       </div><!-- box_img  -->

                     <button class="btn btn-default btn_sm">subir</button>
                     </div><!-- box_img_pareja -->
                   </div>
           </div>
        </div>
        
    </section><!-- // crear matrimonio -->
    <section class="elige_sueno clearfix">
     <h2>elegir sueño</h2>
    <div class="container-fluid nopad">
      <div class="row  ">
        <div class="suenos clearfix no-gutter">
          <div class="col-sm-12 col-md-4">
                <h4>casa</h4>
              <a id="casa" href="" >
                  <img src="assets/img/casa.png" alt="" class="center-block img-responsive">
              </a>
          </div>
          <div class="col-sm-12 col-md-4">
          <h4>viaje</h4>
              <a id="viaje" href="" class="">
                  <img src="assets/img/viaje.png" alt="" class="center-block img-responsive">
              </a>
          </div>
          <div class="col-sm-12 col-md-4">
          <h4>estudio</h4>
              <a id="estudio" href="" class="mb0">
                  <img src="assets/img/estudio.png" alt="" class="center-block img-responsive">
              </a>
          </div>
        </div>
        <div class="col-sm-12 text-center">
           <button class="btn btn-default btn_lg">siguiente</button>
        </div>
         
      </div>
    </div>

    </section> <!-- //sueños -->

   </form>

<?php include('footer.php') ?>



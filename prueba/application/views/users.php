<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu">
                        <li class="sub-menu active">
                            <a href="javascript:;" class="">
                                <i class="icon_desktop"></i>
                                <span>Secciones</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li class="active"><a class="" href="<?php echo site_url('users/login'); ?>">Usuarios</a></li>
                            </ul>
                        </li>


                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
     <section id="main-content">
         <section class="wrapper">
             <div class="row">
       <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-list-alt"></i> Users</h3>
       </div>
     </div>
             <div class="row">
                 <div class="col-lg-12">
                   <!-- busqueda
                   <?php //$buscar = $_POST['buscar']; ?> -->
                   <?php $attributes = array("name" => "searchform");
                   echo form_open("users/search", $attributes);?>
                       <div class="rendered-form">
                         <div class="fb-text form-group field-buscar">
                             <input type="text" value="" placeholder="Buscar" id="buscar" class="form-control" name="buscar">
                         </div>
                         <div class="fb-button form-group field-button-buscar">
                           <button type="submit" class="btn btn" name="button-buscar" value="Buscar" style="warning" id="button-buscar">Buscar Usuario</button>
                         </div>
                       </div>
                    <?php echo form_close(); ?>
                     <!-- end busqueda -->
                     <!--notification start-->
                     <section class="panel">
                         <header class="panel-heading">
                           Tabla de Usuarios
                         </header>
                         <div class="panel-body">
                           <table class="table table-striped table-advance table-hover">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Nombre</th>
                                   <th>Correo</th>
                                   <th>Rol</th>
                                   <th>Status</th>
                                   <th>Acciones</th>
                               </tr>
                             </thead>
                             <tbody>
                                <?php foreach ($users as $user_item): ?>
                                  <tr>
                                      <td><?php echo $user_item['id']; ?></td>
                                      <td><?php echo $user_item['nombre']; ?></td>
                                      <td><?php echo $user_item['correo']; ?></td>
                                      <td><?php if($user_item['rol'] == 1){
                                        echo "administrador";
                                      } else {
                                        echo "editor";
                                      }?></td>
                                      <td><?php if($user_item['status'] == 1){
                                        echo "on";
                                      } else {
                                        echo "off";
                                      }?></td>
                                      <td><div class="btn-group">
                                     <a class="btn btn-primary" href="<?php echo site_url("users/edit/".$user_item['id']); ?>"><i class="icon_pencil"></i></a>
                                     <a class="btn btn-danger" href="<?php echo site_url("users/delete/".$user_item['id']); ?>" onclick="if(confirm('Esta seguro que desea eliminar este registro?') == false){return false;}"><i class="icon_close_alt2"></i></a>
                                 </div></td>
                                  </tr>
                                  <?php endforeach; ?>
                                </tbody>
                             </table>

                   <!--pagination start-->
                       <section class="panel">
                         <div class="panel-body">
                             <div>
                               <ul class="pagination pagination-lg">
                           <?php echo $this->pagination->create_links(); ?>
                         </ul>
                         </div>
                       </div>
                   </section>
                   <!--pagination end-->


                             <a class="btn btn-primary" href="<?php echo site_url('users/register'); ?>" title="Bootstrap 3 themes generator"><span class="icon_profile"></span> Agregar Usuario</a>
                         </div>
                     </section>
                     <!--notification end-->



                 </div>

             </div>
         </section>
     </section>
     <div class="text-right">
           <div class="credits">

           </div>
       </div>
     </section>
     <!-- container section end -->

     <!-- javascripts -->
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <!-- nice scroll -->
     <script src="../js/jquery.scrollTo.min.js"></script>
     <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
     <!-- gritter -->

     <!-- custom gritter script for this page only-->
     <script src="../js/gritter.js" type="text/javascript"></script>
     <!--custome script for all page-->
     <script src="../js/scripts.js"></script>




     </body>
     </html>

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
         <h3 class="page-header"><i class="fa fa-list-alt"></i> User Register</h3>
       </div>
     </div>
             <div class="row">
                 <div class="col-lg-12">
                   <!--form -->
<p>
     <?php echo $this->session->flashdata('verify_msg'); ?>
 </p>

 <h4>User Registration Form</h4>

 <?php $attributes = array("name" => "registrationform");
 echo form_open("users/register", $attributes);?>
 <table>
     <tr>
         <td><label for="nombre">Nombre</label></td>
         <td><input name="nombre" placeholder="Nombre" type="text" value="<?php echo set_value('nombre'); ?>" /> <span style="color:red"><?php echo form_error('nombre'); ?></span></td>
     </tr>
     <tr>
         <td><label for="correo">Correo</label></td><td><input name="correo" placeholder="Correo" type="text" value="<?php echo set_value('correo'); ?>" /> <span style="color:red"><?php echo form_error('correo'); ?></span></td>
     </tr>
     <tr>
         <td><label for="subject">Password</label></td><td><input class="form-control" name="password" placeholder="Password" type="password" /> <span style="color:red"><?php echo form_error('password'); ?></span></td>
     </tr>
     <tr>
         <td><label for="subject">Confirm Password</label></td><td><input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" /> <span style="color:red"><?php echo form_error('cpassword'); ?></span></td>
     </tr>
     <tr>
         <td><label for="rol">Rol</label></td>
         <td>
           <select class="form-control" name="rol" id="rol">
               <option disabled="null" value="0" selected="null">Rol</option>
               <option value="1" id="rol-0">Administrador</option>
               <option value="0" id="rol-1">Editor</option>
             </select>
         </td>
     </tr>
     <tr>
         <td><label for="status">Status</label></td>
         <td>
           <select class="form-control" name="status" id="status">
               <option disabled="null" value="0" selected="null">Status</option>
               <option value="1" id="status-0">ON</option>
               <option value="0" id="status-1">OFF</option>
             </select>
         </td>
     </tr>
     <tr>
         <td></td>
         <td><button name="submit" type="submit">Registrar</button></td>
     </tr>
 </table>
 <?php echo form_close(); ?>
      <!--end form -->
 <p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
 <p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>



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

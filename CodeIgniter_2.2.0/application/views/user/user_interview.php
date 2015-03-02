<?php echo $this->load->view('_inc/header_large');?>

<div class="header-text-large-square-2 header-text-uppercase">
         <h3>Entrevista</h3>
       </div>
     </div>
   </div>

   <div id="content" class="content-large">
     <h3>Marque os dias que tem disponibilidade para a entrevista:</h3>
     <div id="interview">
       <?php echo form_open('usuario/update_account');?>
       <table>
         <?php echo form_open('horario/interview') ?>
         <thead>
         </thead>
         <tbody>
           <tr>
               <td>&nbsp</td>
               <td>25/10</td>
               <td>25/10</td>
               <td>25/10</td>
           </tr>
            <tr>
                <td>08:00</td>
                <td><input type="checkbox" name="name" value=""></td>
                <td><input type="checkbox" name="name" value=""></td>
                <td><input type="checkbox" name="name" value=""></td>
            </tr>
            <tr>
                <td>09:00</td>
                <td><input type="checkbox" name="name" value=""></td>
                <td><input type="checkbox" name="name" value=""></td>
                <td><input type="checkbox" name="name" value=""></td>
            </tr>
            <tr>
                <td>10:00</td>
                <td><input type="checkbox" name="name" value=""></td>
                <td><input type="checkbox" name="name" value=""></td>
                <td><input type="checkbox" name="name" value=""></td>
            </tr>
         </tbody>
       </table>
       <?php echo form_close() ?>
     </div>
     <a href="#"><h5>Prefiro responder posteriormente</h5></a>
   </div>

    <?php echo $this->load->view('_inc/footer') ?>

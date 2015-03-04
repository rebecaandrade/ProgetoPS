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
         <?php foreach ($weeks as $week) {
          
          ?>
         <tbody>

           <tr>
               <td>&nbsp</td>
               <?php foreach ($week as $date) {
                ?>
               <td><?php echo $date['day'].'/'.$date['month'] ?></td>
               <?php }?>
           </tr>
            <tr>
                <td>08:00 - 9:00</td>
                <?php foreach ($week as $date) {
                  if($date['valid_date']){
                ?>
                <td><input type="checkbox" name="name" value="">&nbsp</td>
                <?php 
                  }else{ ?>
                    <td>&nbsp</td>
                  <?php
                  }
                }
                ?>
            </tr>
            <tr>
                <td>09:00 - 10:00</td>
                <?php foreach ($week as $date) {
                  if($date['valid_date']){
                ?>
                <td><input type="checkbox" name="name" value="">&nbsp</td>
                <?php 
                  }else{ ?>
                    <td>&nbsp</td>
                  <?php
                  }
                }
                ?>
            </tr>
            <tr>
                <td>10:00 - 11:00</td>
                <?php foreach ($week as $date) {
                  if($date['valid_date']){
                ?>
                <td><input type="checkbox" name="name" value="">&nbsp</td>
                <?php 
                  }else{ ?>
                    <td>&nbsp</td>
                  <?php
                  }
                }
                ?>
            </tr>
            <tr>
                <td>11:00 - 12:00</td>
                <?php foreach ($week as $date) {
                  if($date['valid_date']){
                ?>
                <td><input type="checkbox" name="name" value="">&nbsp</td>
                <?php 
                  }else{ ?>
                    <td>&nbsp</td>
                  <?php
                  }
                }
                ?>
            </tr>
            <tr>
                <td>14:00 - 15:00</td>
                <?php foreach ($week as $date) {
                  if($date['valid_date']){
                ?>
                <td><input type="checkbox" name="name" value="">&nbsp</td>
                <?php 
                  }else{ ?>
                    <td>&nbsp</td>
                  <?php
                  }
                }
                ?>
            </tr>
            <tr>
                <td>15:00 - 16:00</td>
                <?php foreach ($week as $date) {
                  if($date['valid_date']){
                ?>
                <td><input type="checkbox" name="name" value="">&nbsp</td>
                <?php 
                  }else{ ?>
                    <td>&nbsp</td>
                  <?php
                  }
                }
                ?>
            </tr>
            <tr>
                <td>16:00 - 17:00</td>
                <?php foreach ($week as $date) {
                  if($date['valid_date']){
                ?>
                <td><input type="checkbox" name="name" value="">&nbsp</td>
                <?php 
                  }else{ ?>
                    <td>&nbsp</td>
                  <?php
                  }
                }
                ?>
            </tr>
            <tr>
                <td>17:00 - 18:00</td>
                <?php foreach ($week as $date) {
                  if($date['valid_date']){
                ?>
                <td><input type="checkbox" name="name" value="">&nbsp</td>
                <?php 
                  }else{ ?>
                    <td>&nbsp</td>
                  <?php
                  }
                }
                ?>
            </tr>
         </tbody>
         <?php } ?>
       </table>
       <?php echo form_close() ?>
     </div>
     <a href="#"><h5>Prefiro responder posteriormente</h5></a>
   </div>

    <?php echo $this->load->view('_inc/footer') ?>

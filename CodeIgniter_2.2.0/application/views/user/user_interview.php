<?php echo $this->load->view('_inc/header_boot') ?>
                <div class="header-text-aside header-uppercase">
                    <p>
                    HORÁRIO ENTREVISTA
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->load->view('_inc/nav_bar')?>
    <div class="row">
        <h3>Marque os horarios desses dias que você tem disponibilidade para a entrevista:</h3><br />
        <div id="interview" class="col-md-10 form-column">
          <table class="table">
            <?php echo form_open('horario/save_interview_hours') ?>
            <thead>
            </thead>
            <tbody>
             <?php foreach ($weeks as $week) {?>
              <tr>
                  <td>&nbsp</td>
                  <?php foreach ($week as $date) {
                   ?>
                  <td><?php echo $date['day'].'/'.$date['month'] ?></td>
                  <?php }?>
              </tr>

              <tr>
               <td>&nbsp</td>
                <?php foreach ($week as $date) {
                   ?>
                  <td><?php echo $date['day_name'] ?></td>
                  <?php }?>
              </tr>
               <tr>
                   <td>08:00 - 09:00</td>
                   <?php foreach ($week as $date) {
                     if($date['id_date']){
                   ?>
                   <td><input type="checkbox" name="result[]" value=<?php echo $date['year'].'-'.$date['month'].'-'.$date['day'].'/8'.'/'.$date['id_date'] ?>
                   <?php if (isset($date['hours']['08'])) {
                     echo "checked";
                   }
                   ?>
                   >&nbsp</td>
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
                     if($date['id_date']){
                   ?>
                   <td><input type="checkbox" name="result[]" value=<?php echo $date['year'].'-'.$date['month'].'-'.$date['day'].'/9'.'/'.$date['id_date'] ?>
                   <?php if (isset($date['hours']['09'])) {
                     echo "checked";
                   }
                   ?>
                   >&nbsp</td>
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
                     if($date['id_date']){
                   ?>
                   <td><input type="checkbox" name="result[]" value=<?php echo $date['year'].'-'.$date['month'].'-'.$date['day'].'/10'.'/'.$date['id_date'] ?>
                   <?php if (isset($date['hours']['10'])) {
                     echo "checked";
                   }
                   ?>
                   >&nbsp</td>
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
                     if($date['id_date']){
                   ?>
                   <td><input type="checkbox" name="result[]" value=<?php echo $date['year'].'-'.$date['month'].'-'.$date['day'].'/11'.'/'.$date['id_date'] ?>
                   <?php if (isset($date['hours']['11'])) {
                     echo "checked";
                   }
                   ?>
                   >&nbsp</td>
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
                     if($date['id_date']){
                   ?>
                   <td><input type="checkbox" name="result[]" value=<?php echo $date['year'].'-'.$date['month'].'-'.$date['day'].'/14'.'/'.$date['id_date'] ?>
                   <?php if (isset($date['hours']['14'])) {
                     echo "checked";
                   }
                   ?>
                   >&nbsp</td>
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
                     if($date['id_date']){
                   ?>
                   <td><input type="checkbox" name="result[]" value=<?php echo $date['year'].'-'.$date['month'].'-'.$date['day'].'/15'.'/'.$date['id_date'] ?>
                   <?php if (isset($date['hours']['15'])) {
                     echo "checked";
                   }
                   ?>
                   >&nbsp</td>
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
                     if($date['id_date']){
                   ?>
                   <td><input type="checkbox" name="result[]" value=<?php echo $date['year'].'-'.$date['month'].'-'.$date['day'].'/16'.'/'.$date['id_date'] ?>
                   <?php if (isset($date['hours']['16'])) {
                     echo "checked";
                   }
                   ?>
                   >&nbsp</td>
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
                     if($date['id_date']){
                   ?>
                   <td><input type="checkbox" name="result[]" value=<?php echo $date['year'].'-'.$date['month'].'-'.$date['day'].'/17'.'/'.$date['id_date'] ?>
                   <?php if (isset($date['hours']['17'])) {
                     echo "checked";
                   }
                   ?>
                   >&nbsp</td>
                   <?php
                     }else{ ?>
                       <td>&nbsp</td>
                     <?php
                     }
                   }
                   ?>
               </tr>
            <?php } ?>

            </tbody>
          </table>
          <?php echo form_close() ?>
        </div>
    </div
<?php echo $this->load->view('_inc/footer_boot') ?>

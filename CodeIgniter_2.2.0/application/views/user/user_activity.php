<?php echo $this->load->view('_inc/header_large') ?>
<?php echo $this->load->view('_inc/nav_bar')?>

        <div class="header-text-large-square-2 header-text-uppercase">
          <p>
            presença nas atividades
          </p>
        </div>
      </div>
    </div>
    <div id="content" class="content-large">
      <h3>Selecione os horários que participará da palestras institucional:</h3>

      <?php echo form_open('horario/save_palestra_dinamica_hours') ?>
      <div class="activity-column-2">
        <h5>Palestra Institucional</h5>

        <?php $palestra_1 = explode(':', $palestra_hours['palestra_1']); ?>
        <label class="label-radio"><input type="radio" id="radio1" name="palestra" value=<?php echo $palestra_1[0].':'.$palestra_1[1].'/'.$palestra->id_data.'/'.$palestra->data;
          if(!empty($palestra_marked) && $palestra_hours['palestra_1'] == $palestra_marked[0]->tempo){
            echo " checked";
          }
        ?>>
        <?php
        echo $palestra_1[0].'h'.$palestra_1[1].'min';
        ?>
        </label><br />
        <br />
        <?php $palestra_2 = explode(':', $palestra_hours['palestra_2']); ?>
        <label class="label-radio"><input type="radio" id="radio2" name="palestra" value=<?php echo $palestra_2[0].':'.$palestra_2[1].'/'.$palestra->id_data.'/'.$palestra->data;
        if(!empty($palestra_marked) && $palestra_hours['palestra_2'] == $palestra_marked[0]->tempo){
            echo " checked";
          }
        ?>>
        <?php
        echo $palestra_2[0].'h'.$palestra_2[1].'min';
        ?>
        </label>

        <p>
      	Não poderá comparecer em<br /> nenhum destes horários?
        </p>
      </div>

      <div class="activity-column-2">
        <h5>Dinâmica em Grupo</h5>
          <?php $dinamica_1 = explode(':', $dinamica_hours['dinamica_1']); ?>
          <label class="label-radio"><input type="radio" id="radio3" name="dinamica" value=<?php echo $dinamica_1[0].':'.$dinamica_1[1].'/'.$dinamica->id_data.'/'.$dinamica->data;
            if(!empty($dinamica_marked) && $dinamica_hours['dinamica_1'] == $dinamica_marked[0]->tempo){
            echo " checked";
          }
          ?>>
          <?php
          echo $dinamica_1[0].'h'.$dinamica_1[1].'min';
          ?>
          </label class="label-radio"><br />
          <?php $dinamica_2 = explode(':', $dinamica_hours['dinamica_2']); ?>
          <label class="label-radio"><input type="radio" id="radio4" name="dinamica" value=<?php echo $dinamica_2[0].':'.$dinamica_2[1].'/'.$dinamica->id_data.'/'.$dinamica->data;
          if(!empty($dinamica_marked) && $dinamica_hours['dinamica_2'] == $dinamica_marked[0]->tempo){
            echo " checked";
          }
          ?>>
          <?php
          echo $dinamica_2[0].'h'.$dinamica_2[1].'min';
          ?>
          </label>
      </div>
      <div class="button-box">
          <input type="submit" class="button b-dark-accept" value="enviar">
      </div>
      <?php echo form_close() ?>
    <a href="#"><h3>Prefiro responder posteriormente</h3></a>
    </div>

<?php echo $this->load->view('_inc/footer') ?>

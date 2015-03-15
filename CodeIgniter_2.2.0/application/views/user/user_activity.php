<?php echo $this->load->view('_inc/header_boot') ?>
                <div class="header-text-aside header-uppercase">
                    <p>
                    PRESENÇA NAS ATIVIDADES
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->load->view('_inc/nav_bar')?>
    <div id="activity" class="row">
        <div class="col-md-4 col-md-offset-2 form-group form-column">
            <?php echo form_open('horario/save_palestra_dinamica_hours') ?>
              <h3>PALESTRA INSTITUCIONAL</h3>
              <br />
              <?php $palestra_1 = explode(':', $palestra_hours['palestra_1']); ?>
              <input type="radio" class="form-control" id="radio1" name="palestra" value=<?php echo $palestra_1[0].':'.$palestra_1[1].'/'.$palestra->id_data.'/'.$palestra->data;
                if(!empty($palestra_marked) && $palestra_hours['palestra_1'] == $palestra_marked[0]->tempo){
                  echo " checked";
                }
              ?>>
              <label class="label-radio" for="radio1">
              <?php
              echo $palestra_1[0].'h'.$palestra_1[1].'min';
              ?>
              </label><br />
              <?php $palestra_2 = explode(':', $palestra_hours['palestra_2']); ?>
              <input type="radio" class="form-control" id="radio2" name="palestra" value=<?php echo $palestra_2[0].':'.$palestra_2[1].'/'.$palestra->id_data.'/'.$palestra->data;
              if(!empty($palestra_marked) && $palestra_hours['palestra_2'] == $palestra_marked[0]->tempo){
                  echo " checked";
                }
              ?>>
              <label class="label-radio"  for="radio2">
              <?php
              echo $palestra_2[0].'h'.$palestra_2[1].'min';
              ?>
              </label>
        </div>

        <div class="col-md-4 form-group form-column">
            <h3>DINÂMICA EM GRUPO</h3>
            <br />
              <?php $dinamica_1 = explode(':', $dinamica_hours['dinamica_1']); ?>
              <input type="radio" class="form-control" id="radio3" name="dinamica" value=<?php echo $dinamica_1[0].':'.$dinamica_1[1].'/'.$dinamica->id_data.'/'.$dinamica->data;
              if(!empty($dinamica_marked) && $dinamica_hours['dinamica_1'] == $dinamica_marked[0]->tempo){
                echo " checked";
                }
                ?>>
              <label class="label-radio" for="radio3">
              <?php
              echo $dinamica_1[0].'h'.$dinamica_1[1].'min';
              ?>
              </label class="label-radio"><br />
              <?php $dinamica_2 = explode(':', $dinamica_hours['dinamica_2']); ?>
              <input type="radio" class="form-control" id="radio4" name="dinamica" value=<?php echo $dinamica_2[0].':'.$dinamica_2[1].'/'.$dinamica->id_data.'/'.$dinamica->data;
          if(!empty($dinamica_marked) && $dinamica_hours['dinamica_2'] == $dinamica_marked[0]->tempo){
            echo " checked";
          }
          ?>>
              <label class="label-radio" for="radio4">
              <?php
              echo $dinamica_2[0].'h'.$dinamica_2[1].'min';
              ?>
              </label>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input type="submit" class="btn btn-dark-accept center-block" value="">
            <?php if($this->session->userdata('after_sign_up')){ ?>
              <a id="button-prefiro-responder-depois" href="<?php echo base_url();?>index.php/usuario/home">
                Prefiro responder depois.</a>
            <?php } ?>
        <?php echo form_close() ?>
        </div>
    </div>
<?php echo $this->load->view('_inc/footer_boot') ?>

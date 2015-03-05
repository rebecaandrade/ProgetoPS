<?php echo $this->load->view('_inc/header_large') ?>

        <div class="header-text-large-square-2 header-text-uppercase">
          <p>
            presença nas atividades
          </p>
        </div>
      </div>
    </div>
    <div id="content" class="content-large">
      <h3>Selecione os horários que participará da palestras institucional:</h3>

      <div class="activity-column-2">
        <h5>Palestra Institucional</h5>

        <label class="radio"><input type="radio" id="radio1" name="palestra" value="12">12h30min</label><br />
        <br />
        <label class="radio"><input type="radio" id="radio2" name="palestra" value="18">18h00min</label>

        <p>
      	Não poderá comparecer em<br /> nenhum destes horários?
        </p>
      </div>

      <div class="activity-column-2">
        <h5>Dinâmica em Grupo</h5>

          <label><input type="radio" id="radio3" name="dinamica" value="12">12h30min</label><br />

          <label><input type="radio" id="radio4" name="dinamica" value="18">18h00min</label>
      </div>

    <a href="#"><h3>Prefiro responder posteriormente</h3></a>
    </div>

<?php echo $this->load->view('_inc/footer') ?>

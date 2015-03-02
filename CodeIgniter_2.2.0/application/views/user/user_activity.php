<?php echo $this->load->view('_inc/header_large') ?>

        <div class="header-text-large-square-2 header-text-uppercase">
          <h3>presença nas atividades</h3>
        </div>
      </div>
    </div>
    <div id="content" class="content-large">
      <h3>Selecione os horários que participará da palestras institucional:</h3>

      <div class="activity-column-2">
        <h5><span class="h7">Palestra Institucional</span></h5>

        <label><input type="radio" id="radio1" name="palestra_12" value="">12h30min</label><br />

        <label><input type="radio" id="radio2" name="palestra_18" value="">18h00min</label>

        <p>
      	Não poderá comparecer em<br /> nenhum destes horários?
        </p>
      </div>

      <div class="activity-column-2">
        <h5>Dinâmica em Grupo</h5>

          <label><input type="radio" id="radio3" name="dinamica_12" value="">12h30min</label><br />

          <label><input type="radio" id="radio4" name="dinamica_18" value="">18h00min</label>
      </div>

    <a href="#"><h3>Prefiro responder posteriormente</h3></a>
    </div>

<?php echo $this->load->view('_inc/footer') ?>

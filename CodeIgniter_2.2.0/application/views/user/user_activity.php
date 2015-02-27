<?php echo $this->load->view('_inc/header_big') ?>

<div id="subtitle-logo">
  <span class="subtitle-url"><h2>Presença nas Atividades</h2></span>
</div>
</div>
</div>

<h5><span class="h8">Selecione os horários que participará da palestras institucional:</span></h5>
<div class="collum-2">
  <h5><span class="h7">Palestra Institucional</span></h5>
  <form class="" action="index.html" method="post">

  <input type="radio" id="radio1" name="palestra_12" value="">
  <label for="radio1" class="label-radio"><span class="radio"></span>  12h30min</label>

  <input type="radio" id="radio2" name="palestra_18" value="">
  <label for="radio2" class="label-radio"><span class="radio"></span>  18h00min</label>

  </form>
  <p>
	Não poderá comparecer em<br /> nenhum destes horários?
  </p>
</div>

<div class="collum-2">
  <h5><span class="h7">Dinâmica em Grupo</span></h5>
  <form class="" action="index.html" method="post">

    <input type="radio" id="radio3" name="dinamica_12" value="">
    <label for="radio3" class="label-radio"><span class="radio"></span>  12h30min</label>

    <input type="radio" id="radio4" name="dinamica_18" value="">
    <label for="radio4" class="label-radio"><span class="radio"></span>  18h00min</label>

  </form>


  <a href="#"><h5>Prefiro responder posteriormente</h5></a>
</div>

<?php echo $this->load->view('_inc/footer') ?>

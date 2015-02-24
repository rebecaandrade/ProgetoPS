<?php echo $this->load->view('_inc/header_big') ?>
<div id="subtitle-logo">
        <h2>Horário Entrevista</h2>
        </div>
      </div>
    </div>
    <div id="body-interview">
      Testando radio
      <input type="radio" name="name" id="radio1" value="">
      <label for="radio1" class="label-radio"><span class="radio"></span>  12h30min</label>
      <br />
      <input type="radio" name="name" id="radio2" value="">
      <label for="radio2" class="label-radio"><span class="radio"></span>  18h00min</label>
      <h5><span class="h8">Marque os dias que tem disponibilidade para a entrevista:</span></h5>
      <div id="table-interview">
        <table>
          <thead>
            <tr>
              <th colspan="6">
                Fevereiro 2015
              </th>
            </tr>
            <tr>
              <th colspan="3"><!--Adicionar contador PHP para expandir-->
                Qua 18
              </th>
              <th>
                Qui 19
              </th>
            </tr>

          </thead>
          <tbody>
            <tr>
              <td>
                08:00 - 09:00
              </td>
              <td>
                09:00 - 10:00
              </td>
              <td>
                09:00 - 10:00
              </td>
            </tr>

            <tr><!--Checkbox-->
              <td>
                <input type="checkbox" id="checkbox1" name="name" value="">
                <label for="checkbox1"><span class="checkbox"></span></label>
              </td>
              <td>
                <input type="checkbox" id="checkbox2" name="name" value="">
                <label for="checkbox2"><span class="checkbox"></span></label>
              </td>
              <td>
                <input type="checkbox" id="checkbox3" name="name" value="">
                <label for="checkbox3"><span class="checkbox"></span></label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h5>Prefiro responder posteriormente</h5>
    </div>

    <?php echo $this->load->view('_inc/footer') ?>

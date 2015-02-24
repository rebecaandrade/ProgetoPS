<?php echo $this->load->view('_inc/header_big') ?>
<div id="subtitle-logo">
        <h2>Horário Entrevista</h2>
        </div>
      </div>
    </div>
    <div id="body-interview">
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
                <input type="radio" name="name" value="">
              </td>
              <td>
                <input type="radio" name="name" value="">
              </td>
              <td>
                <input type="radio" name="name" value="">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h5>Prefiro responder posteriormente</h5>
    </div>

    <?php echo $this->load->view('_inc/footer') ?>

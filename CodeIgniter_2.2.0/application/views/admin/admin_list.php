<?php echo $this->load->view('_inc/header_small') ?>
<div id="subtitle-logo-small">
  <span class="subtitle-url"><h4>Administradores</h4></span>
</div>
</div>
</div>
<?php echo var_dump($users)?>
<table id="list-admin">
    <thead>
        <tr>
            <th> Nome </th>
            <th> </th>
        </tr>
    </thead>
  <tbody>
    <tr>
      <td> Rebeca Baldomir </td>
      <td>
        <img src="<?php echo base_url();?>assets/images/button_light_refresh.png" alt="" />
        <img src="<?php echo base_url();?>assets/images/button_light_cancel.png" alt="" />
        <img src="<?php echo base_url();?>assets/images/button_light_cancel.png" alt="" />
      </td>
    </tr>
  </tbody>
</table>
<?php echo $this->load->view('_inc/footer') ?>

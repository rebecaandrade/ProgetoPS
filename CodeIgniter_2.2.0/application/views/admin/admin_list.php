<?php echo $this->load->view('_inc/header_small') ?>
<div id="subtitle-logo-small">
  <span class="subtitle-url"><h4>Administradores</h4></span>
</div>
</div>
</div>
<table id="list-admin">
    <thead>
        <tr>
            <th> Nome </th>
            <th> </th>
        </tr>
    </thead>
  <tbody>
  <?php if(isset($users)){
        foreach ($users as $user) { ?>
    <tr>
      <td> <?php echo $user->nome ?> </td>
      <td>
        <img src="<?php echo base_url();?>assets/images/button_light_fresh.png" alt="" />
        <img src="<?php echo base_url();?>assets/images/button_light_cancel.png" alt="" />
      </td>
    </tr>
  <?php }} ?>
  </tbody>
</table>
<?php echo $this->load->view('_inc/footer') ?>

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
        <a href="<?php echo base_url();?>index.php/admin/update_admin?id=<?php echo $user->id_login?>"><img src="<?php echo base_url();?>assets/images/button_light_fresh.png" alt="" /></a>
        <a onclick="if (confirm('Deseja deletar este usuario?')) window.location.replace('<?php echo base_url().'index.php/admin/delete?id='.$user->id_login ?>')"><img src="<?php echo base_url();?>assets/images/button_light_cancel.png" alt="" /></a>
      </td>
    </tr>
  <?php }} ?>
  </tbody>
</table>
<?php echo $this->load->view('_inc/footer') ?>

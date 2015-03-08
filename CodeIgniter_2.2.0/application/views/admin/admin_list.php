<?php echo $this->load->view('_inc/header_thin') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
    <div class="header-text-thin-square-2 header-text-uppercase">
      <p>lista de administradores</p>
    </div>
  </div>
</div>

  <div id="content" class="content-thin">
    <div id="list-admin">
      <table>
          <thead>
              <tr>
                  <th> Nome </th>
                  <th><a href="<?php echo base_url() ?>index.php/admin/create_admin">Novo Admin</a></th>
              </tr>
          </thead>
        <tbody>
        <?php if(isset($users)){
              foreach ($users as $user) { ?>
          <tr>
            <td> <?php echo $user->nome ?> </td>
            <td>
              <a href="<?php echo base_url();?>index.php/admin/update_admin/<?php echo $user->id_login?>"><img src="<?php echo base_url();?>assets/images/button_light_update.png" alt="" /></a>
              <a onclick="if (confirm('Deseja deletar este usuario?')) window.location.replace('<?php echo base_url().'index.php/admin/delete?id='.$user->id_login ?>')"><img src="<?php echo base_url();?>assets/images/button_light_cancel.png" alt="" /></a>
            </td>
          </tr>
        <?php }} ?>
        </tbody>
      </table>
    </div>
  </div>
<?php echo $this->load->view('_inc/footer') ?>

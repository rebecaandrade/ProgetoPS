<?php echo $this->load->view('_inc/header_thin') ?>

<div class="header-text-thin-square-2 header-text-uppercase">
	<p>lista de candidatos</p>
</div>
</div>
</div>

  <div id="content" class="content-thin">
    <div id="list-user">
      <table>
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th></th>
                  <th></th>
                  <th>FeedBack</th>
                  <th>&nbsp</th>
             </tr>
          </thead>
          <tbody>
          <?php if(isset($users)){
              foreach ($users as $user) { ?>
                  <tr>
                      <td><?php echo $user->nome ;?> </td>
                      <td> <?php echo $user->email ;?></td>
                      <td><a href="#">Horário</a></td>
                      <td><a href="<?php echo base_url();?>index.php/admin/check_member?id=<?php echo $user->id_login?>">Informações</a></td>
                      <td><a href="<?php echo base_url() ?>/index.php/feedback/show_feed?id=<?php echo $user->id_login?>"> <img src="<?php echo base_url();?>assets/images/button_light_accept.png" alt="" /></a></td>
                      <td><a onclick="if (confirm('Deseja deletar este usuario ?')) window.location.replace('<?php echo base_url().'index.php/usuario/delete?id='.$user->id_login ?>')">
                        <img src="<?php echo base_url();?>assets/images/button_light_cancel.png" alt="" />
                      </a></td>
                  </tr>
          <?php }} ?>
          </tbody>
      </table>
    </div>
  </div>

<?php echo $this->load->view('_inc/footer') ?>

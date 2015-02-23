<?php echo $this->load->view('_inc/header_small') ?>

<div id="subtitle-logo-small">
  <span class="subtitle-url"><h4>Lista de Candidatos</h4></span>
</div>
</div>
</div>

<table id="list-user">
    <thead>
        <tr>
            <th> Nome </th>
            <th> Email </th>
            <th></th>
            <th></th>
            <th> FeedBack </th>
       </tr>
    </thead>
    <tbody>
    <?php if(isset($users)){
        foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user->nome ;?> </td>
                <td> <?php echo $user->email ;?></td>
                <td><a href="#">Horário</a></td>
<<<<<<< HEAD
                <td><a href="#">Informações</a></td>
                <td><img src="<?php echo base_url();?>assets/images/button_light_accept.png" alt="" /></td>
                <td>
                <a href="<?php echo base_url();?>index.php/usuario/delete?id=<?php echo $user->id_login?>">
                  <img src="<?php echo base_url();?>assets/images/button_light_cancel.png" alt="" />
                 deletar
                </a>
                </td>
=======
                <td><a href="<?php echo base_url();?>index.php/admin/check_member?id=<?php echo $user->id_login?>">Informações</a></td>
                <td> <img src="<?php echo base_url();?>assets/images/button_light_accept.png" alt="" /></td>
                <td><a onclick="if (confirm('Deseja deletar esta usuario? ?')) window.location.replace('<?php echo base_url().'index.php/usuario/delete?id='.$user->id_login ?>')"> deletar </a></td>
                
>>>>>>> dd6d29b2ae91d9ca4ef2c30fd3b35cc9f5d14a92
            </tr>
    <?php }} ?>
    </tbody>
</table>
<?php echo $this->load->view('_inc/footer') ?>

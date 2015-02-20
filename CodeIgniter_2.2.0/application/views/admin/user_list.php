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
            <th> FeedBack </th>
       </tr>
    </thead>
    <tbody>
    <?php if(isset($users)){
        foreach ($users as $user) { ?> 
            <tr>
                <td><?php echo $user->nome ;?> </td>
                <td> <?php echo $user->email ;?></td>
                <td> <?php echo $user->email ;?></td>
                <td> <img src="./images/button_light_accept.png" alt="" /></td>
                <td><a href="#">Horário</a></td>
                <td><a href="#">Informações</a></td> 
            </tr>
    <?php }} ?>
    </tbody>
</table>
<?php echo $this->load->view('_inc/footer') ?>
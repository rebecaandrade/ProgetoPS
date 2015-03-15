<div id="navbar">
            <a href="<?php echo base_url() ?>index.php/usuario/home"><li>Home</li></a>
            <a href="<?php echo base_url() ?>index.php/access/sign_out"><li>Sair</li></a>
<<<<<<< HEAD
=======
            <?php if($this->session->userdata('login_perfil') == 2){
            	echo '<a href="'.base_url().'index.php/admin/change_password'.'"><li>Senha</li></a>';
            	}  ?>
        </ul>
        </li>
    </ul>
>>>>>>> 14231ee04e119cd9ba46cbf6ab3d3297744c06d8
</div>

	<script src="<?php echo base_url(); ?>complemento/js/alerts.js"></script>
	
	<?php if ($this->session->userdata('mensagem')) {?>
		<script>
			var titulo = <?php echo json_encode($this->session->userdata('mensagem'));?> ;
			var subtitulo = <?php echo json_encode($this->session->userdata('subtitulo_mensagem')); ?>;
			var tipo = <?php echo json_encode($this->session->userdata('tipo_mensagem'));?>;
			swal({
				title : titulo,
				text: subtitulo,
				type: tipo
			});
		</script>
	<?php 
		$this->session->unset_userdata('mensagem');
		$this->session->unset_userdata('subtitulo_mensagem');
		$this->session->unset_userdata('tipo_mensagem');
		} ?>
	<script type="text/javascript">
		/* Máscaras ER */
		function mascara(o,f){
			v_obj=o
			v_fun=f
			setTimeout("execmascara()",1)
		}
		function execmascara(){
			v_obj.value=v_fun(v_obj.value)
		}
		function mtel(v){
			v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
			v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
			v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
			return v;
		}
		function id( el ){
			return document.getElementById( el );
		}
		window.onload = function(){
			id('telefone').onkeypress = function(){
			mascara( this, mtel );
			}
		}
	</script>
</body>
</html>

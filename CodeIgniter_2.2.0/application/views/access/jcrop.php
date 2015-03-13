<?php echo $this->load->view('_inc/header_large')?>
<head>
	<style media="screen">
		body{
			width: 60%;
			background-color: #39DDDD;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/javascript/jcrop/css/jquery.Jcrop.css">
	<script src="<?php echo base_url()?>assets/javascript/jcrop/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/javascript/jcrop/js/jquery.Jcrop.js"></script>
	<script src="<?php echo base_url()?>assets/javascript/jcrop/js/jquery.Jcrop.js"></script>

	<script type="text/javascript">
function getCoords(){
var api;
$('#toCrop').Jcrop({
minSize: [160,160],
aspectRatio: 1,
bgOpacity: 0.4,
addClass: 'jcrop-light',
onSelect: updateCoords,
onChange: updateCoords,
setSelect: [0,0,160,160]
});
}

function updateCoords(c){
$('#x').val(c.x);
$('#y').val(c.y);
$('#w').val(c.w);
$('#h').val(c.h);
};

function _(element){
if(document.getElementById(element))
return document.getElementById(element);
else
return false;
}

function submitForm(){
if(_('arquivo').files[0]){//Se houver um arquivo, faremos alguns testes no mesmo
var arquivo = _('arquivo').files[0];
if(arquivo.type != 'image/png' && arquivo.type != 'image/jpeg')
_('result').innerHTML = 'Por favor, selecione uma imagem do tipo JPEG ou PNG';
else if(arquivo.size > 1024 * 2048)//2MB
_('result').innerHTML = 'Por favor selecione uma image mo máximo 2MB de tamanho.';
else{
var x = _('x').value;
var y = _('y').value;
var w = _('w').value;
var h = _('h').value;
var formData = new FormData();
formData.append('arquivo', arquivo);
formData.append('x', x);
formData.append('y', y);
formData.append('w', w);
formData.append('h', h);
if(_('imgType')){
var imgType = _('imgType').value;
formData.append('imgType', imgType);
}
if(_('imgName')){
var imgName = _('imgName').value;
formData.append('imgName', imgName);
}
var request  = new XMLHttpRequest();
if(_('toCrop'))
var includeFile = 'cropFile.php';
else
var includeFile = 'recebeFile.php';
request.open('post', includeFile, true);
request.onreadystatechange = function(){
if(request.readyState == 4 && request.status == 200)
_('result').innerHTML = request.responseText;
if(_('toCrop'))
_('sendButton').value = 'Recortar';
}
request.send(formData);
_('result').innerHTML = '<img src="loading.gif" />';
}
}
else
_('result').innerHTML = 'Por favor, selecione uma imagem para ser enviada!';
}
</script>

</head>
			<div class="header-text-large-square-2 header-text-uppercase">
				<p>cadastro</p>
			</div>
		</div>
	</div>

	<div id="content" class="content-large">
		<?php echo form_open_multipart('usuario/insert_new_user')?>
		<div class="form-column-3">
			<label>Nome<br /><input type="text" name="nome" value=""></label>

			<div id="form-photo">
				<div id="form-photo-frame">
					<img src="<?php echo base_url();?>assets/images/photo_profile.png" alt="" />
					<img src="<?php echo base_url();?>assets/images/foto_usuario.png" alt="" />
				</div>
				<div id="form-photo-name">
					<input type="file" name="arquivo" value="">
				</div>
				<!-- http://rodrigomarques.me/tutorial/recortando-uma-imagem-com-jcrop-javascript-php -->
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input onclick="submitForm();" type="button" id="sendButton" value="Enviar" />
			<output id="result"></output>
			</div>

		</div>

		<div class="form-column-3">
			<label>Usuário<br /><input type="text" name="usuario" value=""></label><br />

			<label>Email<br /><input type="text" name="email" value=""></label>

			<label>Curso<br /><input type="text" name="curso" value=""></label>

			<label>Semestre<br /><input type="text" name="semestre" value=""></label>

			<label>Telefone<br /><input type="text" name="telefone" value=""></label>

		</div>

		<div class="form-column-3">

		 	<label>Senha<br />(Mínimo de 6 caracteres)<br /><input type="password" name="senha" value=""></label>

		 	<label>Confirme a Senha<br /><input type="password" name="novasenha" value=""></label>
			<h3>
				<br />
			Quantas vezes já participou do processo seletivo?
		</h3><br />
	 	<input type="radio" name="num_de_ps" value="0" id="radio_sub_1" checked>
		<label for="radio_sub_1" class="label-radio">Nenhuma</label><br />
	  <input type="radio" name="num_de_ps" value="1" id="radio_sub_2">
		<label for="radio_sub_2" class="label-radio">
		<p>
			1 vez
		</p></label><br />
	  <input type="radio" name="num_de_ps" value="2" id="radio_sub_3">
		<label for="radio_sub_3" class="label-radio">
			2 vezes</label><br />
	  <input type="radio" name="num_de_ps" value="3" id="radio_sub_4">
		<label for="radio_sub_4" class="label-radio">
		3 ou mais</label><br /><br />
	  <input class="button b-light-accept" type="submit" value="">

		</div>

		<?php echo form_close();?>
	</div>

	<?php echo form_close() ?>
<?php echo $this->load->view('_inc/footer')?>

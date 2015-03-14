<?php echo $this->load->view('_inc/header_large')?>

		<div class="header-text-large-square-2 header-text-uppercase">
				<p>cadastrar datas</p>
			</div>
		</div>
	</div>
	<?php echo form_open('ps/update_hours') ?>
	<div id="form-ps-dates">
        <h3>Atividades</h3>
        <h2>Alterar qualquer horário ou data das atividades ou do periodo de entrevista ira desmarcar todos candidatos daquela modalidade! </h2>	
        	<label>Data da Apresentação Institucional<br /><input type="date" name="date-ps-palestra" value=""></label><br />
            <label>Primeira hora da Apresentação Institucional<br /><input type="time" name="ps-palestra-hour-1" value=""></label><br />
            <label>Segunda hora da Apresentação Institucional<br /><input type="time" name="ps-palestra-hour-2" value=""></label><br /><br />

            <label>Data da Dinâmica<br /><input type="date" name="date-ps-dinamica" value=""></label><br />
            <label>Primeira hora da Dinâmica<br /><input type="time" name="ps-dinamica-hour-1" value=""></label><br />
            <label>Segunda hora da Dinâmica<br /><input type="time" name="ps-dinamica-hour-2" value=""></label><br /><br />
    	<h3>Periodo de entrevistas</h3><br />
    	<h2>Fins de semana não serão incluidos</h2>
        	<label>Digite a data de início:<br /><input name="interview-date-start" type="date"><br /></label>
        	<label>Digite a data de término:<br /><input name="interview-date-end" type="date"><br /></label>

    </div>
    <div class="button-box">
        <input class="button b-dark-accept" type="submit" value="">
    </div>
    <?php echo form_close() ?>
<?php echo $this->load->view('_inc/footer')?>

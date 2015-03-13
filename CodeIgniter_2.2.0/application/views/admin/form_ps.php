<?php echo $this->load->view('_inc/header_thin') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
		<div class="header-text-thin-square-2 header-text-uppercase">
				<p>Cadastro PS</p>
			</div>
		</div>
	</div>

    <div id="content" class="content-thin">
        <?php echo form_open('ps/cadastrar') ?>
        <div id="form-ps">
            <div id="form-ps-information">
                <label>Nome do Processo Seletivo<br /><input type="text" name="name-ps" value=""></label><br /><br />

                <label>Edição<br />
                <select name="edition">
                    <option > </option>
                    <option value="1º/<?php echo $ano ?>">1º/<?php echo $ano ?></option>
                    <option value="2º/<?php echo $ano ?>">2º/<?php echo $ano ?></option>
                </select><br /><br />
                </label>

                <label>Data da Apresentação Institucional<br /><input type="date" name="date-ps-palestra" value=""></label><br />
                <label>Primeira hora da Apresentação Institucional<br /><input type="time" name="ps-palestra-hour-1" value=""></label><br />
                <label>Segunda hora da Apresentação Institucional<br /><input type="time" name="ps-palestra-hour-2" value=""></label><br /><br />

                <label>Data da Dinâmica<br /><input type="date" name="date-ps-dinamica" value=""></label><br />
                <label>Primeira hora da Dinâmica<br /><input type="time" name="ps-dinamica-hour-1" value=""></label><br />
                <label>Segunda hora da Dinâmica<br /><input type="time" name="ps-dinamica-hour-2" value=""></label><br /><br />

            </div>

            <div id="form-ps-dates">
                <h3>Periodo de entrevistas</h3><br />
                <h2>Fins de semana não serão incluidos</h2>
        			<label>Digite a data de início:<br /><input name="interview-date-start" type="date"><br /></label>
                    <label>Digite a data de término:<br /><input name="interview-date-end" type="date"><br /></label>
            </div>
            <div class="button-box">
                <input class="button b-dark-accept" type="submit" value="">
            </div>
            <?php echo form_close() ?>
        </div>

    </div>


<?php echo $this->load->view('_inc/footer') ?>

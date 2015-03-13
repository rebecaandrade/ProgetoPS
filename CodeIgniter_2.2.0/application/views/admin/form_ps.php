<?php echo $this->load->view('_inc/header_thin') ?>
<?php echo $this->load->view('_inc/nav_bar')?>
		<div class="header-text-thin-square-2 header-text-uppercase">
				<p>Cadastro PS</p>
			</div>
		</div>
	</div>

    <div id="content" class="content-thin">
        <?php //echo form_open() ?>
        <div id="form-ps">
            <div id="form-ps-information">
                <label>Nome do Processo Seletivo<br /><input type="text" name="name-ps" value=""></label><br /><br />

				<label>Edição<br /><input type="date" name="date-ps" value=""></label><br /><br />

                <label>Data de Abertura<br /><input type="date" name="date-ps" value=""></label><br /><br />

                <label>Data da Dinâmica<br /><input type="date" name="date-ps-dinamica" value=""></label><br />
                <label>Hora da Dinâmica<br /><input type="time" name="date-ps-dinamica-hour" value=""></label><br />
                <label>Hora da Dinâmica<br /><input type="time" name="date-ps-dinamica-hour" value=""></label><br /><br />

                <label>Data da Apresentação Institucional<br /><input type="date" name="date-ps" value=""></label><br />
                <label>Hora da Apresentação Institucional<br /><input type="time" name="date-ps-palestra-hour" value=""></label><br />
                <label>Hora da Apresentação Institucional<br /><input type="time" name="date-ps-palestra-hour" value=""></label><br /><br />
            </div>

            <div id="form-ps-dates">
                <h3>Horários para entrevista</h3><br />
                <?php echo form_open('admin/insert_new_date')?>
        		<?php for ($i=0; $i < 11; $i++) { ?>

        			<label for="dia">Digite uma data válida:<br /><input name="enterview_date" type="date"><br /></label>

        		<?php }?>
                <h3></h3>
            </div>
            <div class="button-box">
                <input class="button b-dark-accept" type="submit" value="">
            </div>
            <?php //echo form_close() ?>
        </div>

    </div>


<?php echo $this->load->view('_inc/footer') ?>

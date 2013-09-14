<div class="cuerpo">
	<div class="cabecera">
		<h1>base de datos</h1>
	</div>
	<div class="botones">
		<input type="text" name="dato" id="valor">
		<button onclick='javascript:getUserData()'>buscar</button><br><br>
		<div class="informacion" id="imprecion"> c  </div>
		

	</div>
	<div class="info">
		<div class="informacion"> name  </div>
		<div class="informacion"> email  </div>
		<div class="informacion"> creacion </div>
		<div class="clear"></div>
		<?php foreach ($datos as $dato ) { ?>
			<div id="impresion_pic">
				<div class="informacion"> <?php echo $dato['name']; ?>  </div>
				<div class="informacion"> <?php echo $dato['email']; ?> </div>
				<div class="informacion"> <?php echo $dato['created']; ?>  </div>
				<div class="clear"></div>

	 		</div>
		<?php } ?>

	</div>



</div>


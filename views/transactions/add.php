<h2>Agregar Transaccion</h2>

<form action="<?php echo APP_URL."/transations/add"; ?>"
	method="POST">
	
	<p>
		<label for="accounts_id">Cuentas</label>
		<select name="accounts_id" id="accounts_id">
			<?php 
				foreach ($accounts as $account):
			 ?>
				<option value = "<?php echo $account["accounts"] ["id"]; ?>">
					<?php 
						echo $account["accounts"] ["name"];
					 ?>
				</option>
			<?php 
				endforeach 
			?>
		</select>
	</p>
	<p>
		<label for="categorie_id">Categorias</label>
		<select name="categorie_id" id="categorie_id">
			<?php 
				foreach ($categories as $categorie):
			 ?>
				<option value = "<?php echo $categorie["categories"] ["id"]; ?>">
					<?php 
						echo $categorie["categories"] ["name"];
					 ?>
				</option>
			<?php 
				endforeach 
			?>
		</select>
	</p>
	<p>
		<label for="description">Descripcion</label>
		<input type="text" name="description">
	</p>
	<p>
		<label for="date">Datos</label>
		<input type="text" name="date">
	</p>
	<p>
		<label for="amount">Cantidad</label>
		<input type="text" name="amount">
	</p>
	<p>
		<input type="submit" >
	</p>
</form>
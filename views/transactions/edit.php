<h2>Editar transacion</h2>

<form action="<?php echo APP_URL."/transactions/edit"; ?>"
	method="POST">
	<input type= "hidden" name="id" value = "<?php echo $transaction["id"]; ?>">
	
		<p>
		<label for="accounts_id">Cuenta</label>
		<select name="accounts_id" id="accounts_id">
			<?php 
			foreach ($transactions as $transaction):
				if ($type["transactions"]["id"]==$user["transactions_id"]) {
			?>
					<option selected value = "<?php echo $account["accounts"] ["id"]; ?>">
					<?php 
						echo $account["accounts"] ["name"];
					 ?>
				</option>
			<?php 
				}else{ 
			?>
				<option value = "<?php echo $account["accounts"] ["id"]; ?>">
					<?php 
						echo $type["accounts"] ["name"];
					 ?>
				</option>
			<?php 
				}  
			?>
			 				
			<?php 
			endforeach 
			?>
		</select>
	</p>
	<p>
		<label for="description">Descripcion</label>
		<input type="text" name="description" value = "<?php echo $transanction["description"]; ?>">
	</p>
	<p>
		<label for="date">Datos</label>
		<input type="text" name="date" value = "<?php echo $transanction["date"]; ?>">
	</p>
	<p>
		<input type="submit" >
	</p>
</form>
<div class="row">
	<div class="col-xs-12">
		
	</div>
</div>
<h2>Usuarios</h2>
<div class="table-responsive">
	<table class="table table-striped"> 
		<tr>
			<th>ID</th>
			<th>Cuentas</th>
			<th>Categorias</th>
			<th>Descripcion</th>
			<th>Datos</th>
			<th>Cantidad</th>
			<th>Action</th>
		</tr>

	<?php foreach ($transactions as $transaction): ?>
	<tr>
		<td><?php echo $transaction["transactions"]["id"]; ?></td>
		<td><?php echo $transaction["accounts"]["name"]; ?></td>
		<td><?php echo $transaction["categories"]["name"]; ?></td>
		<td><?php echo $transaction["transactions"]["description"]; ?></td>
		<td><?php echo $transaction["transactions"]["date"]; ?></td>
		<td><?php echo $transaction["transactions"]["amount"]; ?></td>
		<td>

			<?php
				echo $this->Html->link(
					"<span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>", "/transactions/edit/".$transaction["transactions"]["id"],
					array(
						"title"=>"Editar usuario",
						"target"=>"_blank"
					)
				);
			?>
			<?php
				echo $this->Html->link(
					"Delete", 
					"/transactions/delete/".$transaction["transactions"]["id"]
					
				);
			?>
			
		</td>
	</tr>
	<?php endforeach; ?>

	</table>
	<a href="<?php echo APP_URL; ?>/transactions/add" ><button  type="button" class="btn btn-primary" >Crear Transaccio</button></a>
</div>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Firma Generada</title>
	<link rel="stylesheet" href="assets/css/firma.css">
</head>

<body>
	<header>
		<p>Su firma se generó correctamente</p>
	</header>

	<main>
		<div class="container-fluid">
			<div class="table-responsive">
				<table>
					<thead>
						<tr class="text-center roboto-medium">
							<td>Primer Nombre</td>
							<td>Segundo Nombre</td>
							<td>Primer Apellido</td>
							<td>Segundo Apellido</td>
							<td>Dirección</td>
							<td>Teléfono</td>
							<td>Celular</td>
							<td>Extensión</td>
							<td>Ciudad</td>
							<td>Indicativo</td>
							<td>Cargo</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($users as $userData): ?>
							<tr class="text-center">
								<td>
									<?php echo $userData['Primer_Nombre']; ?>
								</td>
								<td>
									<?php echo $userData['Segund_Nombre']; ?>
								</td>
								<td>
									<?php echo $userData['Primer_Apellido']; ?>
								</td>
								<td>
									<?php echo $userData['Segund_Apellido']; ?>
								</td>
								<td>
									<?php echo $userData['direccion']; ?>
								</td>

								<td>
									<?php echo $userData['Telefono_Cor']; ?>
								</td>
								<td>
									<?php echo $userData['Celular']; ?>
								</td>
								<td>
									<?php echo $userData['Ext']; ?>
								</td>
								<td>
									<?php echo $userData['Ciudad']; ?>
								</td>
								<td>
									<?php echo $userData['Indicativo']; ?>
								</td>
								<td>
									<?php echo $userData['Nombre_Cargo']; ?>
								</td>
								>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</main>

	<footer>

	</footer>
</body>

</html>
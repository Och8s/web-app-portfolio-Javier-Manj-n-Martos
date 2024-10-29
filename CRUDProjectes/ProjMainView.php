<!doctype html>
<html lang="ca">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Aproximació a MVC - CRUD PDO</title>
	<!-- LIBRERIA ICONOS Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- LIBRERIA DATATABLE -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
	<link href="../../../principal.css" rel="stylesheet" type="text/css">
    <link href="../crud.css" rel="stylesheet" type="text/css">

</head>
<body>
    <header>
        <h1>JAVIER'S PROJECTS</h1>
    </header>
	<div class="container">
	    <div class="py-1 text-center">
        <p class="subtitle">VISTA PROJECTES</p>
		</div>
		<?php if (isset($missatge)): ?>
			<div class='alert alert-<?= isset($missatge["Success"]) ? "success" : "danger" ?>' role='alert'>
				<?= $missatge["Success"] ?? $missatge["Error"] ?>
			</div>
		<?php endif; ?>
		<div class="table-responsive-sm">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th class="align-middle">TÍTOL</th>
						<th class="align-middle">TIPUS</th>
						<th class="align-middle">FOTO</th>
						<th class="align-middle">EINES</th>
						<th class="align-middle">DATA CREACIÓ</th>
						<th class="align-middle text-right">
							<a class="btn btn-primary" role="button" href="?action=new">
								Afegir <i class="fas fa-plus"></i>
							</a>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($result as $row): ?>
						<tr>
							<td class='align-middle'><?= htmlspecialchars($row['titol']) ?></td>
							<td class='align-middle'><?= htmlspecialchars($row['tipus']) ?></td>
							<td class='align-middle'><?= htmlspecialchars($row['foto']) ?></td>
							<td class='align-middle'><?= htmlspecialchars($row['eines']) ?></td>
							<td class='align-middle'><?= htmlspecialchars($row['data_creacio']) ?></td>
							<td class='align-middle'>
								<a class='btn btn-primary' role='button' href='?action=show&id=<?= htmlspecialchars($row['id']) ?>'>Mostrar <i class='fas fa-search'></i></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<script>
			$(document).ready(function() {
				$('.table').DataTable();
			});
		</script>
		<div class="text-left mb-3">
            <a class="btn btn-secondary" href="../InitialPortfolio.html">
                Tornar a Portfolio <i class="fas fa-arrow-left"></i>
            </a>
        </div>
	</div>
</body>
</html>
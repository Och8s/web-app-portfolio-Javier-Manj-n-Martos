<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<title>Aproximació a MVC - CRUD PDO</title>
		<link href="../../../principal.css" rel="stylesheet" type="text/css">
		<link href="../crud.css" rel="stylesheet" type="text/css">

	</head>
	<body>
		<div class="container">
	
        <div class="alert alert-success text-center" role="alert">
            Projecte <?php echo htmlspecialchars($result[0]['titol']); ?> 
        </div>
        <div class="text-left">
            <form>
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label font-weight-bold">número</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="id" value="<?php echo $result[0]['id']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="titol" class="col-sm-2 col-form-label font-weight-bold">Títol</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="titol" value="<?php echo $result[0]['titol']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipus" class="col-sm-2 col-form-label font-weight-bold">Tipus</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="tipus" value="<?php echo $result[0]['tipus']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="granText" class="col-sm-2 col-form-label font-weight-bold">Gran Text</label>
                    <div class="col-sm-10">
                        <textarea readonly class="form-control-plaintext" id="granText"><?php echo $result[0]['granText']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label font-weight-bold">Foto</label>
                    <div class="col-sm-10">
                        <?php
                        // Comprobar si el archivo de imagen existe
                        $image_path = "./imatges/" . htmlspecialchars($result[0]['foto']);
                        if (file_exists($image_path)) {
                            echo '<img style="max-width: 50%;" src="' . $image_path . '" alt="Foto del projecte">';
                        } else {
                            echo '<p class="text-danger">Error: La imagen no existe en la ruta especificada.</p>';
                        }
                        ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="eines" class="col-sm-2 col-form-label font-weight-bold">Eines</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="eines" value="<?php echo $result[0]['eines']; ?>">
                    </div>
                </div>
                <div class="text-right">
                    <a class="btn btn-primary" role="button" href="Index.php">Tornar al Portfoli</a>
                </div>
            </form>				
        </div>
    </div>
</body>
</html>
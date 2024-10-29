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
	<nav>
            <!-- Aquí va el logo y el menú de navegación -->
            <h3>CRUD COORDINADORS</h3>
            <hr class="linea">
            <ul>
                <li class="desplegable"><a href="../../../VistaClub.html">CLUB</a>
                    <div class="desplegableContingut">
                        <a href="../../../CLUBVistaNoticies.html">Noticies</a>
                        <a href="../../../CLUBVistaQuiSom.html">Qui som?</a>
                        <a href="../../../CLUBVistaObjectius.html">Objectius</a>
                        <a href="../../../CLUBVistaEvents.html">Activitats i events</a>
                        <a href="../../../CLUBVistaFesteSoci.html">Fes-te soci</a>
                        <a href="../../../CLUBVistaContraseñaSoci.html">Notificacions per a socis</a>
                    </div>
                </li>
                <li class="desplegable"><a href="../../../VistaEscola.html">ESCOLA</a>
                    <div class="desplegableContingut">
                        <a href="../../../ESCOLAVistaFormacio.html">Formació</a>
                        <a href="../../../ESCOLAVistaEquips.html">Equips</a>
                        <a href="../../../ESCOLAVistaEstil.html">Estil</a>
                        <a href="../../../ESCOLAVistaMetodologia.html">Metodología</a>
                        <a href="../../../ESCOLAVistaContraseñaEntrenadors.html">Accés per Entrenadors</a>
                        <a href="../../../ESCOLAVistaContraseñaCoordinadors.html">Accés per Coordinadors</a>
                    </div>
                </li>
                <li class="desplegable"><a href="../../../Vista1Equip.html">1ER EQUIP</a>
                    <div class="desplegableContingut">
                        <a href="../../../EQUIP1VistaPlantell.html">Plantell</a>
                        <a href="../../../EQUIP1VistaClassificacio.html">Classificació</a>
                        <a href="../../../EQUIP1VistaJornada.html">Jornada</a>
                        <a href="../../../EQUIP1VistaResultats.html">Resultats del Equip</a>
                        <a href="../../../EQUIP1VistaCalendari.html">Calendari</a>
                    </div>
                </li>
                <li class="desplegable"><a href="../../../Vista2Equip.html">2ON EQUIP</a>
                    <div class="desplegableContingut">
                        <a href="../../../EQUIP2VistaPlantell.html">Plantell</a>
                        <a href="../../../EQUIP2VistaClassificacio.html">Classificació</a>
                        <a href="../../../EQUIP2VistaJornada.html">Jornada</a>
                        <a href="../../../EQUIP2VistaResultats.html">Resultats del Equip</a>
                        <a href="../../../EQUIP2VistaCalendari.html">Calendari</a>
                    </div>
                </li>
                <li class="desplegable"><a href="../../../VistaPorters.html">ESCOLA PORTERS</a>
                    <div class="desplegableContingut">
                        <a href="../../../PORTERSVistaFormacio.html">Metodología i formació</a>
                        <a href="../../../PORTERSVistaCalendari.html">Horari, calendari i events</a>
                        <a href="../../../PORTERSVistaEntrenadors.html">Entrenadors</a>
                        <a href="../../../PORTERSVistaPlans.html">Plans i Tarifes</a>
                    </div>
                </li>
                <li class="desplegable"><a href="../../../VistaSecretaria.html" class="activa">SECRETARIA</a>
                    <div class="desplegableContingut">
                        <a href="../../../SECRETARIAVistaOficina.html">Oficina</a>
                        <a href="../../../SECRETARIAVistaInscripcio.html">Inscripció</a>
                        <a href="../../../SECRETARIAVistaVestuari.html">Merchandasing</a>
                        <a href="../../../SECRETARIAVistaNormativa.html">Normativa</a>
                        <a href="../../../SECRETARIAVistaContacte.html">Contacte</a>
                        <a href="../../../SECRETARIAVistaContraseñaSecretaria.html">Accés Secretaría</a>
                    </div>
                </li>
                <li class="desplegable"><a href="../../../VistaHistoria.html">HISTORIA</a>
                    <div class="desplegableContingut">
                        <a href="../../../HISTORIAVistaRessenya.html">Resenya histórica</a>
                        <a href="../../../HISTORIAVistaExits.html">Exits Assolits</a>
                        <a href="../../../HISTORIAVistaFotos.html">Fotografíes históriques</a>
                        <a href="../../../HISTORIAVistaEnviamentFoto.html">Envian's la teva foto</a>
                    </div>
                </li>
                <li><a href="../../../VistaPatrocinadors.html">PATROCINADORS</a></li>
            </ul>
            <hr class="linea">
        </nav>
			<div class="alert alert-success text-center" role="alert">
				Afegir un nou Coordinador
			</div>
		<div class="text-left">
			<form method="POST" action="CoorIndex.php">
				<div class="form-group row">
					<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom" id="nom" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="cognoms" class="col-sm-2 col-form-label font-weight-bold">Cognoms</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cognoms" id="cognoms" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="dni_coordinador" class="col-sm-2 col-form-label font-weight-bold">DNI</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dni_coordinador" id="dni_coordinador" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="movil" class="col-sm-2 col-form-label font-weight-bold">Movil</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="movil" id="movil" required>
					</div>
				</div><div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label font-weight-bold">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" id="email" required>
					</div>
				</div>
				<input type="hidden" name="action" value="add">
				<div class="text-right">
					<button type="submit" class="btn btn-primary">Desar</button>
                    <a class="btn btn-primary" role="button" href="CoorIndex.php">CRUD COORDINADORS</a>
				</div>
			</form>
		</div>
	</div>
</body>

</html>
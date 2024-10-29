<?php
	require("Model.php");

	function getProjs()
	{
		return modQueryA();
	}

	// function addProj($titol, $tipus, $petitText, $granText, $foto, $eines, $data_creacio)
	// {
	// 	return modAddA($titol, $tipus, $petitText, $granText, $foto, $eines, $data_creacio);
	// }

	// function upProj($id, $titol, $tipus, $petitText, $granText, $foto, $eines, $data_creacio)
	// {
	// 	return modUpdateA($id, $titol, $tipus, $petitText, $granText, $foto, $eines, $data_creacio);
	// }

	function getProj($id)
	{
		return modQueryA($id);
	}

	// function deleteProj($id)
	// {
	// 	return modDeleteA($id);
	// }

	/**** FUNCIONS PER CARREGAR LES VISTES ***/

	function loadProjMainView($msg=null)
	{
		$result = getProjs();
		$missatge = $msg;
		require_once("VistaProjectes.php");
	}

	// function loadProjNewView()
	// {
	// 	require_once("ProjNewView.php");
	// }

	// function loadProjEditView($id)
	// {
	// 	$result = getProj($id);
	// 	require_once("ProjEditView.php");
	// }

	function loadProjShowView($id)
	{
		$result = getProj($id);
		require_once("VistaMostrar.php");
	}

	function loadIniciarView()
	{
		$result = getProjs();
		require_once("VistaPortfolio.php");
	}
?>

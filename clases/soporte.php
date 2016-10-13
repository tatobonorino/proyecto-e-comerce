<?php

require_once("auth.php");
require_once("validar.php");
require_once("jsonRepository.php");
require_once("usuario.php");

$tipoRepositorio = "json";
$repositorio = null;

if ($tipoRepositorio == "json")
{
	$repositorio = new JSONRepository();
}
/*
$auth = Auth::getInstance($repositorio->getUserRepository());
$validar = Validar::getInstance($repositorio->getUserRepository());
*/

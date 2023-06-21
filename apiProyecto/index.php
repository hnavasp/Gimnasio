<?php /* Mostrar errores */
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', "C:/xampp/htdocs/apiProyecto/php_error_log");
/*Encabezada de las solicitudes*/
/*CORS*/
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
/*--- Requerimientos Clases o librerías*/
require_once "models/MySqlConnect.php";
/***--- Agregar todos los modelos*/
require_once "models/PlanModel.php";
require_once "models/PlanUsuariosModel.php";

/***--- Agregar todos los controladores*/
require_once "controllers/PlanController.php";
require_once "controllers/PlanUsuariosController.php";

//Enrutador 
//RoutesController.php 
require_once "controllers/RoutesController.php";
$index = new RoutesController();
$index->index();

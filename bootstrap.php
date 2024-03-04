<?php
//define('BASE_URL_PATH', '/');
use CT275\Labs\PDOFactory;

try {
  $PDO = new PDO('mysql:host=localhost;dbname=ct27501_project_B2014701', 'root',);
	$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
  include('../partials/error.php');
  die();
}
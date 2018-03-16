<?php 
//for debugging
ini_set('display_errors',1); 
error_reporting(E_ALL);
 
include "./templates/header.tpl.php";
include "./templates/navbar.tpl.php";
include "./model/db.php";

//include "./templates/forms/serviceLog.tpl.php";

if(!isset($_GET['table'])){
    die("error no table");
} else {
    $table = $_GET['table'];
}

$db = new db();
$tableData = $db->fetchdata($table);
//render list template
include "./templates/list.tpl.php";    
//render footer crap
include "./templates/footer.tpl.php";
<?php 

session_start();

ob_start();

error_reporting(E_ALL & ~E_NOTICE);

include("db.php");

include("functions.php");

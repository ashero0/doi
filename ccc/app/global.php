<?php

set_include_path(dirname(__FILE__)); # include path - don't change

include_once 'config.php'; # include the config file

// Start the session.
session_start();
date_default_timezone_set('UTC');

// Connect to database.
// $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DBNAME)
//   or die ('Error: '.$conn->connect_error);

// Automatically load classes.
spl_autoload_register(function($class_name) {
  include SYSTEM_PATH.'/model/classes/'.$class_name.'.php';
});
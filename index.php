<?php




// load Hotel config (error reporting etc.)
require 'config/config.php';

// load Hotel class
require 'libs/application.php';
require 'libs/controller.php';

// start the Hotel
$app = new application();

<?php
// Llamar a config
require_once 'config/Config.php';

// Llamar al helper url
require_once 'helpers/url_helper.php';

//llamar a libs
spl_autoload_register(function($files){
	require_once 'libs/' . $files . '.php';
});
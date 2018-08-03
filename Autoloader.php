<?php

// va permettre de charger automatiquement les differentes classes

spl_autoload_register(function($class){

	require_once 'classes/' . $class . '.php';

})
	
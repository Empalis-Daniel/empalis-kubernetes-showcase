<?php
	
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/guestbook', array('controller' => 'entries', 'action' => 'index'));
	Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));
	
	CakePlugin::routes();
	
	require CAKE . 'Config' . DS . 'routes.php';
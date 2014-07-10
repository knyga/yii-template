<?php

$private = require_once dirname(__FILE__) . '/private.php';

$config =  CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		// autoloading model and component classes
		// 'components'=>array(
		// 	'fixture'=>array(
		// 		'class'=>'system.test.CDbFixtureManager',
		// 	),
		// 	 uncomment the following to provide test database connection
		// 	'db'=>array(
		// 		'connectionString'=>'DSN for test database',
		// 	),
			
		// ),
	)
);

$config['import'][] = 'application.tests.abstracts.*';

return CMap::mergeArray($config, $private);
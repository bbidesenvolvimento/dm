<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			 uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'rdsbbi.c4y8ceg16n1f.us-west-2.rds.amazonaws.com',
			),
			
		),
	)
);

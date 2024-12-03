<?php
return [
	'DB_TYPE'               => 'mysql',
    'DB_HOST'               => '127.0.0.1',
	'DB_NAME'               => 'leyou',
	'DB_USER'               => 'root',
	'DB_PWD'                => '123456',
    'DB_PREFIX'             => 'caipiao_',
    'DB_PORT'               => '3306',
	'DB_DEBUG'              => false,
	'DB_PARAMS'             => [\PDO::ATTR_CASE => \PDO::CASE_NATURAL],
];
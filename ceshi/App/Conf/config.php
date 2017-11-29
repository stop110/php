<?php
return array(
	//'配置项'=>'配置值'
	'DB_HOST' => '127.0.0.1',
	'DB_USER' => 'root',
	'DB_PWD' => 'root',
	'DB_NAME' => 'blog',
	'DB_PREFIX' => 'hd_',

	'APP_GROUP_LIST' => 'Index,Admin',
	'DEFAULT_GROUP' => 'Index',

	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' => 'Modules',
	'LOAD_EXT_CONFIG' => 'verify,water',
	'SHOW_PAGE_TRACE' => true,
	'URL_MODEL' =>2,
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(
		//'c/:id' => 'Index/List/index'
		'/^c_(\d+)$/' => 'Index/List/index?id=:1',
		'/^s_(\d+)$/' => 'Index/Show/index?id=:1'
	)
);
?>
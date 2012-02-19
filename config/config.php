<?php

return array(

    'db' => array(
       'class' => array('Database', array('mysql', 'localhost', 'root', 'good123', 'qiqi')),
	   'initialization' => array(
    	   'SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary',
    	   "SET sql_mode=''"
		)
    ),

    'smarty' => array(
       'class' => 'Smarty',
       'template_dir' => ROOT_PATH.'/template',
       'compile_dir' => ROOT_PATH.'/tmp/compile_dir',
       'error_reporting' => E_ALL ^ E_NOTICE
    )

);

?>
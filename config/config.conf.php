<?php

return [
    'mainDomain'	=> '.g.cn',
    'siteName' 		=> '建设招标采购平台',

    'url' => [
        'captcha' => '/captcha.php',
        'common' => '/common.php',
        'home' => '/index.php',
    ],

    'cat' => [
        'fw' => 26,
        'sb' => 27,
        'cl' => 28,

        'fc' => 24,
        'cb' => 25,
        'zf' => 23,

        'news_fg' => 8,
        'news_hy' => 9,
        'news_bj' => 10,
        'news_gg' => 7,
    ],
	'dem'=>[
		'init'=>1
	],
    'db' => array(
        //'adapter' => 'Mysqli',
        //'host' => 'localhost',
        'host' => '127.0.0.1',
        'port' => 3306,
        'suser' => 'root',
        //'password' => '890poi890poi',
        'password' => 'root',
        'database' => 'jsshop',
        'charset' => 'utf8',
        'persitent' => false
    ),

    'classMap' => array(
        'Dba' 				=> SI_INC . 'dba.php',
        'Action' 			=> SI_INC . 'controller.php',
        'AdminActions'    => SI_INC . 'controllerAdmin.class.php',
        'Observable'		=> SI_INC . 'observer/observable.php',
        'Validator'		=> SI_INC . 'validator.php',
        'HtmlTable' 		=> SI_INC . 'html/table.php',
        'HtmlTableEditor' => SI_INC . 'html/tableEditor.php',
        'HtmlForm' 		=> SI_INC . 'html/form.php',
        'HtmlElement'		=> SI_INC . 'html/element.php',
        'HtmlRecord'		=> SI_INC . 'html/record.php',
        'Uploader'			=> SI_INC . 'uploader.php',
        'UFile'			=> SI_INC . 'ufile_manager.php',
        'ImageThumb'       => SI_INC . 'image_tools.php',
        'Cnfdb'		=> SI_INC . 'cnfdb.class.php',

        'Cnf' => SI_INC . "cnf.php",
        'CategoryApp' => SI_INC . 'tree/categoryapp.php',
        'CategoryTree' => SI_INC . 'tree/categorytree.php',
        'UFileManagerPlug' => SI_INC . 'ufile_manager.php',
    )
	
	
];
<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "expressions".
 *
 * Auto generated 26-03-2013 22:29
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Generic expression parser',
	'description' => 'A library for bringing into extensions something like TypoScript\'s getText function.',
	'category' => 'misc',
	'author' => 'Francois Suter (Cobweb)',
	'author_email' => 'typo3@cobweb.ch',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.6.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.5.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"c6b6";s:31:"class.tx_expressions_parser.php";s:4:"d32e";s:16:"ext_autoload.php";s:4:"20d3";s:12:"ext_icon.gif";s:4:"160e";s:10:"README.txt";s:4:"ee2d";s:42:"Classes/ViewHelpers/EvaluateViewHelper.php";s:4:"8e4a";s:14:"doc/manual.pdf";s:4:"287c";s:14:"doc/manual.sxw";s:4:"08f1";s:52:"interfaces/interface.tx_expressions_keyprocessor.php";s:4:"6cf4";s:58:"interfaces/interface.tx_expressions_valuepostprocessor.php";s:4:"d945";s:50:"samples/class.tx_expressions_functionProcessor.php";s:4:"c39a";}',
	'suggests' => array(
	),
);

?>
<?php

########################################################################
# Extension Manager/Repository config file for ext: "expressions"
#
# Auto generated 04-10-2009 21:48
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

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
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'php' => '5.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:9:"ChangeLog";s:4:"a1ba";s:10:"README.txt";s:4:"ee2d";s:31:"class.tx_expressions_parser.php";s:4:"ad07";s:16:"ext_autoload.php";s:4:"38a1";s:12:"ext_icon.gif";s:4:"160e";s:14:"doc/manual.sxw";s:4:"378e";s:52:"interfaces/interface.tx_expressions_keyprocessor.php";s:4:"0d0a";s:58:"interfaces/interface.tx_expressions_valuepostprocessor.php";s:4:"5342";}',
	'suggests' => array(
	),
);

?>
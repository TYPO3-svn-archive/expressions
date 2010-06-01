<?php
/* 
 * Register necessary class names with autoloader
 *
 * $Id: ext_autoload.php 219 2009-09-01 11:48:35Z fsuter $
 */
$extensionClassesPath = t3lib_extMgm::extPath('expressions') . 'Classes/';
return array(
	'tx_expressions_parser' => t3lib_extMgm::extPath('expressions', 'class.tx_expressions_parser.php'),
	'tx_expressions_viewhelpers_evaluateviewhelper' => $extensionClassesPath . 'ViewHelpers/EvaluateViewHelper.php',
);
?>

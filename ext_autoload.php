<?php
/* 
 * Register necessary class names with autoloader
 *
 * $Id: ext_autoload.php 219 2009-09-01 11:48:35Z fsuter $
 */
$extensionPath = t3lib_extMgm::extPath('expressions');
return array(
	'tx_expressions_parser' => $extensionClassesPath . 'class.tx_expressions_parser.php',
	'tx_expressions_viewhelpers_evaluateviewhelper' => $extensionClassesPath . 'Classes/ViewHelpers/EvaluateViewHelper.php',
);
?>

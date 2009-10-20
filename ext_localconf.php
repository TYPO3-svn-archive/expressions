<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

	// Register the class for using the contextStorage hook
$TYPO3_CONF_VARS['EXTCONF']['context']['contextStorage'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/class.tx_expressions_contextstorage.php:&tx_expressions_ContextStorage';
?>
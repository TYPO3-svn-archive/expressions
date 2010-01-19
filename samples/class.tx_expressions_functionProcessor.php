<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Francois Suter (Cobweb) <typo3@cobweb.ch>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Sample class providing an example user function for post-processing expressions
 * 
 * To activate that function, enter the following is some localconf file:
 * 
 * $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['expressions']['customFunction']['offset'] = 'EXT:test/class.tx_test_functionprocessor.php:&tx_test_functionProcessor->offset';
 * 
 * To use it in an expression, enter something like:
 * 
 * gp:foo|bar->offset:10
 * 
 * This will take the foo[bar] GET/POST variable and offset it by 10
 *
 * @author		Francois Suter (Cobweb) <typo3@cobweb.ch>
 * @package		TYPO3
 * @subpackage	tx_expressions
 *
 * $Id$
 */
class tx_expressions_functionProcessor {
	/**
	 * Sample method to process expressions using the function-calling syntax
	 * i.e. this method might be called using:
	 *
	 * gp:foo|bar->offset:10
	 *
	 * The method receives an array of parameters and a reference to a dummy object
	 * (there's no real reference to a calling object, because the calling object is static)
	 * The array of parameters always contains the value from the expression first
	 * (i.e. in $parameters[0])
	 * Any additional parameters required by the function come next. In this sample's
	 * case, the second parameter ($parameters[1]) is a number by which the value
	 * will be offset
	 *
	 * The method *must* return the expression's value, even if unchanged
	 *
	 * @param	array	$parameters: indexed list of parameters. The first one is the expression's result
	 * @param	object	$pObj: dummy object. Not usable.
	 * @return	mixed	The processed value
	 */
	public function offset($parameters, $pObj) {
		$value = intval($parameters[0]);
		$offset = 0;
		if (isset($parameters[1])) {
			$offset = intval($parameters[1]);
		}
		return $value + $offset;
	}
}
?>

<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Francois Suter (Cobweb) <typo3@cobweb.ch>
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
*
* $Id: interface.tx_expressions_keyprocessor.php 235 2009-09-15 20:00:34Z fsuter $
***************************************************************/


/**
 * Interface which defines the method to implement when creating a special key processor for expressions
 *
 * @author		Francois Suter (Cobweb) <typo3@cobweb.ch>
 * @package		TYPO3
 * @subpackage	tx_expressions
 *
 * $Id: interface.tx_expressions_keyprocessor.php 235 2009-09-15 20:00:34Z fsuter $
 */
interface tx_expressions_keyProcessor {
	/**
	 * This method must be implemented to handle the "indices" part it receives from the parser
	 * Assuming an expression such as:
	 *
	 * mykey:foo|bar
	 *
	 * the method will receive the string foo|bar
	 * It is expected to return a value that makes sense or else throw an exception
	 *
	 * @param	string	$indices: the string to be interpreted
	 * @return	mixed	The resulting value
	 */
	public function getValue($indices);
}
?>
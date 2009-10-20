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
***************************************************************/

/**
 * Class for implementing the contextStorage hook of extension "context"
 *
 * @author		Francois Suter (Cobweb) <typo3@cobweb.ch>
 * @package		TYPO3
 * @subpackage	tx_expressions
 *
 * $Id$
 */
class tx_expressions_ContextStorage implements tx_context_ContextStorage {

	/**
	 * This method responds to a hook in class tx_context
	 * It receives a hash table representing a context and stores it into the
	 * static variable "extra" of the tx_expressions_parser class
	 *
	 * @param	array	$context: List of key-value pairs forming the context
	 * @return	void
	 */
	public function storeContext($context) {
		tx_expressions_parser::setExtraData($context);
	}
}
?>
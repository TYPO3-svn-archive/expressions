<?php

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * This class is a Expressions view helper for the Fluid templating engine. 
 *
 * In TypoScript templates there exists a function called “getText”, which makes it possible
 * to retrieve values from a great number of sources (GET/POST, TSFE, rootline, etc.). 
 * Extension "expressions" provides a library which aims to reproduce this capability, 
 * so that it can be used by developers where Typoscript is not used for whatever reasons.
 *
 * Like for the TypoScript function, an expression – at a minimum – is comprised of a key, a colon (:) and a value. 
 * Example: tsfe:id
 * 
 * Expression keys reference:
 * 
 * tsfe:      get a value from the $TSFE global variable
 * page:      get a value related to the current page, as stored in $TSFE->page
 * config:    get a value from the “config” object, as stored in $TSFE->config['config']
 * plugin:    get a TypoScript property for a plugin as stored in $GLOBALS['TSFE']->tmpl->setup['plugin.'].
 * gp:        get a value from either the $_GET or $_POST superglobal arrays
 * vars:      get a value from "internal" variables.
 * extra:     see documentation
 * date:      get values related to the current time, using formats from the PHP date() function.
 * strtotime: get a timestamp by interpreting a human-readable date.
 * session:   get values from some structure stored in the temporary session
 * feuser:      get values from FE User
 *
 * More documentation can be found at
 * http://typo3.org/extensions/repository/view/expressions/current/
 *
 * @package TYPO3
 * @subpackage tx_expressions
 * @version $Id$
 */
class Tx_Expressions_ViewHelpers_EvaluateViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Evaluates expression througout the Expression Parser
	 *
	 * Usage:
	 *
	 * Assuming that namespace has been declared as follows: 
	 * {namespace expression = Tx_Expressions_ViewHelpers}
	 *
	 * Expression:
	 * <expression:evaluate>Current page id is \{tsfe:id\}</expression:evaluate>
	 *
	 * Result:
	 * Current page id is 1
	 *
	 * @return string the evaluated string.
	 * @author Fabien Udriot <fabien.udriot@ecodev.ch>
	 * @api
	 */
	public function render() {
		$content = $this->renderChildren();
		$searches[] = '\{';
		$replaces[] = '{';
		$searches[] = '\}';
		$replaces[] = '}';
		$content = str_replace($searches, $replaces, $content);
		return tx_expressions_parser::evaluateString($content);
	}

}

?>
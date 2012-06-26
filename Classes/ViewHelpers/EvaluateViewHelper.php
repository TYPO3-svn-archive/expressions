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

require_once(t3lib_extMgm::extPath('expressions', 'class.tx_expressions_parser.php'));

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
 * fe_user:   get values from FE User
 *
 * More documentation can be found at
 * http://typo3.org/extensions/repository/view/expressions/current/
 *
 * = Examples =
 *
 * Assuming that namespace has been declared as follows:
 * {namespace expression = Tx_Expressions_ViewHelpers}
 *
 * <code title="Simple string with expression to evaluate">
 * <expression:evaluate>Current page id is \{tsfe:id\}</expression:evaluate>
 * </code>
 * <output>
 * Current page id is 1
 * (assuming the current page has uid = 1, of course)
 * </output>
 * Note the escaped curly braces, so that Fluid is not confused
 *
 * <code title="Inline notation">
 * {expression:evaluate(expression:'Current user is \{fe_user:username\}')}
 * </code>
 * <output>
 * Current user is zaphod
 * (assuming the current FE user's username is "zaphod")
 * </output>
 *
 * @package TYPO3
 * @subpackage tx_expressions
 * @version $Id$
 */
class Tx_Expressions_ViewHelpers_EvaluateViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Evaluates expression throughout the Expression Parser
	 *
	 * @param string $expression Expression to be evaluated
	 * @return string the evaluated string.
	 * @author Fabien Udriot <fabien.udriot@ecodev.ch>
	 * @author Francois Suter <typo3@cobweb.ch>
	 * @api
	 */
	public function render($expression = NULL) {
		if ($expression === NULL) {
			$expression = $this->renderChildren();
		};
			// Replace escaped curly braces
		$searches[] = '\{';
		$replaces[] = '{';
		$searches[] = '\}';
		$replaces[] = '}';
		$expression = str_replace($searches, $replaces, $expression);
			// Evaluate and return
		return tx_expressions_parser::evaluateString($expression);
	}

}

?>
<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Daniel Lienert <daniel@lienert.cc>, Michael Knoll <knoll@punkt.de>
*  All rights reserved
*
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
 * Class implements factory for configuration builder
 *
 * @package Domain
 * @subpackage Configuration
 * @author Michael Knoll <knoll@punkt.de>
 * @author Daniel Lienert <daniel@lienert.cc>
 */
class Tx_Yag_Domain_Configuration_ConfigurationBuilderFactory {

	/**
	 * Holds instance of configuration builder as singleton
	 *
	 * @var Tx_Yag_Domain_Configuration_ConfigurationBuilder
	 */
	protected static $instance = null;
	
	
	
	/**
	 * Factory method creates singleton instance of configuration builder
	 *
	 * @param array $settings
	 * @return Tx_Yag_Domain_Configuration_ConfigurationBuilder
	 */
	public static function getInstance(array $settings = null) {
		if (self::$instance === null) {
			if ($settings === null) throw new Exception('You cannot instantiate configuration builder for the first time without settings! 1293436176');
			self::$instance = new Tx_Yag_Domain_Configuration_ConfigurationBuilder($settings);
		}
		return self::$instance;
	}
	
}
?>
<?php
//require_once('class.ilDynamicLanguage.php');
require_once('./Services/Repository/classes/class.ilRepositoryObjectPlugin.php');
require_once('class.ilObjDigiLitAccess.php');

/**
 * DigiLit repository object plugin
 *
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @author  Martin Studer <ms@studer-raimann.ch>
 * @author  Gabriel Comte <gc@studer-raimann.ch>
 *
 * @version 1.0.00
 *
 */
class ilDigiLitPlugin extends ilRepositoryObjectPlugin {

	const XDGL = 'xdgl';
	/**
	 * @var ilDigiLitPlugin
	 */
	protected static $cache;


	/**
	 * @return ilDigiLitPlugin
	 */
	public static function getInstance() {
		if (!isset(self::$cache)) {
			self::$cache = new self();
		}

		return self::$cache;
	}


	/**
	 * @return string
	 */
	function getPluginName() {
		return self::getStaticPluginName();
	}


	/**
	 * @return string
	 */
	public static function getStaticPluginName() {
		return 'DigiLit';
	}


	/**
	 * @return string
	 */
	public static function getStaticPluginPrefix() {
		return self::XDGL;
	}


	//
	//	/**
	//	 * @return string
	//	 */
	//	public function getCsvPath() {
	//		$path = substr(__FILE__, 0, strpos(__FILE__, 'classes')) . 'lang/';
	//		if (file_exists($path . 'lang_custom.csv')) {
	//			$file = $path . 'lang_custom.csv';
	//		} else {
	//			$file = $path . 'lang.csv';
	//		}
	//
	//		return $file;
	//	}
	//
	//
	//	/**
	//	 * @return string
	//	 */
	//	public function getAjaxLink() {
	//		return false;
	//	}
	//
	//
	//	/**
	//	 * @param $a_var
	//	 *
	//	 * @return string
	//	 */
	//	public function txt($a_var, $direct = false) {
	//		if ($direct) {
	//			return parent::txt($a_var);
	//		}
	//
	//		return ilDynamicLanguage::getInstance($this, ilDynamicLanguage::MODE_DEV)->txt($a_var);
	//	}

}

?>

<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Attempts to update the App Server (<a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network">Jomres Syndicate Network</a>) with this installation's existence. 
	 *
	 */

class j00005language_sq_al
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

        $language_plugin_lang = 'sq-AL';

        $ePointFilepath = get_showtime('ePointFilepath');

        if (get_showtime('lang') == $language_plugin_lang) {
            require_once($ePointFilepath.$language_plugin_lang.'.php');
        }
	}
	
	

	public function getRetVals()
	{
		return null;
	}
}

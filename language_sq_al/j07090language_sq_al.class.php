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
	

class j07090language_sq_al
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
        $ePointFilepath = get_showtime('ePointFilepath');
        $eLiveSite = get_showtime('eLiveSite');

        $language_plugin_lang = 'sq-AL';

        $third_party_languages = get_showtime('third_party_languages');

        $this_language = array (
            'short_code' =>  $language_plugin_lang,  //
            'long_code' =>  'sq-AL', // Important, this is case sensitive
            'friendly_name' =>  'Albanian',
            'abs_path' => $ePointFilepath,
            'rel_path' => $eLiveSite,
            'jquery_ui_localisation_file' => 'sq'  // Configure the date picker i18n file you want to use
        );

        $third_party_languages[ $language_plugin_lang] = $this_language;
        set_showtime('third_party_languages', $third_party_languages);
	}


	public function getRetVals()
	{
		return null;
	}
}

<?php
/**
 * Part of the Auth Module
 *
 * @package    FuelPHP-KickStart
 * @version    1.0
 * @author     Daniel Berry <daniel@danielberry.me>
 * @license    MIT License
 * @copyright  2012 Daniel Berry
 * @link       http://danielberry,me
 */

namespace Profile;

/**
 * Module Controller for Auth Module
 * 
 * @package Auth
 */

class Controller_Module extends \Controller_Kickstart_Common
{

	/**
	 * set a specific template to use for the profile module
	 * @var string $template
	 */
	var $template = 'templates/profile';

	/**
	 * Setup the Controller
	 */
	public function before()
	{
		// load the user module language file
		\Lang::load('profile', true);

		// let's load user module config!
		//\Config::load('profile', true);

		parent::before();
	}
}

/** end of modules/profile/classes/controller/module.php **/

<?php
/**
 * Part of the Profile Module
 *
 * @package    FuelPHP-KickStart
 * @version    1.0
 * @author     Daniel Berry <daniel@danielberry.me>
 * @license    MIT License
 * @copyright  2012 Daniel Berry
 * @link       http://danielberry,me
 */

namespace Profile;

use Response;
use Uri;
use Config;
use Lang;
use Input;
use Session;
use Sentry;
use Validation;
use SentryUserException;
use Message;
use Kickstart;
use View;

/**
 * Update user information
 * 
 * @package Profile
 */
class Controller_Info extends Controller_Module
{
	public function action_index()
	{
		if (Input::method() === 'POST') {
			$val = Validation::forge();
			$val->add_callable('Kickstart_Validation');

			$val->add('metadata.first_name', __('auth.fields.first_name'))
				->add_rule('trim')
				->add_rule('required')
				->add_rule('name');

			$val->add('metadata.last_name', __('auth.fields.last_name'))
				->add_rule('trim')
				->add_rule('required')
				->add_rule('name');

			$val->add('email', __('auth.fields.email'))
				->add_rule('trim')
				->add_rule('required')
				->add_rule('valid_email');

			if ($val->run()) {
				try
				{
					$update = Kickstart::user()->update(array(
							'email' => $val->validated('email'),
							'metadata' => array(
								'first_name' => $val->validated('metadata.first_name'),
								'last_name'  => $val->validated('metadata.first_name')
							)
					));

					if ($update)
					{
						// the user was updated
						Message::success(__('profile.info.messages.success'));
					}
					else
					{
						// something went wrong
						Message::error(__('profile.info.messages.failed'));
					}


				}
				catch (\SentryUserException $e)
				{
					// catch errors such as incorrect old password
					Message::error($e->getMessage());
				}
			}
			else
			{
				// something went wrong - shouldn't really happen
				Message::error($val->show_errors());
				$this->data['errors'] = $val->error();
			}
		}

		// set the page title
		$this->template->set('page_title', __('profile.info.page_title'));

		// set custom content since this is not in the standard module/controller/format
		$this->template->content = View::forge('profile/info')->set('user', Kickstart::user());
	}
}

/** end of modules/profile/classes/controller/home.php **/

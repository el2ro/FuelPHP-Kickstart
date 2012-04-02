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
 * Update user's password
 * 
 * @package Profile
 */
class Controller_Password extends Controller_Module
{
	public function action_index()
	{
		if (Input::method() === 'POST') {
            $val = Validation::forge();

	        $val->add('old_password', 'Current Password')
		        ->add_rule('trim')
		        ->add_rule('required');

	        $val->add('new_password', 'New Password')
		        ->add_rule('trim')
		        ->add_rule('required')
		        ->add_rule('min_length', 8)
		        ->add_rule('max_length', 18)
		        ->add_rule('valid_string', array(array('alpha', 'numeric', 'punctuation')));

	        $val->add('retype_password', 'Retype New Password')
		        ->add_rule('trim')
		        ->add_rule('required')
		        ->add_rule('match_field', 'new_password');

            if ($val->run()) {
                try
                {
                    // update the user
                    $user = Sentry::user();

                    if ($user->change_password(Input::post('new_password'), Input::post('old_password'))) {
                        
                        // password has been updated
                        Message::error(__('profile.password.messages.success'));
                    }
                    else
                    {
                        // something went wrong
                        Message::error(__('profile.password.messages.failed'));
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
		$this->template->set('page_title', __('profile.password.page_title'));

		// set custom content since this is not in the standard module/controller/format
		$this->template->content = View::forge('profile/password')->set('user', Kickstart::user());
	}
}

/** end of modules/profile/classes/controller/home.php **/

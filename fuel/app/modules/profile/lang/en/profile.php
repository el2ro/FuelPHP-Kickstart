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

/**
 * EN Lang File for the Profile Module
 * 
 * @package  Profile
 */

return array(
	'fields' => array(
		'password'              => 'Password',
		'retype_password'       => 'Retype Password',
		'first_name'            => 'First Name',
		'last_name'             => 'Last Name',
		'email'                 => 'Email Address',
		'username'              => 'Username',
	),

	'home' => array(
		'page_title' => 'User Home',
	),

	'info' => array(
		'page_title' => 'Update Your Profile Information',
		'messages'   => array(
			'success' => '<h4 class="alert-heading">Profile Information Updated!</h4> <p>You have successfully updated your profile information.',
			'failed'  => '<h4 class="alert-heading">Oops, and Error Occured</h4> <p>An error occured while  updating your profile information. Please try again.'
		)
	),

	'password' => array(
		'page_title' => 'Change Your Password',
		'messages'   => array(
			'success' => '<h4 class="alert-heading">Password Successfully Updated!</h4> <p>You have successfully updated your password. Please use this password the next time you login.',
			'failed'  => '<h4 class="alert-heading">Oops, and Error Occured</h4> <p>An error occured while  updating your password. Please try again.'
		)
	)
);
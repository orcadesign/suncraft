<?php

	/**
	 * Filter for email update message
	 */
	
	add_filter('fryshuset_update_email_address_subject', function($subject, $user_id)
	{
		return get_bloginfo('name') . ': Verify New Email Address';
	}, 10, 2);

	add_filter('fryshuset_update_email_address_body', function($body, $user_id, $email_verification_key)
	{
		$user = get_userdata($user_id);

		if($user)
		{
			$blog_name = get_bloginfo('name');

			$body = 'Hi ' . $user->display_name . ',' .
				"\r\n" .
				"\r\n" .
				'You just updated your email address on ' . $blog_name . '.' .
				"\r\n" .
				'Please click the link below to verify your new email address:' .
				"\r\n" .
				"\r\n" .
				$page_link . '?ev=' . $email_verification_key .
				"\r\n" .
				"\r\n" .
				'Many Thanks,' .
				"\r\n" .
				$blog_name;
		}

		return $body;
	}, 10, 3);

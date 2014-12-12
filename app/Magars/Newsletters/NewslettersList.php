<?php namespace Magars\Newsletters;

interface NewslettersList {

	/**
	 * @param $list
	 * @param $email
	 * @return mixed
	 */
	public function subscribeTo($list, $email);


	/**
	 * @param $list
	 * @param $email
	 * @return mixed
	 */
	public function unsubscribeFrom($list, $email);
}
<?php namespace Magars\Newsletters\Mailchimp;

use Magars\Newsletters\NewslettersList as NewslettersListInterface;
use Mailchimp;

class NewslettersList implements NewslettersListInterface {

	/**
	 * var $mailchimp
	 */
	protected $mailchimp;

	protected $lists = [
		'MagarsSubscribers' => 'c65582a930'
	];

	/**
	 * @param $mailchimp
	 */
	function __construct(Mailchimp $mailchimp) {

		$this->mailchimp = $mailchimp;

	}


	/**
	 * Subscribe a User to a MailChimp list
	 *
	 * @param $listName
	 * @param $email
	 * @return mixed
	 */

	public function subscribeTo($listName, $email) {

		try {
			return $this->mailchimp->lists->subscribe(
				$this->lists[$listName],
				['email' => $email],
				null, //merge varaibles
				'html', //email type
				false, //require double opt in
				true //update exisitng subscribers
			);
		} catch (Mailchimp_Error $e) {
            if ($e->getMessage()) {
                $error = 'Code:'.$e->getCode().': '.$e->getMessage();
            }
        }
	}


	/**
	 * @param $list
	 * @param $email
	 * @return mixed
	 */

	public function unsubscribeFrom($list, $email) {

		return $this->mailchimp->lists->unsubscribe(
			$this->lists[$listName],
			['email' => $email],
			false, //delete member permanently
			false, //Send a goodbye email
			false //Send a unsubscribe notification email
		);

	}

}
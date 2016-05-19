<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Generic and override CI controller class. Please add common functions here.
 * @author TuanNguyen
 *
*/
class MY_Controller extends CI_Controller {

	public function __construct() {

		parent::__construct();

	}

	public function check_login(){

		if (! $this->tank_auth->is_logged_in()) {									// logged in
			redirect('/auth/login/');

		} elseif ($this->tank_auth->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		} else{
			return TRUE;
		}

	}
}
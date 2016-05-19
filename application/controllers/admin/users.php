<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Generic and override CI controller class. Please add common functions here.
 * @author TuanNguyen
 *
*/
class Users extends MY_Controller {

	public function __construct() {

		parent::__construct();

		if ($this->check_login == TRUE) {									// logged in

			redirect('/admin/dashboard/');

		}

	}

	public function index(){



	}
}
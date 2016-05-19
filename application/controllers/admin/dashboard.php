<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if ($this->check_login() == TRUE) {

			redirect('/admin/dashboard/index');

		}
	}

	public function index()
	{
		echo "ABC";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
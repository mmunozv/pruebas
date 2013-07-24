<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contratos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('contratos/contratos_view.php');
		$this->load->view('templates/footer.php');
	}

}

/* End of file contratos.php */
/* Location: ./application/controllers/contratos.php */
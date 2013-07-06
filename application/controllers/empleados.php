<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleados extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

	}

	public function ver_personal()
	{
		$this->load->model('personal/personal_model');
		$data['obtener_personal'] = $this->personal_model->traer_empleados();

		$this->load->view('personal/personal_view',$data);
	}


}

/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */
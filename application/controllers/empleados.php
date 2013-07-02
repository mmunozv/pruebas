<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleados extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('personal/personal_model');
	}

	public function ver_personal()
	{

	    $this->load->library('pagination');
	 
	    $opciones = array();
	    $desde = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	 
	    $opciones['per_page'] = 20;
	    $opciones['base_url'] = base_url().'index.php/empleados/ver_personal';
	    $opciones['total_rows'] = $this->personal_model->filas();
	    $opciones['uri_segment'] = 3;
	 
	    $this->pagination->initialize($opciones);
	 
	    $data['paginacion'] = $this->pagination->create_links();
		$data['obtener_personal'] = $this->personal_model->traer_empleados($opciones['per_page'],$desde);
		$this->load->view('personal/personal_view',$data);

	}


}

/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */
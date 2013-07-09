<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleados extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('personal/personal_model');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('personal/pruebas_view.php');
		$this->load->view('templates/footer');
	}

	public function ver_personal()
	{

	    $this->load->library('pagination');
	 
	    $opciones = array();
	    $desde = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	 
	    $opciones['per_page'] = 20;
	    $opciones['base_url'] = base_url().'empleados/ver_personal';
	    $opciones['total_rows'] = $this->personal_model->filas();
	    $opciones['uri_segment'] = 3;
	 
	    $this->pagination->initialize($opciones);
	 
	    $data['paginacion'] = $this->pagination->create_links();
		$data['obtener_personal'] = $this->personal_model->traer_empleados($opciones['per_page'],$desde);
		$this->load->view('templates/header');
		$this->load->view('personal/personal_view',$data);
		$this->load->view('templates/footer');

	}

	public function nuevo_empleado()
	{
		$this->load->view('templates/header');
		$this->load->view('personal/nuevo_empleado_view');
		$this->load->view('templates/footer');
	}

	public function recibo_nuevo_empleado()
	{
		$data = array(
			"rut" => $this->input->post('rut'),
			"nombres" => $this->input->post('nombres'),
			"apellidos" => $this->input->post('apellidos'),
			"profesion" => $this->input->post('profesion')
		);
		//print_r($data);
		$this->db->insert('empleados',$data);
		redirect( base_url(), 'refresh');
	}

	public function busca_empleado()
	{
		$this->empleados_model->busca_por_id($id);
	}

}

/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */
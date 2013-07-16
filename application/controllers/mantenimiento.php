<?php

class Mantenimiento extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mantenimiento_model');
	}

	public function index()
	{
		$data['page_title'] = "CRUD - CodeIgniter";
		$data['usuarios'] = $this->mantenimiento_model->get_contacto();
		$this->load->view('mantenimiento_view', $data);
	}

	public function alta()
	{
		$data = array(
        	'nombre' => $this->input->post('txtNombre') ,
        	'email' => $this->input->post('txtEmail') ,
        	'telefono' => $this->input->post('txtTelefono') ,
        	'direccion' => $this->input->post('txtDireccion'));
		$this->mantenimiento_model->insert($data);
		$this->index();
	}

	public function baja()
	{
		$this->mantenimiento_model->baja($this->input->post('txtNombre'));
		$this->index();
	}

	public function accion()
	{
		$data['page_title'] = "Editar CRUD";
		$data['usuario'] = $this->mantenimiento_model->obtenerContacto($this->input->post('editar'));
		$this->load->view('edita_contacto_view', $data);
	}

	public function editar()
	{
		$data = array(
			'idcontacto' => $this->input->post('idcontacto') ,
        	'nombre' => $this->input->post('txtNombre') ,
        	'email' => $this->input->post('txtEmail') ,
        	'telefono' => $this->input->post('txtTelefono') ,
        	'direccion' => $this->input->post('txtDireccion'));
		$this->mantenimiento_model->update($data);
		$this->index();
	}


}

?>
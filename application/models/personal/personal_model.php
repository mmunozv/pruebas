<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function traer_empleados()
	{
		$query = $this->db->get('empleados');
		return $query->result();
	}

}

/* End of file personal_view.php */
/* Location: ./application/models/personal/personal_view.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function filas()
	{
         $consulta = $this->db->get('empleados');
        return  $consulta->num_rows() ;
    }

	public function traer_empleados($limit,$start)
	{
		$this->db->limit($limit,$start);
		$query = $this->db->get('empleados');
		return $query->result();
	}

	public function buscar_por_id($id)
	{
		return $this->db->where('id',$id)->limit(1)->get('empleados')->row();
	}

}

/* End of file personal_view.php */
/* Location: ./application/models/personal/personal_view.php */
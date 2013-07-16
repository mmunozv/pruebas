<?php

class Mantenimiento_model extends CI_Model {

	public function Mantenimiento_model()
	{
		parent::__construct();
	}

	public function get_contacto()
	{
		return $this->db->get('contacto')->result();
	}

	public function insert($data)
	{
		$this->db->insert('contacto',$data);
	}

	public function baja ($nombre)
	{
 		$this->db->where('Nombre', $nombre);
 		$this->db->delete('contacto');
	}

	public function obtenerContacto($idContacto)
	{
		$this->db->where('idContacto = ' . $idContacto);
		return $this->db->get('contacto')->result();
	}

	public function update($data)
	{
		$this->db->where('idContacto', $data['idcontacto']);
		$this->db->update('contacto',$data);
	}

}

?>
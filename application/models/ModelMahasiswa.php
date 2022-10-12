<?php
class ModelMahasiswa extends CI_Model
{
	public function get_mahasiswa()
	{
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}
}

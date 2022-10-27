<?php
class ModelMahasiswa extends CI_Model
{
	public function get_mahasiswa()
	{
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}

	public function get_mahasiswa_byid($nim)
	{
		$this->db->where('nim', $nim);
		$query = $this->db->get('mahasiswa');
		return $query->row();
	}

	public function get_mahasiswa_bytlp($tlp)
	{
		$this->db->where('tlp', $tlp);
		$query = $this->db->get('mahasiswa');
		return $query->row();
	}
}

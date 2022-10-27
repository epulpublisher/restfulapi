<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . "libraries/Format.php";
require APPPATH . "libraries/RestController.php";

use chriskacerguis\RestServer\RestController;

class GetMahasiswa extends RestController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMahasiswa');
	}
	public function index_get()
	{
		$mhs = new ModelMahasiswa();
		$resultmhs = $mhs->get_mahasiswa();
		$this->response($resultmhs, 200);
	}

	public function MahasiswaById_get($nim)
	{
		$mhs = new ModelMahasiswa();
		$resultmhs = $mhs->get_mahasiswa_byid($nim);
		$this->response($resultmhs, 200);
	}

	public function MahasiswaByTlp_get($tlp)
	{
		$mhs = new ModelMahasiswa();
		$resultmhs = $mhs->get_mahasiswa_bytlp($tlp);
		$this->response($resultmhs, 200);
	}
}

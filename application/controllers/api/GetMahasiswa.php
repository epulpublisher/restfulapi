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
}

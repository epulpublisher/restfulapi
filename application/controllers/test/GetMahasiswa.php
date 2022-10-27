<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . "libraries/Format.php";
require APPPATH . "libraries/RestController.php";

use chriskacerguis\RestServer\RestController;

class GetMatakuliah extends RestController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelMatakuliah');
	}
}

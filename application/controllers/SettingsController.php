<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller SettingsController
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class SettingsController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->loadlayout->load('pages/settings/settings');
	}

	public function import_data()
	{
		$this->loadlayout->load('pages/settings/import');
	}

	public function upload_file()
	{
		$this->load->model('ImportModel');
		$this->load->library('csvimport');
		$path = 'imported/';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'xlsx|xls|csv';
		$config['remove_spaces'] = false;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('file-xls')) $error = ['error' => $this->upload->display_errors()];
		else $data = ['upload_data' => $this->upload->data()];


		if (empty($error) && !empty($data['upload_data']['file_name'])) $import_xls_file = $data['upload_data']['file_name'];
		else $import_xls_file = 0;

		$inputFileName = $path . $import_xls_file;
	}
}


/* End of file SettingsController.php */
/* Location: ./application/controllers/SettingsController.php */

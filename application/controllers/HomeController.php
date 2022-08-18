<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller HomeController
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

class HomeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('user_data')) {
			redirect();
		}
		$this->load->library('loadlayout');

		$this->load->model('clientesmodel');
		$this->load->model('vendedoresmodel');
		$this->load->model('productosmodel');
		$this->load->model('ordenesmodel');
	}

	public function index()
	{
		$data['clientes'] = $this->clientesmodel->buscar_registro()->num_rows();
		$data['productos'] = $this->productosmodel->buscar_registro()->num_rows();
		$data['vendedores'] = $this->vendedoresmodel->buscar_registro()->num_rows();
		$data['ganancias'] = $this->ordenesmodel->select("total")->result();
		if ($data['ganancias'][0]->total == null) $data['ganancias'][0]->total = 0;
		$this->loadlayout->load('pages/home/home', $data);
	}

	public function log_out()
	{
		$this->session->sess_destroy();
		redirect();
	}
}


/* End of file HomeController.php */
/* Location: ./application/controllers/HomeController.php */

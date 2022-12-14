<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller ClientsController
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

class ClientsController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('user_data')) {
			redirect();
		}
		$this->load->model('clientesmodel');
	}

	public function index()
	{
		$this->loadlayout->load('pages/clients/clients');
	}

	public function load_clients()
	{
		if ($this->input->is_ajax_request()) {
			$data = $this->clientesmodel->buscar_registro()->result();

			$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($data));
		} else show_404();
	}
}


/* End of file ClientsController.php */
/* Location: ./application/controllers/ClientsController.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller SellersController
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

class SellersController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('user_data')) {
			redirect();
		}
		$this->load->model('vendedoresmodel');
	}

	public function index()
	{
		$this->loadlayout->load('pages/sellers/sellers');
	}

	public function load_sellers()
	{
		if ($this->input->is_ajax_request()) {
			$data = $this->vendedoresmodel->buscar_registro()->result();

			$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($data));
		} else show_404();
	}
}


/* End of file SellersController.php */
/* Location: ./application/controllers/SellersController.php */

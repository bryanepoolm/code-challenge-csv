<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller OrdersController
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

class OrdersController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ordenesmodel');
	}

	public function index()
	{
		$this->loadlayout->load('pages/orders/orders');
	}

	public function load_orders()
	{
		if ($this->input->is_ajax_request()) {
			$data = $this->ordenesmodel->select_ordenes();
			if ($data->num_rows() > 0) $data = $data->result();
			$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($data));
		} else show_404();
	}
}


/* End of file OrdersController.php */
/* Location: ./application/controllers/OrdersController.php */

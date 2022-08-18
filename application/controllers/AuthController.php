<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller AuthController
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

class AuthController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->has_userdata('user_data')) {
			redirect('home');
		}

		$this->load->library('form_validation');
		$this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view('layouts/authlayout');
	}

	public function login()
	{
		if ($this->input->is_ajax_request()) {

			$this->form_validation->set_rules('username', 'Nombre de usuario', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');

			if ($this->form_validation->run()) {
				$username = $this->input->post('username', true);
				$password = md5($this->input->post('password', true));

				if ($this->auth_model->auth_login($username, $password))
					$this->output->set_status_header(200)->set_content_type('text/plain')->set_output('Sesion iniciada');
				else
					$this->output->set_status_header(401)->set_content_type('text/plain')->set_output('Usuario o Contraseña invalidos');
			} else {
				$this->output->set_status_header(400)->set_content_type('application/json')->set_output(json_encode(
					[
						'username' => form_error('username'),
						'password' => form_error('password')
					]
				));
			}
		} else show_404();
	}
}


/* End of file AuthController.php */
/* Location: ./application/controllers/AuthController.php */

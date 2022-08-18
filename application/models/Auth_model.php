<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Auth_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth_model extends CI_Model
{

	private $table;
	// ------------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
		$this->table = "usuarios";
	}

	// ------------------------------------------------------------------------


	// ------------------------------------------------------------------------
	public function auth_login($username, $password)
	{
		$data = $this->db->get_where($this->table, ['usuario' => $username, 'contrasena' => $password]);
		if ($data->num_rows() > 0) {
			$data = $data->row();
			$data->password = null;
			$data->salt = null;
			$this->session->set_userdata('user_data', $data);
			return true;
		} else return false;
	}

	// ------------------------------------------------------------------------

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model ImportModel
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

class ImportModel extends CI_Model
{

	// ------------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
	}

	// ------------------------------------------------------------------------


	// ------------------------------------------------------------------------
	public function insertar_batch(string $tabla, array $data): bool
	{
		$this->db->insert($tabla, $data);
		if ($this->db->insert_id() > 0) return true;
		else return false;
	}

	// ------------------------------------------------------------------------

}

/* End of file ImportModel.php */
/* Location: ./application/models/ImportModel.php */

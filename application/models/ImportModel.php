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
	public function insertar_batch(string $tabla, array $data): void
	{
		$this->db->insert_batch($tabla, $data);
	}

	public function buscar_registro(string $tabla, array $condicion = [])
	{
		return $this->db->get_where($tabla, $condicion);
	}

	// ------------------------------------------------------------------------

}

/* End of file ImportModel.php */
/* Location: ./application/models/ImportModel.php */

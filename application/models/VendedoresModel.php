<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model VendedoresModel
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

class VendedoresModel extends CI_Model
{

	private $table;

	public $id;
	public $nombre;
	public $direccion;
	// ------------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
		$this->table = 'vendedores';
	}

	// ------------------------------------------------------------------------


	// ------------------------------------------------------------------------
	public function insertar_batch(array $data): void
	{
		$this->db->insert_batch($this->table, $data);
	}

	public function buscar_registro(array $condicion = [])
	{
		return $this->db->get_where($this->table, $condicion);
	}

	// ------------------------------------------------------------------------

}

/* End of file VendedoresModel.php */
/* Location: ./application/models/VendedoresModel.php */

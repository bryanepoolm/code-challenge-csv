<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model ProductosModel
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

class ProductosModel extends CI_Model
{

	private $table;

	public $id;
	public $nombre;
	// ------------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
		$this->table = 'productos';
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

/* End of file ProductosModel.php */
/* Location: ./application/models/ProductosModel.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model OrdenesModel
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

class OrdenesModel extends CI_Model
{
	private $table;

	public $id;
	public $cliente_id;
	public $producto_id;
	public $vendedor_id;
	public $cantidad;
	public $total;
	// ------------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
		$this->table = 'ordenes';
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

/* End of file OrdenesModel.php */
/* Location: ./application/models/OrdenesModel.php */

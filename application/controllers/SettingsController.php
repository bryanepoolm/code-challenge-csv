<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Controller SettingsController
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

class SettingsController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('user_data')) {
			redirect();
		}
	}

	public function index()
	{
		$this->loadlayout->load('pages/settings/settings');
	}

	public function import_data()
	{
		$this->loadlayout->load('pages/settings/import');
	}

	public function upload_file()
	{
		$this->load->model('ImportModel');

		$this->load->model('clientesmodel');
		$this->load->model('ordenesmodel');
		$this->load->model('productosmodel');
		$this->load->model('vendedoresmodel');

		$this->load->library('csvimport');
		$path = 'imported/';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'xlsx|xls|csv';
		$config['remove_spaces'] = true;
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('file-xls')) $error = ['error' => $this->upload->display_errors()];
		else $data = ['upload_data' => $this->upload->data()];


		if (empty($error) && !empty($data['upload_data']['file_name'])) $import_xls_file = $data['upload_data']['file_name'];
		else $import_xls_file = 0;

		$inputFileName = $path . $import_xls_file;

		$file_data = $this->csvimport->get_array($inputFileName);
		$clientes = [];
		$vendedores = [];
		$productos = [];
		$ordenes = [];
		foreach ($file_data as $index => $orden) {

			//Busqueda de clientes, si el nombre del cliente ya se encuentra registado, salta a la busqueda de un nuevo registro
			if (isset($orden['Cliente']) && !empty($orden['Cliente']) && array_search($orden['Cliente'], array_column($clientes, 'nombre')) === false) {
				$clientes[] = [
					'nombre' => $orden['Cliente'],
				];
			}
			//Busqueda de productos, si el producto ya existe en la base de datos, salta la busqueda de un nuevo producto
			if (isset($orden['Descripción del Producto']) && !empty($orden['Descripción del Producto']) && array_search($orden['Descripción del Producto'], array_column($productos, 'nombre')) === false) {
				$productos[] = [
					'nombre' => $orden['Descripción del Producto'],
					'precio' => $orden['Precio por pieza']
				];
			}
			//Busqueda de vendedores, si el vendor ya existe en la base de datos, salta la busqueda de un nuevo vendedor
			if (isset($orden['Nombre del Vendedor']) && !empty($orden['Nombre del Vendedor']) && array_search($orden['Nombre del Vendedor'], array_column($vendedores, 'nombre')) === false) {
				$vendedores[] = [
					'nombre' => $orden['Nombre del Vendedor'],
					'direccion' => $orden['Diección del vendedor']
				];
			}
		}

		$this->clientesmodel->insertar_batch($clientes);
		$this->vendedoresmodel->insertar_batch($vendedores);
		$this->productosmodel->insertar_batch($productos);


		foreach ($file_data as $key => $value) {

			$cliente_id = $this->clientesmodel->buscar_registro(['nombre' => $value['Cliente']])->row()->id;
			$producto_data = $this->productosmodel->buscar_registro(['nombre' => $value['Descripción del Producto']])->row();
			$vendedor_id = $this->vendedoresmodel->buscar_registro(['nombre' => $value['Nombre del Vendedor']])->row()->id;
			//Busqueda de ordenes
			$ordenes[] = [
				'cliente_id' => $cliente_id,
				'producto_id' => $producto_data->id,
				'vendedor_id' => $vendedor_id,
				'cantidad' => $value['Numero de piezas'],
				'total' => $value['Numero de piezas'] * $producto_data->precio
			];
		}
		/* echo '<pre>';
		die(var_dump($ordenes)); */

		$this->ordenesmodel->insertar_batch($ordenes);
	}
}


/* End of file SettingsController.php */
/* Location: ./application/controllers/SettingsController.php */

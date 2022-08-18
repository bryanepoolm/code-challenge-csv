<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller InventaryController
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

class InventaryController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->loadlayout->load('pages/inventary/inventary');
	}
}


/* End of file InventaryController.php */
/* Location: ./application/controllers/InventaryController.php */

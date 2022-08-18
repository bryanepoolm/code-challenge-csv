<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Libraries LoadLayout
 *
 * Se encarga de ejecutar la carga de una vista, en base a un layout
 * previamente establecido en las variables
 * 
 * @package		ImportIt
 * @category	Libraries
 * @author    Bryan E Pool Mercado <bryanedilberto@hotmai.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     string $layout
 * @return    void
 *
 */

class LoadLayout
{

	public $layout = 'mainLayout';
	public $layouts_folder = 'layouts/';
	public $content_area = 'content';
	public $prepend_area = 'prepend';
	public $append_area = 'append';
	private $CI;

	var $template_data = [];

	// ------------------------------------------------------------------------

	public function __construct()
	{
		$this->CI = &get_instance();
		$this->template_data[$this->prepend_area] = null;
		$this->template_data[$this->append_area] = null;
		/* LOAD YOUT CUSTOM SETTINGS */
	}

	// ------------------------------------------------------------------------


	// ------------------------------------------------------------------------

	public function load(String $view, array $data = [], bool $return = false)
	{
		$this->template_data[$this->content_area] = $this->CI->load->view($view, $data, TRUE);

		$this->CI->load->view("{$this->layouts_folder}{$this->layout}", $this->template_data);
	}


	// ------------------------------------------------------------------------
}

/* End of file LoadLayout.php */
/* Location: ./application/libraries/LoadLayout.php */

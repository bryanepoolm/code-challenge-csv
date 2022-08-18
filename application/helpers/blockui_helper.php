<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Helpers blockui_helper
 *
 * This Helpers for ...
 * 
 * @category  Helpers
 * @author    Bryan E. Pool Mercado <bryanedilberto@hotmail.com>
 *
 */

// ------------------------------------------------------------------------

if (!function_exists('Block')) {
	/**
	 * Loading Overlay
	 *
	 * Loading Overlay es un helper utilizando la libreria de bloqueo de interfaz de gasparesganga
	 * Este helper requiere que ya tengas referenciada la libreia por CDN en una etiqueta Script
	 * <script src='https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js'></script>
	 * El helper debe recibir un array con las configuraciones que desee establecidas en la documentacion de Gaspare Sganga
	 * https://gasparesganga.com/labs/jquery-loading-overlay/
	 * 
	 * @param mode='show'|'hide'
	 */
	function Block($mode = 'show')
	{
		$script = '
		$.LoadingOverlay("' . $mode . '", {
          background: "rgba(255, 255, 255, 0.8)",
          image: "",
          size: 10,
          fontawesome: "fa fa-spinner fa-spin",
          fontawesomeColor: "#202020"
      });
    ';
		return $script;
		/* return ''; */
	}
}

if (!function_exists('Block_element')) {
	/**
	 * Loading Overlay
	 *
	 * Loading Overlay es un helper utilizando la libreria de bloqueo de interfaz de gasparesganga
	 * Este helper requiere que ya tengas referenciada la libreia por CDN en una etiqueta Script
	 * <script src='https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js'></script>
	 * El helper debe recibir un array con las configuraciones que desee establecidas en la documentacion de Gaspare Sganga
	 * https://gasparesganga.com/labs/jquery-loading-overlay/
	 * 
	 * @param mode='show'|'hide'
	 */
	function Block_element($mode = 'show', $selector = null)
	{
		$script = '$("#' . $selector . '").LoadingOverlay("' . $mode . '", {
          background: "rgba(0, 0, 0, 0.5)",
          image: "",
          size: 10,
          fontawesome: "fa fa-spinner fa-spin",
          fontawesomeColor: "#FFFFFF"
      });
    ';
		return $script;
		//return '';
	}
}

// ------------------------------------------------------------------------

/* End of file LoadingOverlay_helper.php */
/* Location: ./application/helpers/LoadingOverlay_helper.php */

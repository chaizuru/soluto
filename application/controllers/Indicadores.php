<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indicadores extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	$this->load->helper('url');
		$this->load->model('indicador_model','indicador');
		$this->indicador->obtener_indicador('uf','28-08-2020');
		echo site_url('index.php?c=Indicadores&m=retornar_valor');

		$this->load->view('indicadores');
	}
	public function retornar_valor(){
		$this->load->helper('array');
		$tipo = $_GET['tipo'];
		$fechadesde= $_GET['fechadesde'];
		$fechahasta= $_GET['fechahasta'];
		$this->load->model('indicador_model','indicador');
		$this->indicador->obtener_indicador($tipo,$fechadesde,$fechahasta);
	}
	
}

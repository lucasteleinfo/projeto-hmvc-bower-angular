<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'array' );
		$this->load->library ( 'form_validation' );
	}

	public function index() {
		$dados = array (
				'titulo' => 'Projeto Padrão',
				'tela' => ''
		);
		
		$this->load->view ( 'v_home', $dados );
	}
}

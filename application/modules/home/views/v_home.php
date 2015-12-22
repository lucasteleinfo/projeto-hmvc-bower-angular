<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CABEÇALHO PRINCIÀL
$this->load->view ( 'includes/home/v_header' );

// MENU PAGINA USUARIOS
//$this->load->view ( 'includes/usuarios/menu' );

// Telas CRUD
if ($tela != '') {
	$this->load->view ( 'telas/home/' . $tela );
} else {
	$this->load->view ( 'telas/home/v_body' );
}

// RODAPE PRINCIPAL
$this->load->view ( 'includes/home/v_footer' );
?>
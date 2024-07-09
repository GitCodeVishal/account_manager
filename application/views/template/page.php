<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('template/header');
$this->load->view($page);
$this->load->view('template/footer');

?>
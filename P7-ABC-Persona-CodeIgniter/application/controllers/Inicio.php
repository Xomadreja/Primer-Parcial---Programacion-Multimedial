<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Persona_model");
	}
	public function index()
	{
		$data= array("data"=>$this->Persona_model->getPersonas());
		$this->load->view('index',$data);
		//print_r($data);
	}
	public function delete($id)
	{
		$this->Persona_model->delete($id);
		$this->session->set_flashdata('success', 'Se elimino correctamente');
		redirect(base_url()."inicio");
	}
}

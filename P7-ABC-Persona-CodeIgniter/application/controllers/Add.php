<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Persona_model");
	}
	public function index()
	{
		$this->load->view('add');
	}
	public function save()
	{
		
		$fullName=$this->input->post("fullName");
		$ci=$this->input->post("ci");
		$fechaNac=$this->input->post("fechaNac");
		$fechaNac = date('Y-m-d', strtotime(str_replace('-', '/', $fechaNac)));
		$dpto=$this->input->post("dpto");
		$data =array("ci"=>$ci,"nombreCompleto"=>$fullName,"fechaNac"=>$fechaNac,"dpto"=>$dpto);
		$this->Persona_model->save($data);
		$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
		redirect(base_url()."inicio");
	}
}

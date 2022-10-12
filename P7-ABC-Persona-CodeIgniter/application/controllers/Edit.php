<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Persona_model");
	}
	public function index($id)
	{
        $data=$this->Persona_model->getPersona($id);
        //print_r ($data);
		$this->load->view('edit',$data);
	}
	public function update($id)
	{
		
		$fullName=$this->input->post("fullName");
		$ci=$this->input->post("ci");
		$fechaNac=$this->input->post("fechaNac");
		$fechaNac = date('Y-m-d', strtotime(str_replace('-', '/', $fechaNac)));
		$dpto=$this->input->post("dpto");
		$data =array("ci"=>$ci,"nombreCompleto"=>$fullName,"fechaNac"=>$fechaNac,"dpto"=>$dpto);

		$this->Persona_model->update($data,$id);
		$this->session->set_flashdata('success', 'Los datos se editaron correctamente');
		redirect(base_url()."inicio");
	}
}

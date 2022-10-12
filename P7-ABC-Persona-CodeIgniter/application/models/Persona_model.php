<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends CI_Model{
    public function save($data){
         $this->db->query("ALTER TABLE persona AUTO_INCREMENT 1");
        $this->db->insert("persona",$data);
    }
    public function getPersonas(){
        $this->db->select("*");
        $this->db->from("persona");
        $results=$this->db->get();
        return  $results->result();
    }
    public function getPersona($id){
        $this->db->select("*");
        $this->db->from("persona");
        $this->db->where("id",$id);
        $results=$this->db->get();
        return  $results->row();
    }
    public function update($data,$id){
         $this->db->where("id",$id);
        $this->db->update("persona",$data);
    }
    public function delete($id){
         $this->db->where("id",$id);
        $this->db->delete("persona");
    }
}

<?php

class Admin_model extends CI_Model{
     public function fetch() {
             $sql = $this->db->get_where('users','id',1);
             return $sql->result();
         }
}

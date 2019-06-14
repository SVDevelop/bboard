<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Boards extends MY_Model {

    public function __construct()
    {
        $this->lang->load('user_lang');
        $this->load->library('ion_auth');
    }    

    public function test_auth()
    {
        return $this->ion_auth->user()->row();
    }


    public function get_user_info($info, $from, $id)
    {
        $this->db->select($info);
        $this->db->from($from);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
        // $query->num_rows();
    }


    public function get_myboards_card($id)
    {
        $this->db->select(array('name','description','shared', 'created_at', 'updated_at'));
        $this->db->from('boards');
        $this->db->where('owner_id', $id);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    

}
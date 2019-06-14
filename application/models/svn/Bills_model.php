<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Bills_model extends MY_Model {

    public function __construct()
    {

    }    

    public function get_bills($status)
    {
        if ($status=='all') {
            $query = $this->db->get('bills');
        }else{
            $query = $this->db->get_where('bills', array('status' => strval($status)));
        }
        
        return $query->result_array();
    }

    public function add_bill($bill_data)
    {
        if ($this->db->insert('bills', $bill_data)) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit_bill($bill_data, $id)
    {
        $this->db->where('id', $id);
        if ($this->db->update('bills', $bill_data)) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete_bill($id)
    {
        $this->db->where('id', $id);

        if ($this->db->delete('bills')) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function ajax_get_bills_pages()
    {
        return $max_page = ceil($this->db->count_all('bills')  / 5);
    }

    public function ajax_get_bill($id)
    {
        $query = $this->db->get_where( 'bills', array( 'id' => $id ) );
        
        return $query->row();
    }

    public function ajax_get_bills($page)
    {
        $max_page = ceil($this->db->count_all('bills')  / 5);
        if (($page <=0) || ($page > $max_page)) {
            $page = 1;
        }
        // if ($status=='all') {
        //     $query = $this->db->get('bills');
        // }else{
        //     $query = $this->db->get_where('bills', array('status' => strval($status)));
        // }
        $current = $page * 5 - 5;
        $query = $this->db->get('bills', 5, strval($current));
        // echo "current page is ".$current;
        // print_r($query->result_array());
        return $query->result();
    }

}
<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Halloween_model extends MY_Model {

    public function __construct()
    {

    }

    public function get_random_prediction($lang)
    {
        $query = $this->db->where('language', $lang)
                ->order_by('id','RANDOM')
                ->limit(1)
                ->get('predictions');
        return $query->row();
    }    

    public function get_prediction($id)
    {
        $query = $this->db->get_where( 'predictions', array( 'id' => $id ) );
        
        return $query->row();
    }

    public function get_predictionfile_name()
    {
        $query = $this->db->select('id')
                ->order_by('id','DESC')
                ->limit(1)
                ->get('predictions');
        return $query->row('id')+1;
    }


    public function add_prediction($prediction_data)
    {
        if ($this->db->insert('predictions', $prediction_data)) {
            return TRUE;
        }else{
            return FALSE;
        }
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
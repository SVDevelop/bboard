<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Boards_handler extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->logged_in()===TRUE)
        {
            redirect('/');
        }
        $this->language_check();
        $this->load->model('user/boards', 'user_board');
        $this->check_path = APPPATH.'views/bboard/user/';
        $this->template_path = 'bboard/user/';
        $this->lang->load('user', $this->session->userdata('lang') );
        $this->lang->load('forms', $this->session->userdata('lang') );
        $this->user_data = $this->ion_auth->user()->row();
        $this->data['userscripts'] = [];
        $this->allowed_boards_number = $this->user_board->get_user_info( 'allowed_boards', 'users', $this->user_data->id);
    }

    public function test()
    {
        $this->data['received_model_userdata'] = $this->user_board->test_auth();
        $this->data['post_data'] = $this->input->post();
        $this->render(NULL, 'json');
    }

    public function add_board()
    {

        if ( $this->input->is_ajax_request() )
        {
            $this->form_validation->set_rules('name', lang('forms_board_name_field'), 'trim|required');
            $this->form_validation->set_rules('description', lang('forms_board_description_field'), 'trim|required');

            if ($this->form_validation->run() === TRUE )
            {
                if ( $this->allowed_boards_number == 0 )
                {
                    $this->data['status'] = 0;
                    $this->data['message'] = validation_errors();
                }else{

                }

                $this->data['status'] = 1;                   
            }else{
                $this->data['status'] = 0;
                $this->data['message'] = validation_errors();
            }

            $this->render(NULL, 'json');
        }else{
            $this->output->set_status_header('400');
        }

    }

     
}
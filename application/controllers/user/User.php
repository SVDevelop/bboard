<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

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

    public function index()
    {
        if ( ! file_exists($this->check_path.'index.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        
        $this->data['userscripts'][] = 'boards/favourite_handler';
        $this->data['userscripts'][] = 'boards/private_boards_handler';
        $this->data['userscripts'][] = 'boards/modal_handler';


        if ( $this->input->is_ajax_request() && $this->input->post() ) {
            $this->data['message'] = 'success message it is';
            $this->render(NULL, 'json');
        }

        if( !$this->input->is_ajax_request() )
        {   
            $this->data['allowed_boards_number'] = $this->allowed_boards_number;

            // echo "<br />";
            $this->data['target'] = $this->uri->segment(2);

            if ($this->data['target'] == 'myboards') {
                $this->data['myboards'] = $this->user_board->get_myboards_card( $this->user_data->id );
            }
            // print_r('only get once');
            // echo();
            $this->render($this->template_path.'index.php', 'logined');
        }
        
        // $this->load->view($this->template_path.'index.php', $this->data);
    }

    public function myboard()
    {
        if ( ! file_exists($this->check_path.'index.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->lang->load('user', $this->session->userdata('lang') );
        $this->data['userscripts'][] = 'boards/private_handler';
        $this->render($this->template_path.'myboard.php', 'logined');
        // $this->load->view($this->template_path.'index.php', $this->data);
    }

    public function get_user_data()
    {
        if ( ! file_exists($this->check_path.'index.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        if(!$this->ion_auth->logged_in()===TRUE)
        {
            $this->output->set_status_header('400');
        }else if( !$this->input->post('data') ){

            $this->data['status'] = 0;
            $this->data['username'] = $this->ion_auth->user()->row()->username;
            
        }else{
            $user = $this->ion_auth->user()->row();
            $this->data['userdata'] = [];
            foreach ($this->input->post('data') as $item) {
                $this->data['userdata'][$item] = $user->$item;
            }
            
            $this->data['status'] = 1;
        }

        $this->render(NULL, 'json');
        // $this->load->view($this->template_path.'index.php', $this->data);
    }
     
}
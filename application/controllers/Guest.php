<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->language_check();
        // $this->load->model('halloween_model');
        $this->check_path = APPPATH.'views/bboard/guest/';
        $this->template_path = 'bboard/guest/';
        $this->lang->load('guest', $this->session->userdata('lang') );
    }

    public function index()
    {

        if ( ! file_exists($this->check_path.'index.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        

        if($this->ion_auth->logged_in()===TRUE)
        {
            $this->render($this->template_path.'index.php', 'logined');
        }else{
            $this->render($this->template_path.'index.php');
        }
        // $this->load->view($this->template_path.'index.php', $this->data);
    }

    public function test()
    {
        // if ( ! file_exists($this->check_path.'index.php'))
        // {
        //     // Whoops, we don't have a page for that!
        //     show_404();
        // }

        echo " config lang is ".$this->config->config['language'];
        echo "<br />";
        echo $this->session->userdata('lang')."  session lang is  ";
        print_r($this->session->userdata() );
        echo "<br> string <br/>";
        echo uri_string();
        echo "<br> string <br/>";

        

        
        // $this->render($this->template_path.'index.php');
        // $this->load->view($this->template_path.'index.php', $this->data);
    }

    public function testHtml()
    {
        $this->lang->load('guest_index', $this->session->userdata('lang') );
        $this->render($this->template_path.'index.php');
    }

    // public function ajaxHandler()
    // {
    //     $get_request = $this->input->get('request_type');
    //     if ($get_request)
    //     {
    //         switch ($get_request)
    //         {
    //             case 'get_language':
    //                 switch ($this->session->userdata('lang')) {
    //                     case 'english':
    //                         $short_lang = 'en';
    //                     break;

    //                     case 'russian':
    //                         $short_lang = 'ru';
    //                     break;

    //                     default:
    //                         $short_lang = 'en';
    //                     break;
    //                 }
    //                 $this->data['language'] = $short_lang;
    //             break;

    //             case 'change_language':
                
    //                 switch ($this->input->get('lang')) {
    //                     case 'en':
    //                         $lang = 'english';
    //                     break;

    //                     case 'ru':
    //                         $lang = 'russian';
    //                     break;

    //                     default:
    //                         $lang = 'english';
    //                     break;
    //                 }

    //                 $this->language_change($lang);
    //                 $this->data['language'] = $this->session->userdata('lang');
                    
    //             break;

    //             default:
    //                 $this->output->set_status_header('400');
    //                 break;
    //         }
    //     }

    //     $this->render(NULL, 'json');
    // }

     
}
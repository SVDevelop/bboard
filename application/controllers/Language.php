<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function ajaxLanguageGet()
    {
        if ( $this->input->is_ajax_request() ){
            // $this->data['lang_prefix'] ;
            // $this->data['lang'];

            $this->render(NULL, 'json');
        }else{
            $this->output->set_status_header('400');
        }
        // if( !$this->input->is_ajax_request() )
        // {}       
    }
    
    public function languageChange()
    {
        if ( $this->input->is_ajax_request() && $this->input->post('language') ){
            if ( empty( $this->input->post('url') ) ) {
                $this->data['new_location'] = $this->language_change( $this->input->post('language'), TRUE);
            }else{
                $this->data['new_location'] =  $this->language_change( $this->input->post('language'), TRUE, $this->input->post('url') );
            }

            $this->render(NULL, 'json');
        }else{
            $this->output->set_status_header('400');
        }
        if( !$this->input->is_ajax_request() )
        {
            if ( empty( $this->input->post('url') ) ) {
                $this->language_change( $this->input->post('language'), FALSE);
            }else{
                $this->language_change( $this->input->post('language'), FALSE, $this->input->post('url') );
            }
        }
    }     
}
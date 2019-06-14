<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

  protected $data = array();

  function __construct()
  {
    parent::__construct();

    $this->load->helper( array('cookie', 'language','url', 'form', 'html','date') );
    $this->load->library( array('session','form_validation') );
    $this->load->database();
    $this->load->library('ion_auth');
    // $this->language = $this->config->config['language']; 
    if ( !$this->session->has_userdata('lang') )
    {
      $this->session->set_userdata('lang', $this->config->config['language']);
    }
    if ( !$this->session->has_userdata('lang_prefix') )
    {
      $this->session->set_userdata('lang_prefix', $this->config->config['languages'][ $this->config->config['language'] ]);
    }
    $this->data['lang'] = $this->session->userdata('lang');
    $this->data['lang_prefix'] = $this->session->userdata('lang_prefix');
    $this->lang->load('menu', $this->session->userdata('lang') );
    $this->lang->load('auth');
  }

  protected function render($the_view = NULL, $template = NULL)
  {
    if($template == 'json' || $this->input->is_ajax_request())
    {
      header('Content-Type: application/json');
      echo json_encode($this->data);
    }elseif(is_null($template)){
      $this->load->view('templates/header', $this->data);
      $this->load->view($the_view, $this->data);
      $this->load->view('templates/footer', $this->data);
    }elseif($template == 'singlepage'){
      $this->load->view($the_view, $this->data);
    }else{
      $this->load->view('templates/header_'.$template, $this->data);
      $this->load->view($the_view,$this->data);
      $this->load->view('templates/footer_'.$template, $this->data);
    }
  }

  public function language_change($lang, $ajax = FALSE, $url = FALSE)
  {
    
    // switch ( $lang ) {
    //   case 'english':
    //     $short_lang = 'en';
    //   break;

    //   case 'russian':
    //     $short_lang = 'ru';
    //   break;

    //   default:
    //     $short_lang = 'en';
    //     $lang = 'english';
    //   break;
    // }

    if ( !isset( $this->config->config['languages'][ $lang ] ) ) {
      $lang = 'english';
    }    
      
    $short_lang = $this->config->config['languages'][ $lang ];

    $this->session->set_userdata('lang', $lang);
    $this->config->set_item('language', $lang);
    $this->session->set_userdata('lang_prefix', $short_lang);

    $short_lang .= '/';

    if ($ajax == FALSE) {
      redirect( base_url( $short_lang.$this->uri->segment(2) ) );
    }else{
      if ($url == FALSE) {
        return prep_url( base_url( $short_lang ) );
      }else{
        return prep_url( base_url( $short_lang.$url ) );
      }
    }
    // $this->config->config['language'] =$language;
  }

  //call this at every construct controller
  protected function language_check()
  {
    if ( ( $this->config->config['language'] != $this->session->userdata('lang') ) || ( $this->config->config['languages'][ $this->session->userdata('lang') ] != $this->session->userdata('lang_prefix') ) ) {
      // $this->language_change( $this->session->userdata('lang') ); #$this->config->config['language'] 

      if ( $this->input->is_ajax_request() ) {
        $this->language_change( $this->session->userdata('lang'), TRUE );
      }else{
        $this->language_change( $this->session->userdata('lang') );
      } 
    }
  }
}
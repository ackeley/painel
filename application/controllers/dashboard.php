<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller 
{
  
    public function __construct() {
        parent::__construct();        
    }
     
    public function index(){
      
        set_tema('header', 'painel/header');
        set_tema('footer', 'painel/footer');
        set_tema('template', 'painel/index');
        load_template();
    }   
}
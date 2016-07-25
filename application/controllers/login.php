<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

    public function index()
	{
            $this->load->helper('url');
            $this->load->helper('funcoes');
            $this->load->helper('form');
//            load_css('foundation');
//            load_js('vendor/jquery');
            $this->load->view('login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

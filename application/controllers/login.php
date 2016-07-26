<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

    public function index()
	{
            set_tema('css', load_css('normalize'),false);   
            set_tema('css', load_css('foundation.min'),false);   
            set_tema('template', 'login'); 
            load_template();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

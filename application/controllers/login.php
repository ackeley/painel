<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("usuario_model");
    }

    public function index()
	{
            set_tema('css', load_css('normalize'),false);   
            set_tema('css', load_css('foundation.min'),false);   
            set_tema('template', 'login'); 
            load_template();
	}
        public function logar(){
           $dados_logar = array(
               "email"=> get_data_form('email'),
               "senha"=> md5(get_data_form('senha'))
           );
          $logar = $this->usuario_model->logar($dados_logar);
          if($logar):
              $this->session->set_userdata('usuario_logado', $logar);
              redirect('dashboard');
          else:
             
          endif;
        }
        public function sair(){
            $this->session->unset_userdata('usuario_logado');
            redirect('login');
        }
                
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

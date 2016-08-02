<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller 
{
  
    public function __construct() {
        parent::__construct();   
        $this->load->model('usuario_model');
    }
     
    public function index(){
      
        init_dashboard();
        load_template();
    }   
    
    public function users(){
        init_dashboard();
        $parametro = get_data_form('acao', 'get');
        switch($parametro){
            case 'cadastrar':
                set_tema('template', 'painel/usuarios/cadastro');
                break;
            case 'insert':
                $this->form_validation->set_rules('nome','nome','required');
                $this->form_validation->set_rules('login','login','required|callback_verfica_existe_login');
                $this->form_validation->set_rules('email','email','required|callback_verfica_existe_email');
                $this->form_validation->set_rules('senha','senha','required');
                $this->form_validation->set_rules('re-senha','repita a senha', 'required|matches[senha]');

                $sucesso = $this->form_validation->run();
                if($sucesso):
                    $dados = array(
                        "nome_usuario"=>  get_data_form('nome'),
                        "login_usuario"=>  get_data_form('email'),
                        "email_usuario"=>  get_data_form('login'),
                        "senha_usuario"=>  md5(get_data_form('senha')),
                        "senha_no_crip"=>  get_data_form('senha'),                      
                        "key_usuario"=>  sha1(time().date('Ymd').md5(time()))
                    );
                $insert_user = $this->usuario_model->insert($dados);
                if($insert_user):
                    set_notification('Usuário cadastrado com sucesso');
                    redirect('dashboard/users');
                else:
                    set_notification('Não foi possivel cadastrar usuário');
                    redirect('dashboard/users');
                endif;
                else:
                      set_tema('template', 'painel/usuarios/cadastro');                
                endif;
            break;
            default:
                set_tema('template', 'painel/usuarios/inicio_usuarios');
                break;
        }
        load_template();
    }
    public function verfica_existe_email($email){
        
        $get_email = $this->usuario_model->verifica_campo('email_usuario',$email);        
          
        if($get_email):          
            $this->form_validation->set_message('verfica_existe_email','Email já cadastrado no sistema');
            return FALSE;
        else:
            return TRUE;           
        endif;
    }
    
    public function verfica_existe_login($login){
        
        $get_login = $this->usuario_model->verifica_campo('login_usuario',$login);        
          
        if($get_login):          
            $this->form_validation->set_message('verfica_existe_login','Ops! Parece que já existe um usuário utilizando este login.');
            return FALSE;
        else:
            return TRUE;           
        endif;
    }
}
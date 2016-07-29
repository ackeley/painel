<?php

class usuario_model extends MY_Model{
    public $_table = "usuarios";
    public $primary_key = "id_usuario";
    protected  $return_type = 'array';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function logar(array $dados){

        $get_login = $this->get_by(array(
            "email_usuario" => $dados['email'],
            "senha_usuario" => $dados['senha']
        ));
        
        if($get_login != NULL):
            return $get_login;
        else:
            return FALSE;
        endif;
    }
    
    
}


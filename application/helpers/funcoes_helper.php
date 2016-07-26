<?php

function load_css($arquivo=null,$media='screen',$import=FALSE, $echo=FALSE)
{
     $css = '';
    if($import == TRUE){
        $css =  '<link rel="stylesheet" href="'.$arquivo.'" media="'.$media.'"/>'."\n";
    }
    else{
       
        if($arquivo != NULL){
            if(file_exists('./assets/css/'.$arquivo.'.css')){
                $css = base_url('assets/css/'.$arquivo.'.css');
            }
            if($echo == TRUE){
                echo '<link rel="stylesheet" href="'.$css.'" media="'.$media.'"/>'."\n";
            }else{
                return '<link rel="stylesheet" href="'.$css.'" media="'.$media.'"/>'."\n";
            }
        }else {
         echo 'Arquivo não encontrado';   
        }
    }
} # fim load css.

function load_js($arquivo=NULL, $echo = TRUE)
{
    if($arquivo != NULL){
      
        if(file_exists('./assets/js/'.$arquivo.'.js')){
           
                $arquivo = base_url('assets/js/'.$arquivo.'.js');
        }
        
        $js = '<script src="'.$arquivo.'"></script>'."\n";
        if($echo):
            echo $js;
        else:
            return $js;
        endif;
    }
} #fim load js.

define('MGSUCESSO', ' success');
define('MGALERT', ' warning');
define('MGINFO', ' info');
define('MGERROR', ' alert');

function mensagem($texto, $tipo, $extras=NULL, $echo=TRUE){
    $mensagem ='<section data-alert class="alert-box '.$tipo.'" '.$extras.'>';
    $mensagem  .= $texto;
    $mensagem .='<a href="#" class="close">&times;</a></section>';
    if($echo):
        echo $mensagem;
    else:
        return $mensagem;        
    endif;
        
}

function get_tema(){
    $ci=& get_instance();
    $ci->load->library('sistema');
    return $ci->sistema->tema;    
}

function set_tema($propriedade, $valor, $replace = TRUE){
    $ci =& get_instance();
    $ci->load->library('sistema');
    if($replace):        
        $ci->sistema->tema[$propriedade] = $valor;
    else:
        if(!isset($ci->sistema->tema[$propriedade]))$ci->sistema->tema[$propriedade] = "";
        $ci->sistema->tema[$propriedade] .= $valor;
    endif;
}

function load_template(){
    $ci=& get_instance();
    $ci->load->library('sistema');
    if(isset($ci->sistema->tema['header'])){
        $ci->parser->parse($ci->sistema->tema['header'], get_tema());
    }
    if(isset($ci->sistema->tema['template'])){
        $ci->parser->parse($ci->sistema->tema['template'], get_tema());
    }
    if(isset($ci->sistema->tema['footer'])){
        $ci->parser->parse($ci->sistema->tema['footer'], get_tema());
    }
}
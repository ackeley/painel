<?php

function load_css($arquivo=null,$media='screen',$import=FALSE, $echo=TRUE)
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
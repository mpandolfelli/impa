<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Check_login{

  function check_url(){
		$CI =& get_instance();
		$class = $CI->router->fetch_class();
		$method = $CI->router->fetch_method(); 	
    $folder = $CI->router->directory;
    
    die();


  }

}

?>
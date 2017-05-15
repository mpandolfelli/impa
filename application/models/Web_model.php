<?php

 
class Web_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by id
     */
    function get_news($categoria)
    {   

        
        return $this->db->get_where('noticias',array('categoria_id'=> $categoria))->result_array();
    }
    
    /*
     * Get all users
     */
    function get_all_users()
    {
        return $this->db->get('users')->result_array();
    }
    
    
}

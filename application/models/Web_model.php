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


        return $this->db->limit(4)->get_where('noticias',array('categoria_id'=> $categoria))->result_array();
    }
    
   
    
    function getNew($url){
        $this->db->select('n.*, c.nombre as categoria');
        $this->db->from('noticias n');
        $this->db->join('categorias c', 'n.categoria_id = c.id');
        $this->db->where('n.url', $url);
        return $this->db->get()->row();

        return $this->db->get_where('noticias',array('url'=> $url))->row();
    }
}

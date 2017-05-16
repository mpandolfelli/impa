<?php

 
class Noticia_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get noticia by id
     */
    function get_noticia($id)
    {
        $this->db->select('noticias.*,categorias.nombre as categoria, users.email as usuario');
        $this->db->join('users','users.id = noticias.user_id');
        $this->db->join('categorias','categorias.id = noticias.categoria_id');
        return $this->db->get_where('noticias',array('noticias.id'=>$id))->row_array();
    }
    
    /*
     * Get all noticias
     */
    function get_all_noticias()
    {
        $this->db->select('noticias.*,categorias.nombre as categoria, users.email as usuario');
        $this->db->join('users','users.id = noticias.user_id');
        $this->db->join('categorias','categorias.id = noticias.categoria_id');
        return $this->db->get('noticias')->result_array();
    }
    
    /*
     * function to add new noticia
     */
    function add_noticia($params)
    {
        $this->db->insert('noticias',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update noticia
     */
    function update_noticia($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('noticias',$params);
        if($response)
        {
            return "noticia updated successfully";
        }
        else
        {
            return "Error occuring while updating noticia";
        }
    }
    
    /*
     * function to delete noticia
     */
    function delete_noticia($id)
    {
        $response = $this->db->delete('noticias',array('id'=>$id));
        if($response)
        {
            return "noticia deleted successfully";
        }
        else
        {
            return "Error occuring while deleting noticia";
        }
    }
}

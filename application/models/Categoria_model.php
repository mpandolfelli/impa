<?php

 
class Categoria_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get categoria by id
     */
    function get_categoria($id)
    {
        return $this->db->get_where('categorias',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all categorias
     */
    function get_all_categorias()
    {
        return $this->db->get('categorias')->result_array();
    }
    
    /*
     * function to add new categoria
     */
    function add_categoria($params)
    {
        $this->db->insert('categorias',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update categoria
     */
    function update_categoria($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('categorias',$params);
        if($response)
        {
            return "categoria updated successfully";
        }
        else
        {
            return "Error occuring while updating categoria";
        }
    }
    
    /*
     * function to delete categoria
     */
    function delete_categoria($id)
    {
        $response = $this->db->delete('categorias',array('id'=>$id));
        if($response)
        {
            return "categoria deleted successfully";
        }
        else
        {
            return "Error occuring while deleting categoria";
        }
    }
}

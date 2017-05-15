<?php

 
class Imagene_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get imagene by id
     */
    function get_imagene($id)
    {
        return $this->db->get_where('imagenes',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all imagenes
     */
    function get_all_imagenes()
    {
        return $this->db->get('imagenes')->result_array();
    }
    
    /*
     * function to add new imagene
     */
    function add_imagene($params)
    {
        $this->db->insert('imagenes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update imagene
     */
    function update_imagene($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('imagenes',$params);
        if($response)
        {
            return "imagene updated successfully";
        }
        else
        {
            return "Error occuring while updating imagene";
        }
    }
    
    /*
     * function to delete imagene
     */
    function delete_imagene($id)
    {
        $response = $this->db->delete('imagenes',array('id'=>$id));
        if($response)
        {
            return "imagene deleted successfully";
        }
        else
        {
            return "Error occuring while deleting imagene";
        }
    }
}

<?php

 
class Materia_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get materia by id
     */
    function get_materia($id)
    {
        return $this->db->get_where('materias',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all materias
     */
    function get_all_materias()
    {
        return $this->db->get('materias')->result_array();
    }
    
    /*
     * function to add new materia
     */
    function add_materia($params)
    {
        $this->db->insert('materias',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update materia
     */
    function update_materia($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('materias',$params);
        if($response)
        {
            return "materia updated successfully";
        }
        else
        {
            return "Error occuring while updating materia";
        }
    }
    
    /*
     * function to delete materia
     */
    function delete_materia($id)
    {
        $response = $this->db->delete('materias',array('id'=>$id));
        if($response)
        {
            return "materia deleted successfully";
        }
        else
        {
            return "Error occuring while deleting materia";
        }
    }
}

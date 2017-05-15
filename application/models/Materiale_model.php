<?php

 
class Materiale_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get materiale by id
     */
    function get_materiale($id)
    {
        $this->db->select('materiales.*,materias.nombre as materia, users.email as usuario');
        $this->db->join('users','users.id = materiales.user_id');
        $this->db->join('materias','materias.id = materiales.materia_id');
        return $this->db->get_where('materiales',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all materiales
     */
    function get_all_materiales()
    {
        $this->db->select('materiales.*,materias.nombre as materia, users.email as usuario');
        $this->db->join('users','users.id = materiales.user_id');
        $this->db->join('materias','materias.id = materiales.materia_id');
        return $this->db->get('materiales')->result_array();
    }
    
    /*
     * function to add new materiale
     */
    function add_materiale($params)
    {
        $this->db->insert('materiales',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update materiale
     */
    function update_materiale($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('materiales',$params);
        if($response)
        {
            return "materiale updated successfully";
        }
        else
        {
            return "Error occuring while updating materiale";
        }
    }
    
    /*
     * function to delete materiale
     */
    function delete_materiale($id)
    {
        $response = $this->db->delete('materiales',array('id'=>$id));
        if($response)
        {
            return "materiale deleted successfully";
        }
        else
        {
            return "Error occuring while deleting materiale";
        }
    }
}

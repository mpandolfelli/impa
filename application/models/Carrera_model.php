<?php

 
class Carrera_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get carrera by id
     */
    function get_carrera($id)
    {
        return $this->db->get_where('carreras',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all carreras
     */
    function get_all_carreras()
    {
        return $this->db->get('carreras')->result_array();
    }
    
    /*
     * function to add new carrera
     */
    function add_carrera($params)
    {
        $this->db->insert('carreras',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update carrera
     */
    function update_carrera($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('carreras',$params);
        if($response)
        {
            return "carrera updated successfully";
        }
        else
        {
            return "Error occuring while updating carrera";
        }
    }
    
    /*
     * function to delete carrera
     */
    function delete_carrera($id)
    {
        $response = $this->db->delete('carreras',array('id'=>$id));
        if($response)
        {
            return "carrera deleted successfully";
        }
        else
        {
            return "Error occuring while deleting carrera";
        }
    }
}

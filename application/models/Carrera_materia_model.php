<?php

 
class Carrera_materia_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get carrera_materia by id
     */
    function get_carrera_materia($id)
    {
        $this->db->select('carrera_materias.*,materias.nombre as materia, carreras.nombre as carrera');
        $this->db->join('carreras','carreras.id = carrera_materias.carrera_id');
        $this->db->join('materias','materias.id = carrera_materias.materia_id');
        return $this->db->get_where('carrera_materias',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all carrera_materias
     */
    function get_all_carrera_materias()
    {
        $this->db->select('carrera_materias.*,materias.nombre as materia, carreras.nombre as carrera');
        $this->db->join('carreras','carreras.id = carrera_materias.carrera_id');
        $this->db->join('materias','materias.id = carrera_materias.materia_id');
        return $this->db->get('carrera_materias')->result_array();
    }
    
    /*
     * function to add new carrera_materia
     */
    function add_carrera_materia($params)
    {
        $this->db->insert('carrera_materias',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update carrera_materia
     */
    function update_carrera_materia($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('carrera_materias',$params);
        if($response)
        {
            return "carrera_materia updated successfully";
        }
        else
        {
            return "Error occuring while updating carrera_materia";
        }
    }
    
    /*
     * function to delete carrera_materia
     */
    function delete_carrera_materia($id)
    {
        $response = $this->db->delete('carrera_materias',array('id'=>$id));
        if($response)
        {
            return "carrera_materia deleted successfully";
        }
        else
        {
            return "Error occuring while deleting carrera_materia";
        }
    }
}

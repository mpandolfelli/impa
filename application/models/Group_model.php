<?php

 
class Group_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get group by id
     */
    function get_group($id)
    {
        return $this->db->get_where('groups',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all groups
     */
    function get_all_groups()
    {
        return $this->db->get('groups')->result_array();
    }
    
    /*
     * function to add new group
     */
    function add_group($params)
    {
        $this->db->insert('groups',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update group
     */
    function update_group($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('groups',$params);
        if($response)
        {
            return "group updated successfully";
        }
        else
        {
            return "Error occuring while updating group";
        }
    }
    
    /*
     * function to delete group
     */
    function delete_group($id)
    {
        $response = $this->db->delete('groups',array('id'=>$id));
        if($response)
        {
            return "group deleted successfully";
        }
        else
        {
            return "Error occuring while deleting group";
        }
    }
}

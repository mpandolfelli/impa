<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by id
     */
    function get_user($id)
    {
        return $this->db->get_where('users',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all users
     */
    function get_all_users()
    {
        return $this->db->get('users')->result_array();
    }
    
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('users',$params);
        if($response)
        {
            return "user updated successfully";
        }
        else
        {
            return "Error occuring while updating user";
        }
    }
    
    /*
     * function to delete user
     */
    function delete_user($id)
    {
        $response = $this->db->delete('users',array('id'=>$id));
        if($response)
        {
            return "user deleted successfully";
        }
        else
        {
            return "Error occuring while deleting user";
        }
    }
}

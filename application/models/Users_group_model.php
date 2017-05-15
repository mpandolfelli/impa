<?php

 
class Users_group_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get users_group by id
     */
    function get_users_group($id)
    {
        $this->db->select('users_groups.*,groups.name as sector, users.email as usuario');
        $this->db->join('users','users.id = users_groups.user_id');
        $this->db->join('groups','groups.id = users_groups.group_id');
        return $this->db->get_where('users_groups',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all users_groups
     */
    function get_all_users_groups()
    {
        $this->db->select('users_groups.*,groups.name as sector, users.email as usuario');
        $this->db->join('users','users.id = users_groups.user_id');
        $this->db->join('groups','groups.id = users_groups.group_id');
        return $this->db->get('users_groups')->result_array();
    }
    
    /*
     * function to add new users_group
     */
    function add_users_group($params)
    {
        $this->db->insert('users_groups',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update users_group
     */
    function update_users_group($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('users_groups',$params);
        if($response)
        {
            return "users_group updated successfully";
        }
        else
        {
            return "Error occuring while updating users_group";
        }
    }
    
    /*
     * function to delete users_group
     */
    function delete_users_group($id)
    {
        $response = $this->db->delete('users_groups',array('id'=>$id));
        if($response)
        {
            return "users_group deleted successfully";
        }
        else
        {
            return "Error occuring while deleting users_group";
        }
    }
}

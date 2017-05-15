<?php

 
class Login_attempt_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get login_attempt by id
     */
    function get_login_attempt($id)
    {
        return $this->db->get_where('login_attempts',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all login_attempts
     */
    function get_all_login_attempts()
    {
        return $this->db->get('login_attempts')->result_array();
    }
    
    /*
     * function to add new login_attempt
     */
    function add_login_attempt($params)
    {
        $this->db->insert('login_attempts',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update login_attempt
     */
    function update_login_attempt($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('login_attempts',$params);
        if($response)
        {
            return "login_attempt updated successfully";
        }
        else
        {
            return "Error occuring while updating login_attempt";
        }
    }
    
    /*
     * function to delete login_attempt
     */
    function delete_login_attempt($id)
    {
        $response = $this->db->delete('login_attempts',array('id'=>$id));
        if($response)
        {
            return "login_attempt deleted successfully";
        }
        else
        {
            return "Error occuring while deleting login_attempt";
        }
    }
}

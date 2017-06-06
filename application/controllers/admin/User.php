<?php

 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $data['users'] = $this->User_model->get_all_users();

        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'forgotten_password_code' => $this->input->post('forgotten_password_code'),
				'forgotten_password_time' => $this->input->post('forgotten_password_time'),
				'ip_address' => $this->input->post('ip_address'),
				'username' => $this->input->post('username'),
				'salt' => $this->input->post('salt'),
				'email' => $this->input->post('email'),
				'activation_code' => $this->input->post('activation_code'),
				'remember_code' => $this->input->post('remember_code'),
				'created_on' => $this->input->post('created_on'),
				'last_login' => $this->input->post('last_login'),
				'active' => $this->input->post('active'),
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($id)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($id);
        
        if(isset($data['user']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'forgotten_password_code' => $this->input->post('forgotten_password_code'),
					'forgotten_password_time' => $this->input->post('forgotten_password_time'),
					'ip_address' => $this->input->post('ip_address'),
					'username' => $this->input->post('username'),
					'salt' => $this->input->post('salt'),
					'email' => $this->input->post('email'),
					'activation_code' => $this->input->post('activation_code'),
					'remember_code' => $this->input->post('remember_code'),
					'created_on' => $this->input->post('created_on'),
					'last_login' => $this->input->post('last_login'),
					'active' => $this->input->post('active'),
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'company' => $this->input->post('company'),
					'phone' => $this->input->post('phone'),
                );

                $this->User_model->update_user($id,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($id)
    {
        $user = $this->User_model->get_user($id);

        // check if the user exists before trying to delete it
        if(isset($user['id']))
        {
            $this->User_model->delete_user($id);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}

<?php

 
class Users_group extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_group_model');
    } 

    /*
     * Listing of users_groups
     */
    function index()
    {
        $data['users_groups'] = $this->Users_group_model->get_all_users_groups();

        $data['_view'] = 'users_group/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new users_group
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'group_id' => $this->input->post('group_id'),
            );
            
            $users_group_id = $this->Users_group_model->add_users_group($params);
            redirect('users_group/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();

			$this->load->model('Group_model');
			$data['all_groups'] = $this->Group_model->get_all_groups();
            
            $data['_view'] = 'users_group/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a users_group
     */
    function edit($id)
    {   
        // check if the users_group exists before trying to edit it
        $data['users_group'] = $this->Users_group_model->get_users_group($id);
        
        if(isset($data['users_group']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'group_id' => $this->input->post('group_id'),
                );

                $this->Users_group_model->update_users_group($id,$params);            
                redirect('users_group/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

				$this->load->model('Group_model');
				$data['all_groups'] = $this->Group_model->get_all_groups();

                $data['_view'] = 'users_group/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The users_group you are trying to edit does not exist.');
    } 

    /*
     * Deleting users_group
     */
    function remove($id)
    {
        $users_group = $this->Users_group_model->get_users_group($id);

        // check if the users_group exists before trying to delete it
        if(isset($users_group['id']))
        {
            $this->Users_group_model->delete_users_group($id);
            redirect('users_group/index');
        }
        else
            show_error('The users_group you are trying to delete does not exist.');
    }
    
}

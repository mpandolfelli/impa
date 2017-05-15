<?php

 
class Materiale extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Materiale_model');
    } 

    /*
     * Listing of materiales
     */
    function index()
    {
        $data['materiales'] = $this->Materiale_model->get_all_materiales();

        $data['_view'] = 'materiale/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new materiale
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'materia_id' => $this->input->post('materia_id'),
				'fecha' => $this->input->post('fecha'),
				'titulo' => $this->input->post('titulo'),
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $materiale_id = $this->Materiale_model->add_materiale($params);
            redirect('materiale/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();

			$this->load->model('Materia_model');
			$data['all_materias'] = $this->Materia_model->get_all_materias();
            
            $data['_view'] = 'materiale/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a materiale
     */
    function edit($id)
    {   
        // check if the materiale exists before trying to edit it
        $data['materiale'] = $this->Materiale_model->get_materiale($id);
        
        if(isset($data['materiale']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'materia_id' => $this->input->post('materia_id'),
					'fecha' => $this->input->post('fecha'),
					'titulo' => $this->input->post('titulo'),
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Materiale_model->update_materiale($id,$params);            
                redirect('materiale/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

				$this->load->model('Materia_model');
				$data['all_materias'] = $this->Materia_model->get_all_materias();

                $data['_view'] = 'materiale/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The materiale you are trying to edit does not exist.');
    } 

    /*
     * Deleting materiale
     */
    function remove($id)
    {
        $materiale = $this->Materiale_model->get_materiale($id);

        // check if the materiale exists before trying to delete it
        if(isset($materiale['id']))
        {
            $this->Materiale_model->delete_materiale($id);
            redirect('materiale/index');
        }
        else
            show_error('The materiale you are trying to delete does not exist.');
    }
    
}

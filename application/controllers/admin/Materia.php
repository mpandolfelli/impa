<?php

 
class Materia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Materia_model');
    } 

    /*
     * Listing of materias
     */
    function index()
    {
        $data['materias'] = $this->Materia_model->get_all_materias();

        $data['_view'] = 'materia/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new materia
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'horario' => $this->input->post('horario'),
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $materia_id = $this->Materia_model->add_materia($params);
            redirect('materia/index');
        }
        else
        {            
            $data['_view'] = 'materia/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a materia
     */
    function edit($id)
    {   
        // check if the materia exists before trying to edit it
        $data['materia'] = $this->Materia_model->get_materia($id);
        
        if(isset($data['materia']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'horario' => $this->input->post('horario'),
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Materia_model->update_materia($id,$params);            
                redirect('materia/index');
            }
            else
            {
                $data['_view'] = 'materia/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The materia you are trying to edit does not exist.');
    } 

    /*
     * Deleting materia
     */
    function remove($id)
    {
        $materia = $this->Materia_model->get_materia($id);

        // check if the materia exists before trying to delete it
        if(isset($materia['id']))
        {
            $this->Materia_model->delete_materia($id);
            redirect('materia/index');
        }
        else
            show_error('The materia you are trying to delete does not exist.');
    }
    
}

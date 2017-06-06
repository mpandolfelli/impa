<?php

 
class Carrera_materia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Carrera_materia_model');
    } 

    /*
     * Listing of carrera_materias
     */
    function index()
    {
        $data['carrera_materias'] = $this->Carrera_materia_model->get_all_carrera_materias();

        $data['_view'] = 'carrera_materia/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new carrera_materia
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'carrera_id' => $this->input->post('carrera_id'),
				'materia_id' => $this->input->post('materia_id'),
            );
            
            $carrera_materia_id = $this->Carrera_materia_model->add_carrera_materia($params);
            redirect('carrera_materia/index');
        }
        else
        {
			$this->load->model('Carrera_model');
			$data['all_carreras'] = $this->Carrera_model->get_all_carreras();

			$this->load->model('Materia_model');
			$data['all_materias'] = $this->Materia_model->get_all_materias();
            
            $data['_view'] = 'carrera_materia/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a carrera_materia
     */
    function edit($id)
    {   
        // check if the carrera_materia exists before trying to edit it
        $data['carrera_materia'] = $this->Carrera_materia_model->get_carrera_materia($id);
        
        if(isset($data['carrera_materia']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'carrera_id' => $this->input->post('carrera_id'),
					'materia_id' => $this->input->post('materia_id'),
                );

                $this->Carrera_materia_model->update_carrera_materia($id,$params);            
                redirect('carrera_materia/index');
            }
            else
            {
				$this->load->model('Carrera_model');
				$data['all_carreras'] = $this->Carrera_model->get_all_carreras();

				$this->load->model('Materia_model');
				$data['all_materias'] = $this->Materia_model->get_all_materias();

                $data['_view'] = 'carrera_materia/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The carrera_materia you are trying to edit does not exist.');
    } 

    /*
     * Deleting carrera_materia
     */
    function remove($id)
    {
        $carrera_materia = $this->Carrera_materia_model->get_carrera_materia($id);

        // check if the carrera_materia exists before trying to delete it
        if(isset($carrera_materia['id']))
        {
            $this->Carrera_materia_model->delete_carrera_materia($id);
            redirect('carrera_materia/index');
        }
        else
            show_error('The carrera_materia you are trying to delete does not exist.');
    }
    
}

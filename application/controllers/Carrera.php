<?php

 
class Carrera extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Carrera_model');
    } 

    /*
     * Listing of carreras
     */
    function index()
    {
        $data['carreras'] = $this->Carrera_model->get_all_carreras();

        $data['_view'] = 'carrera/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new carrera
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
            );
            
            $carrera_id = $this->Carrera_model->add_carrera($params);
            redirect('carrera/index');
        }
        else
        {            
            $data['_view'] = 'carrera/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a carrera
     */
    function edit($id)
    {   
        // check if the carrera exists before trying to edit it
        $data['carrera'] = $this->Carrera_model->get_carrera($id);
        
        if(isset($data['carrera']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
                );

                $this->Carrera_model->update_carrera($id,$params);            
                redirect('carrera/index');
            }
            else
            {
                $data['_view'] = 'carrera/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The carrera you are trying to edit does not exist.');
    } 

    /*
     * Deleting carrera
     */
    function remove($id)
    {
        $carrera = $this->Carrera_model->get_carrera($id);

        // check if the carrera exists before trying to delete it
        if(isset($carrera['id']))
        {
            $this->Carrera_model->delete_carrera($id);
            redirect('carrera/index');
        }
        else
            show_error('The carrera you are trying to delete does not exist.');
    }
    
}

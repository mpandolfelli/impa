<?php

 
class Imagene extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Imagene_model');
    } 

    /*
     * Listing of imagenes
     */
    function index()
    {
        $data['imagenes'] = $this->Imagene_model->get_all_imagenes();

        $data['_view'] = 'imagene/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new imagene
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'noticia_id' => $this->input->post('noticia_id'),
				'nombre' => $this->input->post('nombre'),
            );
            
            $imagene_id = $this->Imagene_model->add_imagene($params);
            redirect('imagene/index');
        }
        else
        {
			$this->load->model('Noticia_model');
			$data['all_noticias'] = $this->Noticia_model->get_all_noticias();
            
            $data['_view'] = 'imagene/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a imagene
     */
    function edit($id)
    {   
        // check if the imagene exists before trying to edit it
        $data['imagene'] = $this->Imagene_model->get_imagene($id);
        
        if(isset($data['imagene']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'noticia_id' => $this->input->post('noticia_id'),
					'nombre' => $this->input->post('nombre'),
                );

                $this->Imagene_model->update_imagene($id,$params);            
                redirect('imagene/index');
            }
            else
            {
				$this->load->model('Noticia_model');
				$data['all_noticias'] = $this->Noticia_model->get_all_noticias();

                $data['_view'] = 'imagene/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The imagene you are trying to edit does not exist.');
    } 

    /*
     * Deleting imagene
     */
    function remove($id)
    {
        $imagene = $this->Imagene_model->get_imagene($id);

        // check if the imagene exists before trying to delete it
        if(isset($imagene['id']))
        {
            $this->Imagene_model->delete_imagene($id);
            redirect('imagene/index');
        }
        else
            show_error('The imagene you are trying to delete does not exist.');
    }
    
}

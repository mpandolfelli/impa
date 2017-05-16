<?php

 
class Noticia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Noticia_model');
    } 

    /*
     * Listing of noticias
     */
    function index()
    {
        $data['noticias'] = $this->Noticia_model->get_all_noticias();

        $data['_view'] = 'noticia/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new noticia
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'categoria_id' => $this->input->post('categoria_id'),
				'user_id' => $this->input->post('user_id'),
				'titulo' => $this->input->post('titulo'),
				'copete' => $this->input->post('copete'),
				'descripcion' => $this->input->post('descripcion'),
                'url' => $this->toAscii($this->input->post('titulo')),
            );
            
            $noticia_id = $this->Noticia_model->add_noticia($params);
            $this->add_file($noticia_id);
            redirect('noticia/index');
        }
        else
        {
			$this->load->model('Categoria_model');
			$data['all_categorias'] = $this->Categoria_model->get_all_categorias();

			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();
            
            $data['_view'] = 'noticia/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a noticia
     */
    function edit($id)
    {   
        // check if the noticia exists before trying to edit it
        $data['noticia'] = $this->Noticia_model->get_noticia($id);
        
        if(isset($data['noticia']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'categoria_id' => $this->input->post('categoria_id'),
					'user_id' => $this->input->post('user_id'),
					'titulo' => $this->input->post('titulo'),
					'copete' => $this->input->post('copete'),
                    'descripcion' => $this->input->post('descripcion'),
					'url' => $this->toAscii($this->input->post('titulo')),
                );

                $this->Noticia_model->update_noticia($id,$params);            
                redirect('noticia/index');
            }
            else
            {
				$this->load->model('Categoria_model');
				$data['all_categorias'] = $this->Categoria_model->get_all_categorias();

				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'noticia/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The noticia you are trying to edit does not exist.');
    } 

    /*
     * Deleting noticia
     */
    function remove($id)
    {
        $noticia = $this->Noticia_model->get_noticia($id);

        // check if the noticia exists before trying to delete it
        if(isset($noticia['id']))
        {
            $this->Noticia_model->delete_noticia($id);
            redirect('noticia/index');
        }
        else
            show_error('The noticia you are trying to delete does not exist.');
    }

    private function add_file($news_id,$type,$input_name = false, $resize = false){
        
        if($type == VIDEO){

            $videos = $this->input->post('link_video[]');
            foreach ($videos as $key => $value) {        
                $file = $this->upload_file->get_key_youtube($value);
                
                if($file){

                    $new_file = array(
                        'new_id'=>$news_id,
                        'type_id'=>$type,
                        'name'=>$file    
                    );

                   $this->db->insert('files',$new_file);
                }
            }
        
        }else{
            if($resize){
                $this->upload_file->image($input_name);
                if($type == PHOTO){
                    $file = $this->upload_file->upload($news_id,true);
                }

            }else{
                $this->upload_file->document($input_name);
                $file = $this->upload_file->upload($news_id);
            }
            if(count($file) > 0){
                foreach($file as $key => $value){
                    $new_file = array(
                        'noticia_id'=>$news_id,
                        'tipo_id'=>$type,
                        'nombre'=>$value['name']  
                    );

                    $this->db->insert('files',$new_file);
                }
            }
        }
    }


    private function toAscii($str, $replace=array(), $delimiter='-') {
        $str = strip_tags($str);
        if( !empty($replace) ) {
            $str = str_replace((array)$replace, ' ', $str);
        }

        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

        return $clean;
    }
    
}

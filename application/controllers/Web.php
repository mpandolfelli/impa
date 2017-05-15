<?php

 
class Web extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Web_model');
    } 

    /*
     * Index de la web
     */
    function index()
    {
       

        $data['noticias'] = $this->Web_model->get_news(NOTICIAS);
      
        $data['_view'] = 'web/index';
        $this->load->view('layouts/web',$data);
    }


    function ver($url){
        $data['noticia'] =$this->Web_model->getNew($url);
        $data['_view'] = 'web/nota';
        $this->load->view('layouts/web',$data);
    }
   
    
}

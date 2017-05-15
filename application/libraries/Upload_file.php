<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload_file{

    public $obj;
    public $folder_photo = '/upload/images/';
    public $folder_document = '/upload/document/';
    public $image = false;
    public $document = false;
    public $folder ='';
 //   public $width = 600;
//    public $height = 400;    
    public $width_crop = 800;
    public $height_crop = 600;
    public $max_size = 10485760;
    public $max_width = '';
   // public $min_width = 600;
   // public $max_height = '';
  //  public $min_height = 400;
    public $file_type_image = array('jpeg','JEPG','png','PNG','jpg','JPG','gif','GIF');
    public $file_type_documnet = array('doc','pdf', 'xls', 'csv');
    public $name_imput = 'file';

    function Upload_file(){
        $this->obj =& get_instance();
        $this->obj->load->library('session');
    }

    function folderPhoto($folder_photo){
      $this->folder_photo = $folder_photo;
    } 

    function setDocument($folder_document){
      $this->folder_document = $folder_document;
    }

    function setFolder($folder){
      $this->folder = $folder;
    }

    function image($name){
        $this->image = true;
        $this->document = false;
        $this->SetNameImput($name);
    }    

    function document($name){
        $this->image = false;
        $this->document = true;
        $this->SetNameImput($name);
    }    

    function SetNameImput($name_imput){
        $this->name_imput = $name_imput;
    }    

    function setWidth($width){
      $this->width_crop = $width;
    }      

    function setHeight($height){
      $this->height_crop  = $height;
    }       

    function setMaxSize($max_size){
      $this->max_size = $max_size;
    }    

    function setMaxWidth($max_width){
      $this->max_width = $max_width;
    }    

    function setMinWidth($min_width){
      $this->min_width = $min_width;
    }    

    function setMaxHeight($max_height){
      $this->max_height = $max_height;
    }    

    function setMinHeight($min_height){
      $this->min_height = $min_height;
    }    

    function setFileTypeImage($file_type_image){
      $this->file_type_image = $file_type_image;
    }
    
    function setFileTypeDucument($file_type_documnet){
      $this->file_type_documnet = $file_type_documnet;
    }

    function loadFolderDocument(){
        $this->folder = FCPATH.$this->folder_document;
    }    

    function loadFolderPhoto(){
        $this->folder = FCPATH.$this->folder_photo;
    }
    
   
    function upload($id, $resize = false)
    {   
        $filename = array();
        if(isset($_FILES[$this->name_imput])){

            foreach($_FILES[$this->name_imput]['tmp_name'] as $key => $tmp_name)
            {

                $check = $this->checkFile($key);
                if($check){
                    $filename[$key]['name'] = $id.$check;
                    $filename[$key]['old_name'] = $_FILES[$this->name_imput]["name"][$key];
                    $target_file = $this->folder.basename($filename[$key]['name']);
                    if (move_uploaded_file($_FILES[$this->name_imput]["tmp_name"][$key], $target_file)) {
                        
                        if($resize){

                            $this->resizeImage($filename[$key]['name']);
                        }

                    } else {
                        $this->obj->session->set_flashdata('error', "Error : Error al subir.");
                    }
                }
            }

             return $filename;

        }    
    }


    function resizeImage($filename){
     
        $old_file = $this->folder.$filename;
        $original_file = $this->folder.'original/'.$filename;

        if (!copy($old_file, $original_file)) {
            return false;
        }

        $file = getimagesize($old_file);
        $width = $file[0];              
        $height = $file[1];

        if($width == $this->width_crop && $height == $this->height_crop ){
           return true;
        }

        $valor_1 = round($this->width_crop / $this->height_crop ,2);
        $valor_2 = round($width / $height,2);

        if($valor_1 <= $valor_2){
            $new_height = $this->height_crop ;
            $new_width = round(($width*$new_height) / $height );
        }else{
            $new_width = $this->width_crop;
            $new_height = round(($height*$new_width) / $width);
        }

        $image_p = imagecreatetruecolor($new_width, $new_height);

        $type = exif_imagetype($old_file);
        
        $allowedTypes = array( 
            1,  // [] gif 
            2,  // [] jpg 
            3,  // [] png 
            6,  // [] bmp 
            7 //[]jpeg
        ); 

        if (!in_array($type, $allowedTypes)) { 
            return false; 
        } 

        switch ($type) { 
            case 1 : 
                $image = imageCreateFromGif($old_file);
            break; 
            case 2 : 
                $image = imagecreatefromjpeg($old_file);
            break; 
            case 3 : 
                $image = imageCreateFromPng($old_file);    
            break; 
            case 6 : 
                $image = imageCreateFromBmp($old_file);
            break;          
            case 7 : 
                $image = imagecreatefromjpeg($old_file);
            break; 
        } 

        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        $por = intval(($new_width / $this->width_crop) * 100);
        $por2 = intval(($new_height / $this->height_crop  ) * 100);

        imagejpeg($image_p,$old_file, 80);

    }


    function crop(){
        
        if ($_POST){
            $this->loadFolderPhoto();
            $src =  $this->folder.$_POST['photo'];

            $type = exif_imagetype($src);
            $allowedTypes = array( 
                1,  // [] gif 
                2,  // [] jpg 
                3,  // [] png 
                6,  // [] bmp 
                7 //[]jpeg
            ); 

            if (!in_array($type, $allowedTypes)) { 
                return false; 
            } 

            switch ($type) { 
                case 1 : 
                    $img_r = imageCreateFromGif($src);
                break; 
                case 2 : 
                    $img_r = imagecreatefromjpeg($src);
                break; 
                case 3 : 
                    $img_r = imageCreateFromPng($src);    
                break; 
                case 6 : 
                    $img_r = imageCreateFromBmp($src);
                break;          
                case 7 : 
                    $img_r = imagecreatefromjpeg($src);
                break; 
            } 

          //  $img_r = imagecreatefromjpeg($src);
           
            $dst_r = ImageCreateTrueColor($_POST['w'],$_POST['h']);
            imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],$_POST['w'],$_POST['h'],$_POST['w'],$_POST['h']);
            imagejpeg($dst_r,$src,90);

            return true;

        }else{
            return false;
        }

    }

    function gentName($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function checkFile($key){
        $file = $_FILES[$this->name_imput]['name'][$key];
        $filename = '';
        if(!empty($file)){

            $file_data = pathinfo($file);
            $name_file = $this->gentName(5);
            $filename =  $name_file.'.'.$file_data['extension'];
           
            if($this->image){

                if(in_array($file_data['extension'], $this->file_type_image)){
                    $this->loadFolderPhoto();
                    if(!$this->isImage($key))
                        return false; 

                    if(!$this->checkSize($key)){
                        return false;
                    }
                       
                }else{
                    $this->obj->session->set_flashdata('error', "Error : The Image has an extension {$file_data['extension']} not allowed.");
                    return false; 
                }
                  
            }

            if($this->document){
                if(in_array($file_data['extension'], $this->file_type_documnet)){
                    $this->loadFolderDocument();
                    if(!$this->checkSize($key))
                        return false; 
                }else{
                    $this->obj->session->set_flashdata('error', "Error : The Document has an extension {$file_data['extension']} not allowed.");
                    return false;
                }
            }

            return $filename;
        }

    } 

    /*function checkFile($key){

        $file = $_FILES[$this->name_imput]['name'][$key];
        if($file){
            $file_data = pathinfo($file);
            $name_file = $this->gentName(5);
            $filename =  $name_file.'.'.$file_data['extension'];

            if(in_array($file_data['extension'], $this->file_type_image)){
                $this->loadFolderPhoto();
                if(!$this->isImage($key))
                    return false; 

                if(!$this->checkSize($key))
                    return false; 
            }else{
                if(in_array($file_data['extension'], $this->file_type_documnet)){
                    $this->loadFolderDocument();
                    if(!$this->checkSize($key))
                        return false; 
                }else{
                    $this->obj->session->set_flashdata('error', "Error : The image has an extension {$file_data['extension']} not allowed.");
                    return false;
                }
            }

            return $filename;

        }
    }*/

    function checkFolder(){
        if (!file_exists($this->folder)) {
            mkdir($this->folder, 0777, true);
        }
    }

    function get_key_youtube($url){
        $data = explode('v=', $url);
        if(!empty($data[0])){
            parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
            if(isset($my_array_of_vars['v'])){
                $key = $my_array_of_vars['v']; 
                return $key;
            }
        }

        $this->obj->session->set_flashdata('error', "Error : The url $url not is video youtube");
        return false;
    }

    private function checkSize($key){
        if ($_FILES[$this->name_imput]["size"][$key] > $this->max_size) {
            $this->obj->session->set_flashdata('error', "Error : The file {$_FILES[$this->name_imput]['name'][$key]} is too far beyond the allowed limit of 10mb");
            return false;
        }else{
            return true;
        }
    }

    private function isImage($key){

        $check = getimagesize($_FILES[$this->name_imput]["tmp_name"][$key]);
        if($check){
            $width = $check[0];
            $height = $check[1];

            if($width >= $this->width_crop && $height >= $this->height_crop){
                return true;
            }else{
                $this->obj->session->set_flashdata('error', "Error : The image {$_FILES[$this->name_imput]['name'][$key]} size must be larger than $this->width_crop x $this->height_crop pixels");
                return false;
            }
           
        }else{
            return false;
        }

    }
        
}
?>
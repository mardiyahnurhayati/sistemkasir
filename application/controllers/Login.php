<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

           $this->load->model('login/login_model');         

    }
    /*
    *Showing  Login page here 
    */
    function index()
    {
        
        $this->load->view('login/home_login'); 
    }
    

    /**
    * check the username and the password with the database
    * @return void
    */
    
    function validate()
    {  
    
       
         $username = $this->input->post('username');
         $password = $this->input->post('password');

         $is_valid = $this->login_model->validate($username, $password);



        
         if($is_valid)/*If valid username and password set */
         {
             $get_id = $this->login_model->get_id($username, $password);                
          
            foreach($get_id as $val)
                { 
                      $id=$val->id_user;
                      $type=$val->type;
                     $name = $val->nama_user;                  
                     $password = $val->password;                 

              

                     if($type=='admin')
                     {
                        $data = array(
                        'admin_name' =>$name, 
                        'admin_password' => $password,
                        'admin_type'=>$type,
                        'admin_id'=>$id,
                        'is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the Admin datas in session */
                          redirect('Admin');
                     }
                    if($type=='kasir')
                     {
                        
                        $data = array(
                        'kasir_name' =>$name, 
                        'kasir_password' =>$password,
                        'kasir_type'=>$type,
                        'kasir_id'=>$id,
                        'kasir_is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the  staff datas values in session */
                          redirect('Kasir');
                     }
                   
                    
            }       

         
        }
        else // incorrect username or password
        {

          
            $this->session->set_flashdata('msg1', 'Username or Password Incorrect!');
            redirect('login');
            echo "gagagaggagga";
        }
   
    }

    /**
        * Unset the session, and logout the user.
        * @return void
    */      
    public function admin_logout()
    {
           
        $array_items = array(
        'admin_name', 
        'admin_password',
        'admin_type',
        'admin_id',
        'is_logged_in',
        );



        $this->session->unset_userdata($array_items);
            redirect('login');

       
    }

    public function kasir_logout()
    {
            $array_items = array(   
    
                        'kasir_name',
                        'kasir_password' ,
                        'kasir_type',
                        'kasir_id',
                        'kasir_is_logged_in'
                        );



        $this->session->unset_userdata($array_items);
         $this->session->set_flashdata('msg', 'Staff Signed Out Now!');
            redirect('login');

       
    }

    
    
}    
  
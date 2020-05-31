<?php 


    class Dashboard extends CI_Controller {

        function __construct()
        {
            parent::__construct();
            if($this->session->userdata('login') != TRUE){
                redirect('login');
            }
        }

        function index(){
            $data['template'] = "pages/dashboard";
            $this->load->view('dashboard',$data);


        }


    }
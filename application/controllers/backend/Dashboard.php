<?php 


    class Dashboard extends CI_Controller {

        function __construct()
        {
            parent::__construct();
            is_admin();
           
        }

        function index(){
            $data = [];
            $this->load->view('admin/dashboard',$data);


        }


    }
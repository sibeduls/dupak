<?php 


    class Dashboard extends CI_Controller {

        function __construct()
        {
            parent::__construct();
            is_penguji();
        }

        function index(){
            $data['template'] = 'penguji/pages/index';
            $data['title'] = 'Dashboard Penguji';
            $this->load->view('penguji/dashboard',$data);
        }

    }
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('my_model', 'mm');
    }
    function index() {
        $data['news_'] = $this->mm->get_all_active_news();
        $data['bday'] = $this->mm->students_bday_this_week(7);
        $data['menu'] = 1;
        $this->load->view('templates/header');
        $this->load->view('index',$data);
        $this->load->view('templates/footer');
    }

    function about() {
        $data['menu'] = 2;
        $this->load->view('templates/header');
        $this->load->view('about',$data);
        $this->load->view('templates/footer');
    }

    function gallery() {
        $data['menu'] = 5;
        $this->load->view('templates/header');
        $this->load->view('gallery',$data);
        $this->load->view('templates/footer');
    }
    function contact() {
        $data['menu'] = 6;
        $this->load->view('templates/header');
        $this->load->view('contact',$data);
        $this->load->view('templates/footer');
    }
    
    function messages() {
        $data['menu'] = 1;
        $this->load->view('templates/header');
        $this->load->view('messages',$data);
        $this->load->view('templates/footer');
    }
    
    function uc_(){
        $this->load->view('error');
    }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data['menu'] = 1;
        $this->load->view('templates/header');
        $this->load->view('index',$data);
        $this->load->view('templates/footer');
    }

    public function about() {
        $data['menu'] = 2;
        $this->load->view('templates/header');
        $this->load->view('about',$data);
        $this->load->view('templates/footer');
    }

    public function gallery() {
        $data['menu'] = 5;
        $this->load->view('templates/header');
        $this->load->view('gallery',$data);
        $this->load->view('templates/footer');
    }
    public function contact() {
        $data['menu'] = 6;
        $this->load->view('templates/header');
        $this->load->view('contact',$data);
        $this->load->view('templates/footer');
    }

}

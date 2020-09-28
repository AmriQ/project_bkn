<?php 

class Home extends CI_Controller {

    public function __constructor() {
        parent::__constructor();

        // Load Library Codeigniter
        $this->load->library('form_validation');

        // load Model
        // ....
    }

    public function index() {
        $this->load->view('templates/header_dashboard');
        $this->load->view('home/index');
        $this->load->view('templates/footer_dashboard');
    }

    public function daftar_surat() {
        $this->load->view('templates/header_dashboard');
        $this->load->view('home/daftar_surat');
        $this->load->view('templates/footer_dashboard');
    }

    public function buat_surat() {
        $this->load->view('templates/header_dashboard');
        $this->load->view('home/buat_surat');
        $this->load->view('templates/footer_dashboard');
    }
}
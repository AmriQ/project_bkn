<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //load linrary
        $this->load->library('form_validation');

        //load model

    }

    public function index() {

        $this->load->view('login/index');
    }
}
<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller{
    public function index(){
        $data['content']= '<h1> Welcome to Toko Palugada</h1>';
        $this->load->view('templates/header');
        $this->load->view('templates/dashboard_admin', $data);
        $this->load->view('templates/footer');
    }
}
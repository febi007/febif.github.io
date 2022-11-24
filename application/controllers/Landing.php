<?php
class Landing extends CI_Controller{

    public function index(){
        $data ['pages'] = 'landing';
        $data ['isi'] = 'pages/v_landing';
        $this->load->view('layout/wrapper',$data);
    }
}
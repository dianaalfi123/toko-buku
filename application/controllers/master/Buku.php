<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        //Do your magic here
    }

    public function index()
    {
        $data = array();
        $data['view'] = 'master/buku';
        $this->load->view('template/layout', $data);
    }
}

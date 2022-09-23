<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peralatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        //Do your magic here
    }

    public function index()
    {
        $data = array();
        $data['view'] = 'master/peralatan';
        $this->load->view('template/layout', $data);
    }
}

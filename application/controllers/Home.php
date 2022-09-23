<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        //Do your magic here
    }

    public function index()
    {
        $data['view'] = '';
        $this->load->view('template/layout', $data);
    }
}

/* End of file Controllername.php */

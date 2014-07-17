<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
      //  $this->load->library('My_PHPMailer');
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('admin_model');
        $user = $this->ion_auth->user()->row();
		$this->data['user']= $user->username;
        
        if (!$this->ion_auth->logged_in())
  {
   redirect('auth/login');
  }
                if (!$this->ion_auth->is_admin())
  {
   $this->session->set_flashdata('message', 'You must be an admin to view this page');
   redirect('employee');
  }
    }
    
    function index() {
        $this->data['title'] = 'Admin';
         $data = $this->admin_model->fetch();
        $this->load->view('index',  $this->data);
        }
    }

    ?>


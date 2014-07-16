<?php
class Employee extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
                $this->load->model('emp_model');
                $this->load->library('ion_auth');
                if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
                if ($this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('admin/index');
		}
                $user = $this->ion_auth->user()->row();
		$this->data['user']= $user->username;
    }
    public function index() {
        $this->data['title'] = 'Employee Home';
        $this->load->view('home',  $this->data);
    }
    public function timesh()
    {
        $user = $this->ion_auth->user()->row();
		$uname['uname']= $user->username;
                $this->data['title'] = 'TimeSheet';
        //$this->load->view('header');
        $this->load->view('timesheet',  $this->data);
        
        //$this->load->view('footer');
    }
    public function timesheet()
    {
        $this->data['title'] = 'TimeSheet';
       $this->emp_model->enterTimeSheet();
       $this->load->view('timesheet',  $this->data);
        //$this->load->view('footer');
    }
    public function update()
    {
        $this->data['title'] = 'TimeSheet';
        
        updateTimeSheet();
        $this->load->view('showts',  $this->data);
        
        
   
    }
    public function showts()
    {
        $user = $this->ion_auth->user()->row();
		$id= $user->email;
                $this->data['title'] = 'TimeSheet Update';
         $ts=  $this->emp_model->showTimeSheet($id);
         $this->data['timesheet']=$ts;
         $this->load->view('tsupdate1',  $this->data);
         
        
    }
    public function apply_leave() {
        $this->data['title'] = 'Apply for leave';
        $this->load->view('apply_for_leave',  $this->data);
    }
    public function leave() {
        $this->data['title'] = 'Apply for leave';
   $this->emp_model->enterLeave();
      
        $this->load->view('index',  $this->data);
    }
}
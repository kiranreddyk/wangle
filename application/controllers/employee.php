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
			$this->session->set_flashdata('message', 'Have a nice day');
			redirect('admin');
		}
                $user = $this->ion_auth->user()->row();
		$this->data['user']= $user->username;
                  $this->data['message'] = $this->session->flashdata('message');
    }
    public function index() {
        $this->emphome();
    }
    public function emphome() {
        $this->data['title'] = 'Employee Home';
      
        $this->load->view('home',  $this->data);
    }
    public function timesh()
    {
        $user = $this->ion_auth->user()->row();
		$data['uname']= $user->username;
                $this->data['title'] = 'TimeSheet';
        //$this->load->view('header');
        $this->load->view('timesheet',  $this->data);
        
        //$this->load->view('footer');
    }
    public function timesheet()
    {
        $this->data['title'] = 'TimeSheet';
       $this->emp_model->enterTimeSheet();
      $this->session->set_flashdata('message', "<p>Timesheet updated successfully.</p>");
        $this->emphome();
    }
    public function update()
    {
        $this->data['title'] = 'daily time Sheet';
        
        $this->emp_model->updateTimeSheet();
      $this->session->set_flashdata('message', "<p>Timesheet updated successfully.</p>");
        $this->emphome();
        
        
   
    }
    public function showts()
    {
        $user = $this->ion_auth->user()->row();
		$id= $user->email;
                $this->data['title'] = 'daily Time Sheet Update';
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
   $fl = $this->emp_model->enterLeave();
      if($fl === TRUE)
      {   
          $this->session->set_flashdata('message', "<p>Leave Submited wait for approval.</p>");
          $this->data['leave']= $this->emp_model->showLeave(0);
          $this->load->view('leavelist',  $this->data);
      }
    }
    
}
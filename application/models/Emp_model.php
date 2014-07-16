<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class emp_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
           $this->load->library('ion_auth');
           
   
    }
    public function enterTimeSheet()
    {
             $user = $this->ion_auth->user()->row();
		$umail= $user->email;
        $datestring= "%d/%m/%y";
        $time=  time();
        $dt = mdate($datestring, $time);
         $data = array(
             'date'=>  $dt,
             'emp_id'=> $umail,
             'project_name'=>$this->input->post('project_name'),
             'task_desc'=>$this->input->post('task_desc'),
             'start'=>  $this->input->post('start'),
             'end'=> $this->input->post('end'),
             'task_status'=>  $this->input->post('task_status'),
             'total_time'=> $this->input->post('total_time')                           
             );
         return $this->db->insert('timesheet', $data);  
         
         
    }
    public function updateTimeSheet()
    {
             $user = $this->ion_auth->user()->row();
		$umail= $user->email;
        $datestring= "%d/%m/%y";
        $time=  time();
        $dt = mdate($datestring, $time);
         $data = array(
             'date'=>  $dt,
             'emp_id'=> $umail,
             'project_name'=>$this->input->post('project_name'),
             'task_desc'=>$this->input->post('task_desc'),
             'start'=>  $this->input->post('start'),
             'end'=> $this->input->post('end'),
             'task_status'=>  $this->input->post('task_status'),
             'total_time'=> $this->input->post('total_time')                           
             );
         $this->db->update('timesheet', $data);  
         
         
    }
    public function showTimeSheet($id)
    {
        
        $query= $this->db->get_where('timesheet',array('emp_id' => $id));
        return $query->row_array();
    }
    public function enterLeave()
    {
        $user = $this->ion_auth->user()->row();
        $umail= $user->email;
        $datestring= "%y/%m/%d";
        $time= $this->input->post('from');
        $from = mdate($datestring, $time);
        $time1= $this->input->post('to');
        $to = mdate($datestring, $time1);
         $data = array(
             
             'emp_id'=> $umail,
             'leave_desc'=>$this->input->post('leave_desc'),
             'type_of_leave'=>$this->input->post('type_of_leave'),
             'from_'=>  $from,
             'to'=> $to,
             'feedback'=>  $this->input->post('feedback')
                 
             );
         return $this->db->insert('apply_leave', $data);  
    }
}
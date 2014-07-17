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
        //$datestring= "%y/%m/%d";
        $time= $this->input->post('date_from');
        //$from = mdate($datestring, $time);
        $time1= $this->input->post('date_to');
        if($time <> 0 && $time1 <> 0)
        {
        //$to = mdate($datestring, $time1);
         $data = array(
             
             'emp_id'=> $umail,
             'leave_desc'=>$this->input->post('reason'),
             'type_of_leave'=>$this->input->post('leave_type'),
             'date_from'=>  $time,
             'date_to'=> $time1,
             'feedback'=>  $this->input->post('feedback')
                 
             );
         
         $this->db->insert('apply_leave', $data);  
        }
         return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function showLeave($st) {
        $query=  $this->db->where('status',$st);
        $query=$this->db->get('apply_leave');
        return $query->result_array();
        
    }
}
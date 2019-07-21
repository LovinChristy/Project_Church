<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
function __construct(){
        parent::__construct();
        
        $this->load->model('notification_model');
        $this->load->model('feed_model');
        
	}
        
	public function index()
	{
            //admin approved only
            $data['notification'] =$this->notification_model->postNotification();
           
		$this->load->view('home',$data);
	}
        public function about()
	{
		$this->load->view('about_view');
	}
        
}
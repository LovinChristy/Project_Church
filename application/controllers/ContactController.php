<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {
function __construct(){
         parent::__construct();
    $this->load->model('feed_model');

	}
	public function index()
	{
                       $data['feeddata']=$this->feed_model->PostFeedback();

		$this->load->view('contact',$data);
	}
}
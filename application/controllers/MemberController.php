<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberController extends CI_Controller {
function __Construct(){
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
    $this->load->model('memReg_model');
    $this->load->view('memberRegister');
    }  
	public function index()
	{
           // $data['records']=$this->memReg_model->state_show();
    $data['districtdata']=$this->memReg_model->getDistrict();
$data['talukdata']=$this->memReg_model->getTaluk();
$data['villagedata']=$this->memReg_model->getVillage();
		$this->load->view('memberRegister',$data);
	}
}
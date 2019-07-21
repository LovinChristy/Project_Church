<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecordsController extends CI_Controller 
{
 function __Construct()
    {
    parent::__Construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session', 'form_validation', 'email')); 
    $this->load->database('');
    $this->load->model('church_signup_model');
        $this->load->model('records_model');

     if(! $this->getsession())
            {
                redirect('http://localhost/BrethrenChurch/index.php/LoginController/index','refresh');
            }
    
    } 
	public function marriageindex()
	{
		$this->load->view('addMarriageRecord');
	}
        public function baptismindex()
	{
		$this->load->view('addBaptismRecord');
	}
        public function deathindex()
	{
		$this->load->view('addDeathRecord');
	}
        
        //verify -add baptism record
        public function verifyChurchBaptism()
	{
		if( $this->input->post('txt_date')=='' && $this->input->post('txt_officiant')=='' 
                         && $this->input->post('txt_membername')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('RecordsController/baptismindex');   
    }
    else if($this->input->post('txt_date')=='')
    {
        $this->session->set_flashdata('datemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter date!</div>');
            redirect('RecordsController/baptismindex'); 
    }
    else if($this->input->post('txt_officiant')=='')
    {
        $this->session->set_flashdata('officiantmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter officiant name!</div>');
            redirect('RecordsController/baptismindex'); 
    }  
     else if($this->input->post('txt_membername')=='')
    {
        $this->session->set_flashdata('membernamemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter member name!</div>');
            redirect('RecordsController/baptismindex'); 
    }  
    else
        {
         $s=$this->session->userdata('id');
            echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
           echo $chid;
           $this->form_validation->set_rules("txt_date", "Date", "required");
         $this->form_validation->set_rules("txt_officiant", "Officiant", "trim|required");
         $this->form_validation->set_rules("txt_membername", "Member Name", "trim|required");
                    $bdate=trim($this->input->post('txt_date'));
                     $bofficiant=trim($this->input->post('txt_officiant'));
                     $bmembername=trim($this->input->post('txt_membername'));
//                     echo $bdate,$bofficiant,$bmembername;
         $data=array('bapdate'=>$bdate,
             'officiant'=>$bofficiant,
             'membername'=>$bmembername,
             'chid'=>$chid);
                     $this->records_model->addChurchBaptism($data);
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Baptism record added successfully</div>');
 redirect('RecordsController/baptismindex');
            
    }
        
          
         
	}
                //verify -add marriage record
        public function verifyChurchMarriage()
	{
		if( $this->input->post('txt_bride')=='' && $this->input->post('txt_groom')=='' 
                        && $this->input->post('b_dob')=='' && $this->input->post('g_dob')=='' 
                         && $this->input->post('b_family')=='' && $this->input->post('g_family')==''
                        && $this->input->post('txt_date')==''&& $this->input->post('txt_venue')==''
                        && $this->input->post('txt_officiant')==''&& $this->input->post('bwitness1')==''
                        && $this->input->post('gwitness1')==''&& $this->input->post('bwitness2')==''
                        && $this->input->post('gwitness2')=='')
    {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('RecordsController/marriageindex');   
    }else if($this->input->post('txt_bride')=='')
    {
        $this->session->set_flashdata('bridemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter Bride name!</div>');
            redirect('RecordsController/marriageindex'); 
    }else if($this->input->post('txt_groom')=='')
    {
        $this->session->set_flashdata('groommsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter Groom name!</div>');
            redirect('RecordsController/marriageindex'); 
    }else if($this->input->post('b_dob')=='')
    {
        $this->session->set_flashdata('bdobmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter date of birth!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else if($this->input->post('g_dob')=='')
    {
        $this->session->set_flashdata('gdobmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter date of birth!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else if($this->input->post('b_family')=='')
    {
        $this->session->set_flashdata('bfamilymsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter bride family name!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else if($this->input->post('g_family')=='')
    {
        $this->session->set_flashdata('gfamilymsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter groom family name!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else if($this->input->post('txt_date')=='')
    {
        $this->session->set_flashdata('datemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter ceremony date!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else if($this->input->post('txt_venue')=='')
    {
        $this->session->set_flashdata('officiantmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter wedding venue!</div>');
            redirect('RecordsController/marriageindex'); 
    }  
    else if($this->input->post('txt_officiant')=='')
    {
        $this->session->set_flashdata('officiantmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter officiant name!</div>');
            redirect('RecordsController/marriageindex'); 
    }  
     else if($this->input->post('bwitness1')=='')
    {
        $this->session->set_flashdata('bwit1msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter bride witness 1!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else if($this->input->post('gwitness1')=='')
    {
        $this->session->set_flashdata('gwit1msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter groom witness 1!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else if($this->input->post('bwitness2')=='')
    {
        $this->session->set_flashdata('bwit2msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter bride witness 2!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else if($this->input->post('gwitness2')=='')
    {
        $this->session->set_flashdata('gwit2msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter groom witness 2!</div>');
            redirect('RecordsController/marriageindex'); 
    }
    else
        {
         $s=$this->session->userdata('id');
           // echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
          // echo $chid; //get church id from session
           $this->form_validation->set_rules("txt_bride", "Bride Name", "required");
           $this->form_validation->set_rules("txt_groom", "Groom Name", "required");
           $this->form_validation->set_rules("b_dob", "Bride DOB", "required");
           $this->form_validation->set_rules("g_dob", "Groom Dob", "required");
           $this->form_validation->set_rules("b_family", "Bride Family", "required");
             $this->form_validation->set_rules("g_family", "Groom Family", "required");
         $this->form_validation->set_rules("txt_date", "Date", "required");  // form validation rules set
         $this->form_validation->set_rules("txt_venue", "Venue", "trim|required");
         $this->form_validation->set_rules("txt_officiant", "Officiant", "trim|required");
         $this->form_validation->set_rules("bwitness1", "Witness 1", "trim|required");
          $this->form_validation->set_rules("gwitness1", "Witness 1", "trim|required");
           $this->form_validation->set_rules("bwitness2", "Witness 2", "trim|required");
            $this->form_validation->set_rules("gwitness2", "Witness 2", "trim|required");
            
            //get all inputs
            $bride=trim($this->input->post('txt_bride'));
            $groom=trim($this->input->post('txt_groom'));
            $bdob=trim($this->input->post('b_dob'));
            $gdob=trim($this->input->post('g_dob'));
            $bfamily=trim($this->input->post('b_family'));
            $gfamily=trim($this->input->post('g_family'));
                    $date=trim($this->input->post('txt_date'));
                    $venue=trim($this->input->post('txt_venue'));
                     $officiant=trim($this->input->post('txt_officiant'));
                     $bwit1=trim($this->input->post('bwitness1'));
                     $gwit1=trim($this->input->post('gwitness1'));
                     $bwit2=trim($this->input->post('bwitness2'));
                     $gwit2=trim($this->input->post('gwitness2'));
//                     echo $bdate,$bofficiant,$bmembername;
         //send all input as array
                     $data=array('chid'=>$chid, 'bridename'=>$bride,'groomname'=>$groom,'bridedob'=>$bdob,
                         'groomdob'=>$gdob,'groomfamilyname'=>$gfamily,'bridefamilyname'=>$bfamily,
                         'weddingdate'=>$date,'weddingvenue'=>$venue,
             'officiant'=>$officiant
             );
                     $mid=$this->records_model->addChurchMarriage($data);
//                   echo $mid;  
                            $witdata=array('bwitness1'=>$bwit1,'gwitness1'=>$gwit1,'bwitness2'=>$bwit2,
                         'gwitness2'=>$gwit2, 'marriageid'=>$mid
             );
                            $this->records_model->addMarriageWitness($witdata);
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Marriage record added successfully</div>');
 redirect('RecordsController/marriageindex');
            
    }
        
}
 public function verifyChurchDeath()
	{
		if( $this->input->post('txt_name')=='' && $this->input->post('txt_dob')=='' 
                        && $this->input->post('txt_dod')=='' && $this->input->post('txt_family')=='' 
                         && $this->input->post('txt_cemetry')=='' && $this->input->post('txt_officiant')=='')
                {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter all fields!</div>');
            redirect('RecordsController/deathindex');   
    }
    else if($this->input->post('txt_name')=='')
    {
        $this->session->set_flashdata('namemsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter name!</div>');
            redirect('RecordsController/deathindex'); 
    }
    else if($this->input->post('txt_dob')=='')
    {
        $this->session->set_flashdata('dobmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter Date of birth!</div>');
            redirect('RecordsController/deathindex'); 
    }
    else if($this->input->post('txt_dod')=='')
    {
        $this->session->set_flashdata('dodmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter date of death!</div>');
            redirect('RecordsController/deathindex'); 
    }
    else if($this->input->post('txt_family')=='')
    {
        $this->session->set_flashdata('familymsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter family name!</div>');
            redirect('RecordsController/deathindex'); 
    }
    else if($this->input->post('txt_cemetry')=='')
    {
        $this->session->set_flashdata('cemetrymsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter cemetry name!</div>');
            redirect('RecordsController/deathindex'); 
    }
    else if($this->input->post('txt_officiant')=='')
    {
        $this->session->set_flashdata('officiantmsg', '<div class="alert alert-danger alert-dismissable fade in text center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Enter officiant name!</div>');
            redirect('RecordsController/deathindex'); 
    }
    else
    {
        $s=$this->session->userdata('id');
           // echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
          // echo $chid; //get church id from session
           $this->form_validation->set_rules("txt_name", "Name", "required");
           $this->form_validation->set_rules("txt_dob", "Date of birth", "required");
           $this->form_validation->set_rules("txt_dod", "Date of death", "required");
           $this->form_validation->set_rules("txt_family", " Family name", "required");
           $this->form_validation->set_rules("txt_cemetry", "Cemetry", "required");
             $this->form_validation->set_rules("txt_officiant", " Officiant", "required");
       
            //get all inputs
            $name=trim($this->input->post('txt_name'));
            $dob=trim($this->input->post('txt_dob'));
            $dod=trim($this->input->post('txt_dod'));
            $family=trim($this->input->post('txt_family'));
            $cemetry=trim($this->input->post('txt_cemetry'));
            $officiant=trim($this->input->post('txt_officiant'));
                   
//                     echo $bdate,$bofficiant,$bmembername;
         //send all input as array
                     $data=array('chid'=>$chid, 
                         'name'=>$name,'family'=>$family,
                         'dateofbirth'=>$dob,
                         'dateofdeath'=>$dod,
                         'cemetryname'=>$cemetry,
                         'officiant'=>$officiant,
                          );
               $this->records_model->addChurchDeath($data);
                 
              $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Death record added successfully</div>');
 redirect('RecordsController/deathindex');
            
    }
   }
   //views
    public function view_baptism_record()
	{
        $s=$this->session->userdata('id');
           // echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
         $data['baptism'] =$this->records_model->churchBaptismRecord($chid);
         $this->load->view('viewBaptismRecord',$data);
	}
       
        public function view_marriage_record()
	{
        $s=$this->session->userdata('id');
           // echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
         $data['marriage'] =$this->records_model->churchMarriageRecord($chid);
         $this->load->view('viewMarriageRecord',$data);
	}
           
        public function view_death_record()
	{
        $s=$this->session->userdata('id');
           // echo $s;
         $query=$this->church_signup_model->getDetails($s);
           foreach($query as $ch)
           {
               $chid=$ch->chid;
           }
         $data['death'] =$this->records_model->churchDeathRecord($chid);
         $this->load->view('viewDeathRecord',$data);
	}
        public  function getsession()
        {
            if (($this->session->userdata('church')) &&($this->session->userdata('id') ) && ($this->session->userdata('loginuser') ))
            {
                return true;
            }
               else {
     
                return false;
                }
        
                }
        
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendEmail extends CI_Controller 
{
 
 function __construct(){
        parent::__construct();

   // load the library
 }
 
 public function index()
 {
     $this->send_mail();
 }
 public function send_mail()
         {   

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'lovinmail75@gmail.com',
    'smtp_pass' => '8113025358',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$message='Hello world!';
$this->load->library('email',$config);

$this->email->set_newline("\r\n");

//Email content

$this->email->from('lovinmail75@gmail.com','MyWebsite');
$this->email->to('lovinmail75@gmail.com');

$this->email->subject('Subject : Send mail');
$this->email->message($message);

//Send email
if($this->email->send()) 
{
    echo "Email sent!";
}
else 
{
    show_error($this->email->print_debugger());
}
  // forward to index page
  
 }
 
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DownloadController extends CI_Controller {
 public function __construct() {
   parent::__construct ();
   $this->load->helper('download');
  }
	public function downloadindex()
	{
		$this->load->view('institutions');
	}
//         public function downloadapplication()
//	{
//		$this->load->view('download_appln');
//	}
//        public function downloadapplication()
//	{
//		$this->load->view('download_appln');
//	}
        public function downloadschoolapp()
	{
		$this->load->view('downloadschoolappln');
	}
         public function downloadcollegeapp()
	{
		$this->load->view('downloadcollegeappln');
	}
         public function hospital()
	{
		$this->load->view('hospitals_view');
	}
        public function oldage()
	{
		$this->load->view('old_agehomes');
	}
        
        public function download($fileName = NULL) {   
//       $data = file_get_contents("/asset/download/MCA203.pdf"); // Read the file's contents
//$name = 'MCA203.pdf';
//
//force_download($name, $data);


   if ($fileName) {
    $file = realpath ( "asset/download" ) . "\\" . $fileName;
    // check file exists    
    if (file_exists ( $file )) {
     // get file content
     $data = file_get_contents ( $file );
     //force download
     force_download ( $fileName, $data );
    } else {
     // Redirect to base url
     redirect ( base_url () );
    }
   }
  }
}
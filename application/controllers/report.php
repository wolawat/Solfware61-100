<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct(){
        parent::__construct();
        echo "Constructor"."</br>";
    }


    
    public function index()
    {
        echo "Report Index";
    }
    public function _hello()
    {
        echo "</br>"."Hello World";
 }
   public function showname($name="Earth",$lastname="God"){
	   echo "My name is ".$name." ".$lastname;
	   $this->_hello();
   }   

   public function showview(){
	   $this->load->view("holle_view");
	   $this->load->view("holle_view");
	   $this->load->view("holle_view");
   }

   public function showuser(){
	   $data['name'] = "Earth";
	   $data['lastname'] = "Rattanosod";
	   $data['age'] = 21;
       $this->load->view("user_page",$data);
   }

   public function getuser($p1=null,$p2=null,$p3=null){
	$data['name'] = $p1;
	$data['lastname'] = $p2;
	$data['age'] = $p3;
	$this->load->view("user_page",$data);
}

public function showbooks(){
	$data['books'] = array("Java","kotlin","php");
	$this->load->view("book_page",$data);

}
}
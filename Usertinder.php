<?php

class Usertinder extends CI_Controller{


	public function loginpage(){

  
    $this->load->library('form_validation');


    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() === true){
      $this->load->view('indextinder_view');
      } 
      
    $this->load->library('session');

        $userdata = array(
            'username'  => 'john',
            'password'  => '1234',
            'logged_in' => true
        );

    $this->session->set_userdata( $userdata );

    $this->load->view('loginpage_view'); 
	}


  
  public function index(){

    //only load view if user is logged in
    $data['title'] = 'indextinder_view'; 


    if($this->session->userdata['logged_in'] != false){
      redirect('loginpage_view');
    } else {
      echo 'you can access this page';
    }
    $this->load->view('indextinder_view', $data);
  }
}










        /*$this->load->library('session');

        $newdata = array( 
      'username'    => 'tinderbox', 
      'password'      => '1234', 
      'logged_in'   => TRUE
    );  

        $this->session->set_userdata($newdata);
        $this->load->view('loginpage_view');

        //checkin if legit user
        if (isset($_SESSION['username']) === true &&
      isset($_SESSION['password']) === true &&
      isset($_SESSION['logged_in'] === true)
      ) {
               $error = "index";
              //true if its not the correct user
              $this->load->view('loginpage_view'); 
        }*/




  /*public function schedule(){

    //should do everything automatically check the user and redirect
    $this->load->view('schedule_view');

  }

  public function news(){
    $this->load->view('news_view');
  }
*/




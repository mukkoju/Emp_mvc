<?php

  class Payslips extends Controller {

      function __construct() {
          parent::__construct();
          Session::init();
        $logged = Session::get('loggedIn');

        if ($logged == false) {
            Session::destroy();
            header('location: ../index');
            exit();
        }  
          
      }

            public function index(){
                $this->view->user_details = $this->global->getUserDetails($_SESSION['loggedIn']);
                $this->view->render('payslips/index');
            }
            
            public function payslip_upload(){
                
                $this->model->payslip_upload();
                
            }
}
<?php

  class Download extends Controller {

      function __construct() {
          parent::__construct();
          // saessions area
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
        $this->view->get_slips = $this->global->getPaySlips($_SESSION['loggedIn']);
        $this->view->render('download/index');
    }
    
    public function down_slips($file_name){
        $folder_name =  Session::get('loggedIn');
        $file_path="/var/www/emp_mvc/uploads/$folder_name/" .$file_name;
        echo "$file_path";
        $this->model->down_slips($file_path, $file_name, "image/png");
        $this->view->render('download/index');
    }
}
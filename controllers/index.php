<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();

        //     Session::init();
        $logged1 = Session::get('LoggedIn');
        if ($logged1 == true) {
            header('location: ../home');
            exit();
        }

        // echo "index(login page)";
    }

    public function index() {

        $this->view->render('index/index');
    }

    public function login() {

        $temp = $this->model->run($_POST['email'], $_POST['password']);
        if($temp == "Incorect email or password"){
            echo $temp;
        }
        else{
            echo "https://localhost:8811/home/index";
        }
        
    }

    public function signup() {
        $this->model->signup();
    }

}

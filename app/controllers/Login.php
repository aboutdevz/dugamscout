<?php

class Login extends Controller{

    public function index(){

        $data['judul'] = 'Login';
        $this->view('templates/header',$data);
        $this->view('Login/index',$data);
        $this->view('templates/footer');    
    }

    public function Login(){
        if (isset($_POST['submit_Lgn'])){
            $data = $this->model('User_model')->getData($_POST);
            if ($this->model('User_model')->getUser($_POST)>0){
                if ($data['Level'] == 'admin'){
                    $_SESSION['userId'] = $data['id'];
                    $_SESSION['Level'] = $data['Level'];
                    $_SESSION['userName'] = $data['Uname'];
                    header('Location:'.BASEURL.'Home');
                    exit();
                }else{
                    $_SESSION['userId'] = $data['id'];
                    header('Location:'.BASEURL.'Home');
                    exit();
                }
            }
            else{
                header('Location:'.BASEURL.'Login');
                Flasher::setFlash('Login','Gagal','danger');
                exit();
            }
        }
    }

    public function Logout(){
        
        header('Location:'.BASEURL.'Home');
        session_unset();
        session_destroy();
    }

    
}
<?php

class Login extends Controller{

    public function index(){

        $data['judul'] = 'Login';
        $this->view('templates/loading');
        $this->view('templates/header',$data);
        $this->view('Login/index',$data);
        $this->view('templates/footer');    
    }

    public function Login(){
        if (isset($_POST['submit_Lgn'])){
            $data = $this->model('User_model')->getUser($_POST);
            $rowcount = $data['rowCount'];
            $single = $data['single'];
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $passcheck = password_verify($pass,$single['Upass']);
            
                if ($single['Uname'] == $user && $passcheck == TRUE && $single['Level'] == 'admin'){
                    $_SESSION['userId'] = $single['id'];
                    $_SESSION['Level'] = $single['Level'];
                    $_SESSION['userName'] = $single['Uname'];
                    header('Location:'.BASEURL.'Home');
                    exit();
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
        unset($_SESSION['Level']);
    }

    
}
<?php

class Nav extends controller{
    public function index($tag){
        
        $link = $this->model('Postingan_model')->getNav(strtolower($tag))['resultSet'];
        $count = $this->model('Postingan_model')->getNav(strtolower($tag))['rowCount'];
        
        if ($count == 0){
            header(BASEURL.'Home');
        }
        $data = [
            'judul' => '',
            'link' => $link,
            'state'=> 'Admin'
        ];
        if (isset($_SESSION['Level'])=='admin'){
            $this->data['state'] = TRUE;
        }else{
            $this->data['state'] = FALSE;
        }
        $this->view('templates/loading');
        $this->view('templates/header',$data);
        $this->view('Nav/index',$data);
        $this->view('templates/footer');
    }
}
<?php
class Auth extends CI_controller{

    function __construct(){
    parent::__construct();
    $this->load->model('model_userlog');
    }

    function login(){
        if(isset($_POST['Submit'])){
            $username = $this->$input->$post('username');
            $password = $this->$input->$post('password');
            $berhasil = $this->model_userlog->login($username,$password);
            if ($berhasil == 1){
                $this->session->set_userdata(array('status_login'=>'sukses'));
                redirect('overview');
            }else{
                redirect('index.php/auth/login');
            }
        }else{
            $this->load->view('admin/form_login');
        }
    }
    function logout(){ 
        $this->session->sess_destroy();
        redirect('');
    }
}
?>
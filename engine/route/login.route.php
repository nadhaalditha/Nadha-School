<?php

class Login extends Route{

    private $sn = 'loginData';

    public function index()
    {       
        $this -> bind('/login/loginPage');
    }

    public function prosesLogin()
    {
        $user           = $this -> inp('username');
        $password       = $this -> inp('password');
        $passHash       = md5($password);
        $data['jlh']    = $this -> state('loginData') -> loginProses($user, $passHash);
        if($data['jlh'] > 0){
            $this -> setses('userSes', $user);
        }else{
        }
        echo json_encode($data);
    }  

}

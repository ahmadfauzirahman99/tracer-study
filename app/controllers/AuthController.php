<?php

class AuthController extends \Phalcon\Mvc\Controller
{
    protected $ses_username = null;
    public function initialize()
    {
        $this->ses_username = $this->session->get('ses_username');
        if ($this->ses_username != null){
            $this->response->redirect('dashboard');
        }
    }
    public function loginFormAction(){
        $this->ses_user = $this->session->get('ses_username');
    }
    public function loginProsesAction(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $password = md5($password);
        $user = User::findFirstByUsername($username);
        if ($user->username == $username && $user->password == $password){
            $this->session->set('ses_id_user',$user->id_user);
            $this->session->set('ses_username',$user->username);
            $this->session->set('ses_hak_akses',$user->hak_akses);
            $this->session->set('ses_nama',$user->nama);
            if ($user->hak_akses == 'administrator') {
                $this->response->redirect('dashboard');
            }elseif ($user->hak_akses == 'alumni') {
                $this->response->redirect('dashboard/formalumni');
            }elseif ($user->hak_akses == 'user') {
                $this->response->redirect('dashboard/formuser');
            }
        }else{
            $this->flashSession->warning('Login gagal, username dan password tidak ditemukan');
            $this->response->redirect('auth/loginform');
        }
    }
    public function logoutAction(){
        $this->session->destroy();
        $this->response->redirect('auth/loginform');
    }

}

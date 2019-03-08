<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected $ses_id_user = null;
    protected $ses_username = null;
    protected $ses_hak_akses = null;
    protected $default_timezone ;
    public function initialize(){
        date_default_timezone_set('Asia/Jakarta');
        $this->ses_id_user = $this->session->get('ses_id_user');
        $this->ses_username = $this->session->get('ses_username');
        $this->ses_hak_akses = $this->session->get('ses_hak_akses');
        if ($this->ses_username == null){
            $this->response->redirect('');
        }
        $this->default_timezone = date_default_timezone_set('Asia/Jakarta');
    }
}

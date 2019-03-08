<?php

class DashboardController extends ControllerBase
{

    public function indexAction()
    {
        if ($this->ses_hak_akses != 'administrator') {
            $this->response->redirect('dashboard/formalumni');
        }
        $this->view->responden_alumni = count(HasilKuisionerAlumni::find());
        $this->view->responden_user = count(HasilKuisioner::find());
        $this->view->kuisioner_alumni = count(Kuisioner::find(
            [
                'conditions' => 'tujuan like "alumni"'
            ]
        ));
        $this->view->kuisioner_user = count(Kuisioner::find(
            [
                'conditions' => 'tujuan like "user"'
            ]
        ));
    }
    public function formAlumniAction()
    {
        $user = User::findFirstByUsername($this->ses_username);
        $hasil_kuisioner_alumni = HasilKuisionerAlumni::findFirstByIdUser($user->id_user);
        if ($hasil_kuisioner_alumni == true) {
            $hasil = true;
            $validate = false;
        }else{
            $this->view->kuisioners = Kuisioner::find(
                [
                    'order' => 'id_title',
                    'conditions' => 'tujuan like "alumni"'
                ]
            );
            $hasil = false;
            $validate = true;
        }
        $this->view->validate = $validate;

        $this->view->perusahaans = Perusahaan::find();

    }
    public function formUserAction()
    {
        $user = User::findFirstByUsername($this->ses_username);
        $hasil_kuisioner_alumni = HasilKuisioner::findFirstByIdUser($user->id_user);
        if ($hasil_kuisioner_alumni == true) {
            $hasil = true;
            $validate = false;
        }else{
            $this->view->kuisioners = Kuisioner::find(
                [
                    'order' => 'id_title',
                    'conditions' => 'tujuan like "user"'
                ]
            );
            $hasil = false;
            $validate = true;
        }
        // $kuisioner = Kuisioner::findFirstByIdKuisioner(35);
        // $this->view->kuisioner = $kuisioner;

        $user  = User::findFirstByUsername($this->ses_username);
        $perusahaan  = Perusahaan::findFirstByIdUser($user->id_user);
        $relasi = RelasiAlumniPerusahaan::find(
            [
                'conditions' => 'id_perusahaan like '.$perusahaan->id_perusahaan
            ]
        );
        $this->view->alumnis = $relasi;
    }
    public function hasilAction($hasil)
    {
        $user = User::findFirstByUsername($this->ses_username);
        if ($hasil == 'alumni') {
            $hasil_kuisioner = HasilKuisionerAlumni::findFirstByIdUser($user->id_user);
        }elseif ($hasil == 'user') {
            $hasil_kuisioner = HasilKuisioner::findFirstByIdUser($user->id_user);
        }
        $this->view->hasil_kuisioner =$hasil_kuisioner;
    }


}

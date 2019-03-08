<?php

class AlumniController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->alumnis = User::find(
            [
                'conditions' => 'hak_akses like "alumni"'
            ]
        );
    }
    public function jawabanAction($id_user)
    {
        $hasil_kuisioner_alumni = HasilKuisionerAlumni::findFirstByIdUser($id_user);
        $this->view->hasil_kuisioner_alumni =$hasil_kuisioner_alumni;
    }
    

}

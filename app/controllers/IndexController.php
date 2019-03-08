<?php

class IndexController extends AuthController
{

    public function indexAction()
    {

    }
    public function formalumniAction()
    {
        $this->view->kuisioners = Kuisioner::find(
            [
                'order' => 'id_title',
                'conditions' => 'tujuan like "alumni"'
            ]
        );
    }
    public function formUserAction()
    {
        $this->view->kuisioners = Kuisioner::find(
            [
                'order' => 'id_title',
                'conditions' => 'tujuan like "user"'
            ]
        );
        $kuisioner = Kuisioner::findFirstByIdKuisioner(35);
        $this->view->kuisioner = $kuisioner;
    }

}

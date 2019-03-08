<?php

class PerusahaanController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->perusahaans = User::find(
            [
                'conditions' => 'hak_akses like "user"'
            ]
        );
    }

}

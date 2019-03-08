<?php

class UserController extends ControllerBase
{
    public function addAction()
    {
        $username = $this->request->getPost('username');
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');
        $hak_akses = $this->request->getPost('hak_akses');
        $validasi = User::findFirstByUsername($username);
        if ($validasi == false) {
            $user = new User();
            $last_user= User::findFirst(
                [
                    'order' => 'id_user DESC'
                ]
            );
            $id_user = $last_user->id_user+1;
            $bool = $user->save(
                [
                    'id_user' => $id_user,
                    'username' => $username,
                    'password' => md5($username),
                    'nama' => $nama,
                    'email' => $email,
                    'hak_akses' => $hak_akses
                ]
            );
            if ($bool == true) {
                if ($hak_akses == 'alumni') {
                    $alumni = new Alumni();
                    $bool2 = $alumni->save(
                        [
                            'id_user' => $id_user,
                            'nama' => $nama,
                            'alamat' => $alamat
                        ]
                    );
                    if ($bool2 == true) {
                        $this->flashSession->success('Username '.$username.' berhasil ditambahkan');
                        $this->response->redirect('alumni/index');
                    }
                }elseif($hak_akses == 'user'){

                    $perusahaan = new Perusahaan();

                    $bool2 = $perusahaan->save(
                        [
                            'id_user' => $id_user,
                            'nama' => $nama,
                            'alamat' => $alamat
                        ]
                    );
                    if ($bool2 == true) {
                        $this->flashSession->success('Username '.$username.' berhasil ditambahkan');
                        $this->response->redirect('perusahaan/index');
                    }
                }

            }
        }else{
            $this->flashSession->warning('Mohon maaf, Username '.$username.' sudah pernah digunakan');
            $this->response->redirect('alumni/index');
        }

    }

}

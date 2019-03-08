<?php

class HasilKuisionerController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    }
    public function addAction()
    {
        $nama = $this->request->getPost('nama');
        $status = $this->request->getPost('status');
        $pertanyaan = $this->request->getPost('pertanyaan');
        $jawaban = $this->request->getPost('jawaban');
        $format_jawaban = $this->request->getPost('format_jawaban');


        $arr_pertanyaan_jawaban = [];
        $i = 0;
        foreach ($pertanyaan as $row_pertanyaan) {
            if ($format_jawaban[$i] == 'table') {
                $pertanyaan_jawaban = [
                    'keterangan' => $row_pertanyaan[0],
                    'radiokey' => $jawaban[$i][0],
                    'pertanyaan' => $row_pertanyaan[1],
                    'jawaban' => $jawaban[$i][1]
                ];
            }
            elseif($format_jawaban[$i] == 'radio2' ){
                if ($jawaban[$i][0] == 'null') {
                    $pertanyaan_jawaban = [
                        'pertanyaan' => $row_pertanyaan,
                        'jawaban'=> 'Lain-lain yaitu '.$jawaban[$i][1]
                    ];
                }else{
                    $pertanyaan_jawaban = [
                        'pertanyaan' => $row_pertanyaan,
                        'jawaban'=> $jawaban[$i][0]
                    ];
                }
            }
            else{
                $pertanyaan_jawaban = [
                    'pertanyaan' => $row_pertanyaan,
                    'jawaban'=> $jawaban[$i]
                ];
            }
            array_push($arr_pertanyaan_jawaban,$pertanyaan_jawaban);
            $i++;
        }
        $arr_pertanyaan_jawaban = json_encode($arr_pertanyaan_jawaban);
        $format_jawaban = json_encode($format_jawaban);

        if ($status == 'alumni') {
            $username = $this->request->getPost('username');
            $user = User::findFirstByUsername($username);
            $validasi = HasilKuisionerAlumni::findFirstByIdUser($user->id_user);
            if ($validasi == true) {
                $this->flashSession->warning('Mohon maaf, kuisioner dengan username '.$username.' sudah di isi');
                $this->response->redirect('index/formalumni');
            }else{
                if ($user == true) {
                    $hasil_kuisioner = new HasilKuisionerAlumni();
                    $bool = $hasil_kuisioner->save(
                        [
                            'id_user' =>  $user->id_user,
                            'nama' => $user->nama,
                            'format_jawaban' =>$format_jawaban,
                            'pertanyaan_jawaban' =>$arr_pertanyaan_jawaban
                        ]
                    );
                    $relasi_sekarang = new RelasiAlumniPerusahaan();
                    $relasi_sekarang->id_alumni = $user->id_user;
                    $relasi_sekarang->id_perusahaan = $this->request->getPost('perusahaan_sekarang');
                    $relasi_sekarang->save();
                    $relasi_pertama = new RelasiAlumniPerusahaan();
                    $relasi_pertama->id_alumni = $user->id_user;
                    $relasi_pertama->id_perusahaan = $this->request->getPost('perusahaan_pertama');
                    $relasi_pertama->save();
                }else{
                    $this->flashSession->warning('Mohon maaf, NIM / Username '.$username.' tidak ada');
                    $this->response->redirect('index/formalumni');
                }
            }
            if ($bool == true) {
                $this->flashSession->success('Kuisioner anda berhasil kami input, Terimakasih');
                if ($this->session->get('ses_username') != null) {
                    $this->response->redirect('dashboard/formalumni/hasil/alumni');
                }else{
                    $this->response->redirect('index');
                }
            }
        }else{
            $username = $this->request->getPost('username');
            $user = User::findFirstByUsername($username);
            $validasi = HasilKuisioner::findFirstByIdUser($user->id_user);
            if ($validasi == true) {
                $this->flashSession->warning('Mohon maaf, kuisioner dengan username '.$username.' sudah di isi');
                $this->response->redirect('index/formuser');
            }else{
                $hasil_kuisioner = new HasilKuisioner();
                $bool = $hasil_kuisioner->save(
                    [
                        'id_user' =>  $user->id_user,
                        'nama' => $nama,
                        'format_jawaban' =>$format_jawaban,
                        'pertanyaan_jawaban' =>$arr_pertanyaan_jawaban
                    ]
                );
                $relasi_sekarang = new RelasiAlumniPerusahaan();
                $relasi_sekarang->id_perusahaan = $user->id_user;
                $relasi_sekarang->id_alumni = $this->request->getPost('id_alumni');
                $relasi_sekarang->save();
            }
            if ($bool == true) {
                $this->flashSession->success('Kuisioner anda berhasil kami input, Terimakasih');
                if ($this->session->get('ses_username') != null) {
                    $this->response->redirect('dashboard/formuser/hasil/user');
                }else{
                    $this->response->redirect('index');
                }
            }
        }

    }
    public function hasilAlumniAction($param1)
    {
        $hasil_kuisioners = HasilKuisionerAlumni::find();
        switch ($param1) {
            case '3tahunterakhir':
            $this->view->pick('hasil_kuisioner/lulusan3tahunterakhir');
                    $arr_datatigatahun = [];
                    $datatigatahun = [];
                    $i = 0;
                    foreach ($hasil_kuisioners as $hasil_kuisioner) {
                        $hasil = json_decode($hasil_kuisioner->pertanyaan_jawaban);
                        if (date('Y') - $hasil[8]->jawaban <= 3 ) {
                            $datatigatahun[$i]->nama = $hasil[0]->jawaban;
                            $datatigatahun[$i]->ipk = $hasil[10]->jawaban[0];
                            $datatigatahun[$i]->tahun_wisuda = $hasil[8]->jawaban;
                            $datatigatahun[$i]->masa_studi = $hasil[8]->jawaban-$hasil[7]->jawaban;
                            $datatigatahun[$i]->masa_menganggur = $hasil[33]->jawaban[0];
                            array_push($arr_datatigatahun,$datatigatahun[$i]);
                        }
                        // echo $this->dump->variables($datatigatahun[$i]);
                        $i++;
                    }
                    // echo $this->dump->variables($arr_datatigatahun);
                    // exit();
                    $this->view->arr_datatigatahun =$arr_datatigatahun;
                break;
            case 'persentaselulusan':
            $this->view->pick('hasil_kuisioner/persentaselulusan');
                    $arr_persentase = [];
                    $persentase = [];
                    $rekap_persentase = [];

                    $i = 0;
                    foreach ($hasil_kuisioners as $hasil_kuisioner) {
                        // persentasi laporan
                        $hasil = json_decode($hasil_kuisioner->pertanyaan_jawaban);
                        $persentase[$i]->nama = $hasil[0]->jawaban;
                        $persentase[$i]->tempat_bekerja = $hasil[11]->jawaban;
                        $persentase[$i]->jabatan = $hasil[15]->jawaban;
                        $persentase[$i]->kesesuaian = $hasil[21]->jawaban[0];
                        switch ($persentase[$i]->kesesuaian) {
                            case 'Sangat sesuai dengan harapan':
                                 $bobot = 4;
                                break;
                            case 'Sesuai harapan':
                                 $bobot = 3;
                                break;
                            case 'Kurang sesuai harapan':
                                 $bobot = 2;
                                break;
                            case 'Tidak sesuai harapan':
                                 $bobot = 1;
                                break;
                        }
                        $persentase[$i]->bobot = $bobot;
                        array_push($arr_persentase,$persentase[$i]);
                        $i++;

                    }


                    // rekap
                    $i = 0;
                    $administrasis = [];
                    $operators = [];
                    $staff_it_s= [] ;
                    $programmers = [];
                    $tenaga_pendidiks = [];
                    $wiraswastas = [];
                    $texts = [];

                    $sangat_kesesuaians = [];
                    $sesuai_kesesuaians = [];
                    $kurang_kesesuaians = [];
                    $tidak_kesesuaians = [];
                    foreach ($hasil_kuisioners as $hasil_kuisioner) {
                        $hasil = json_decode($hasil_kuisioner->pertanyaan_jawaban);
                        $jabatan = $persentase[$i]->jabatan;

                        if ($jabatan == 'Administrasi') {
                            $administrasi = $jabatan;
                            array_push($administrasis,$administrasi);
                        };
                        if ($jabatan == 'Operator') {
                            $operator = $jabatan;
                            array_push($operators,$operator);
                        };
                        if ($jabatan == 'Staff IT') {
                            $staff = $jabatan;
                            array_push($staff_it_s,$staff);
                        };
                        if ($jabatan == 'Programmer') {
                            $programmer = $jabatan;
                            array_push($programmers,$programmer);
                        };
                        if ($jabatan == 'Tenaga Pendidik') {
                            $tenaga_pendidik = $jabatan;
                            array_push($tenaga_pendidiks,$tenaga_pendidik);
                        };
                        if ($jabatan == 'Wiraswasta') {
                            $wiraswasta = $jabatan;
                            array_push($wiraswastas,$wiraswasta);
                        };
                        if ($jabatan == 'text') {
                            $text = $jabatan;
                            array_push($texts,$text);
                        };

                        if ($persentase[$i]->kesesuaian ==  "Sangat sesuai dengan harapan") {
                            $kesesuaian = $persentase[$i]->kesesuaian;
                            array_push($sangat_kesesuaians,$kesesuaian);
                        }elseif($persentase[$i]->kesesuaian ==  "Sesuai harapan"){
                            $kesesuaian = $persentase[$i]->kesesuaian;
                            array_push($sesuai_kesesuaians,$kesesuaian);

                        }elseif($persentase[$i]->kesesuaian ==  "Kurang sesuai harapan"){
                            $kesesuaian = $persentase[$i]->kesesuaian;
                            array_push($kurang_kesesuaians,$kesesuaian);

                        }elseif($persentase[$i]->kesesuaian ==  "Tidak sesuai harapan"){
                            $kesesuaian = $persentase[$i]->kesesuaian;
                            array_push($tidak_kesesuaians,$kesesuaian);

                        }

                        $i++;
                    }

                    $administrasis = count($administrasis);
                    $this->view->administrasis = $administrasis;
                    $operators = count($operators);
                    $this->view->operators = $operators;
                    $staff_it_s = count($staff_it_s);
                    $this->view->staff_it_s = $staff_it_s;
                    $programmers = count($programmers);
                    $this->view->programmers = $programmers;
                    $tenaga_pendidiks = count($tenaga_pendidiks);
                    $this->view->tenaga_pendidiks = $tenaga_pendidiks;
                    $wiraswastas = count($wiraswastas);
                    $this->view->wiraswastas = $wiraswastas;
                    $texts = count($texts);
                    $this->view->texts = $texts;


                    $total =
                    $administrasis
                    +$operators
                    +$staff_it_s
                    +$programmers
                    +$tenaga_pendidiks
                    +$wiraswastas
                    +$texts;
                    $this->view->total = $total;

                    $sangat_kesesuaians = count($sangat_kesesuaians);
                    $this->view->sangat_kesesuaians = $sangat_kesesuaians;
                    $sesuai_kesesuaians = count($sesuai_kesesuaians);
                    $this->view->sesuai_kesesuaians = $sesuai_kesesuaians;
                    $kurang_kesesuaians = count($kurang_kesesuaians);
                    $this->view->kurang_kesesuaians = $kurang_kesesuaians;
                    $tidak_kesesuaians = count($tidak_kesesuaians);
                    $this->view->tidak_kesesuaians = $tidak_kesesuaians;

                    $total_kesesuaian =
                    $sangat_kesesuaians
                    +$sesuai_kesesuaians
                    +$kurang_kesesuaians
                    +$tidak_kesesuaians;
                    $this->view->total_kesesuaian = $total_kesesuaian;
                    $this->view->persentasekesesuaian = ($total_kesesuaian)/100;




                    $this->view->arr_persentase =$arr_persentase;

                break;
            default:
                # code...
                break;
        }

    }
    public function hasilUserAction($param1)
    {
        $hasil_kuisioner = HasilKuisioner::find();
        switch ($param1) {
            case 'kompetensialumni':
            $this->view->pick('hasil_kuisioner/kompetensialumni');
                $kompetensi_alumnis = [];
                $i = 0;
                foreach ($hasil_kuisioner as $hasil) {
                    $pertanyaan_jawaban = json_decode($hasil->pertanyaan_jawaban);
                    $kompetensi_alumni[$i] = $pertanyaan_jawaban[20];
                    $nama_instansi[$i] = $pertanyaan_jawaban[2];
                    array_push($kompetensi_alumnis,[$nama_instansi[$i],$kompetensi_alumni[$i]]);
                    $i++;
                }

                $this->view->kompetensi_alumnis = $kompetensi_alumnis;



                // exit();
                break;

            default:
                $this->response->redirect('dashboard');
                break;
        }
    }

}

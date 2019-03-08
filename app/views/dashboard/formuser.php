<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            <a onclick="history.back(-1)" class="btn btn-default" href="#"><span class="glyphicon glyphicon-arrow-left"></span></a>
            Persepsi User Terhadap Lulusan Program Studi Teknik Informatika
            Sekolah Tinggi Ilmu Komputer  (STIKOM) Pelita Indonesia, <?= date('d-M-Y') ?>
        </h3>
    </div>
    <div class="panel-body">
        <?php if ($validate == true): ?>
        <?php $this->flashSession->Output(); ?>
        <form class="" action="<?= $this->url->get('hasil_kuisioner/add') ?>" method="post">
            <input type="hidden" name="username" value="<?= $this->session->get('ses_username') ?>">
            <div class="alert alert-info">
                <div class="form-group">
                <label for="">Nama Penjawab Kuisioner</label>
                    <input required type="text" class="form-control" id="" placeholder="Nama lengkap penjawab kuisioner..." name="nama">
                    <input required type="hidden" class="form-control" value="user" name="status">
                </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4>form nama alumni</h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label for="">Nama Alumni yang bekerja di perusahaan anda</label>
                  <select class="form-control" name="id_alumni" >
                      <?php $i = 0; ?>
                      <?php foreach ($alumnis as $alumni): ?>
                          <?php if ($alumni->id_alumni != $prev ): ?>
                              <option  value="<?= $alumni->id_alumni ?>"><?= Alumni::findFirstByIdAlumni($alumni->id_alumni)->nama; ?></option>
                          <?php endif; ?>
                          <?php
                            $prev = $alumni->id_alumni;
                           $i++;
                           ?>
                      <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="panel-footer">

              </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Form Kuisioner</h4>
                </div>
              <div class="panel-body">
                  <ul class="list-group">
                      <?php
                          $before = 0 ;
                          $c = 0;
                      ?>
                      <?php foreach ($kuisioners as $kuisioner): ?>
                      <?php if ($before != $kuisioner->id_title): ?>
                      <h4 class="text text-success"><?= Title::findFirstByIdTitle($kuisioner->id_title)->title ?></h4>
                      <?php endif; ?>
                      <li class="list-group-item">
                          <h5><?= $c+1 ?>. <?= $kuisioner->pertanyaan ?></h5>
                          <p>
                              <input required type="hidden" name="pertanyaan[]" value="<?= $kuisioner->pertanyaan ?>">
                              <input required type="hidden" name="format_jawaban[]" value="<?= $kuisioner->format_pertanyaan ?>">
                              <?php if ($kuisioner->format_pertanyaan == 'radio' || $kuisioner->format_pertanyaan == 'radio2'): ?>
                                  <?php $jawaban = json_decode($kuisioner->jawaban) ?>
                                  <?php foreach ($jawaban as $radio): ?>
                                      <div class="radio">
                                          <?php if ($radio == 'text'): ?>
                                              <label id="<?= $c ?>label"><input required type="radio" placeholder="" name="jawaban[<?= $c ?>][0]" value="null">Lain-lain</label>
                                              <input  type="text"  placeholder="Yang lainya..." class="form-control" id="<?= $c ?>text" name="jawaban[<?= $c ?>][1]">
                                          <?php else: ?>
                                              <label><input required type="radio"  id="" placeholder="" name="jawaban[<?= $c ?>][0]" value="<?= $radio ?>"><?= $radio ?></label><br>
                                          <?php endif; ?>
                                      </div>
                                  <?php endforeach; ?>
                              <?php elseif($kuisioner->format_pertanyaan == 'text'): ?>
                                  <input required type="text" name="jawaban[<?= $c ?>]" placeholder="Jawaban anda..." class="form-control">
                              <?php elseif($kuisioner->format_pertanyaan == 'number'): ?>
                                  <input required type="number" name="jawaban[<?= $c ?>]" placeholder="Jawaban anda..." class="form-control">
                              <?php elseif($kuisioner->format_pertanyaan == 'date'): ?>
                                  <input required type="date" name="jawaban[<?= $c ?>]" placeholder="Jawaban anda..." class="form-control">
                              <?php elseif($kuisioner->format_pertanyaan == 'email'): ?>
                                  <input required type="email" name="jawaban[<?= $c ?>]" placeholder="Jawaban anda..." class="form-control">
                              <?php elseif($kuisioner->format_pertanyaan == 'table'): ?>
                                  <?php $jawaban = json_decode($kuisioner->jawaban) ?>
                                  <input required type="hidden" name="pertanyaan[<?= $c ?>][0]" name="" value="<?= $kuisioner->pertanyaan ?>">
                                  <table class="table table-bordered">
                                      <thead>
                                          <tr>
                                              <th>No.</th>
                                              <?php foreach ($jawaban->thead as $th): ?>
                                                  <th>
                                                      <?= $th ?>
                                                  </th>
                                              <?php endforeach; ?>
                                              <?php $cr = 0; ?>
                                              <?php foreach ($jawaban->radiokey as $th): ?>
                                                  <th>
                                                      <?= $th ?>
                                                      <input required type="hidden" name="jawaban[<?= $c ?>][0][<?= $cr ?>]" value="<?= $th ?>">
                                                  </th>
                                              <?php $cr++ ?>
                                              <?php endforeach; ?>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php $cr = 0; ?>
                                          <?php foreach ( $jawaban->tbody as $tr): ?>
                                              <tr>
                                                  <input required type="hidden" name="pertanyaan[<?= $c ?>][1][<?= $cr ?>]" name="" value="<?= $tr[1]?>">
                                                  <td><?=  $cr+1 ?></td>
                                                  <?php foreach ($tr as $td): ?>
                                                      <td><?= $td ?></td>
                                                  <?php endforeach; ?>
                                                  <?php foreach ($jawaban->radioval as $radio): ?>
                                                      <td>
                                                          <label><input required type="radio"  id="" placeholder="" name="jawaban[<?= $c ?>][1][<?= $cr ?>]" value="<?= $radio ?>"></label>
                                                      </td>
                                                  <?php endforeach; ?>
                                              </tr>
                                          <?php $cr++ ?>
                                          <?php endforeach; ?>
                                      </tbody>
                                  </table>
                              <?php endif; ?>
                          </p>
                      </li>
                      <?php
                      $before = $kuisioner->id_title;
                      $c++;
                      ?>
                      <?php endforeach; ?>
                  </ul>
              </div>
              <div class="panel-footer">
                  <button type="submit" class="btn btn-success">
                      Submit
                  </button>
              </div>
            </div>
        </form>
        <?php else: ?>
            <div class="alert alert-info">pengisian kuisioner sudah selesai
                <span class="glyphicon glyphicon-check"></span>
            </div>
            <a type="button" href="<?= $this->url->get('dashboard/hasil/user') ?>" class="btn btn-info">
                <span class="glyphicon glyphicon-file"></span>
                Lihat Hasil
            </a>
        <?php endif; ?>


    </div>
    <div class="panel-footer">

    </div>
</div>

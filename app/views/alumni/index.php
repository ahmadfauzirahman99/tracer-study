<div class="panel panel-info">
  <div class="panel-heading">
    <h4>Data Alumni dan jawaban kuisioner</h4>
  </div>
  <div class="panel-body">
      <div class="btn-group btn-group-sm">
          <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">
              <span class="glyphicon glyphicon-plus"></span>
              Tambah Data Alumni
          </button>
      </div>
      <?php $this->flashSession->Output(); ?>
      <hr>
      <table class="table table-hover" id="example">
          <thead>
            <tr>
                <th>NIM / Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hak Akses</th>
                <th>Tanggal</th>
                <th>Opsi</th>
            </tr>
          </thead>
          <?php foreach ($alumnis as $alumni): ?>
              <tr>
                  <td><?= $alumni->username ?></td>
                  <td><?= $alumni->nama ?></td>
                  <td><?= $alumni->email ?></td>
                  <td><?= $alumni->hak_akses ?></td>
                  <?php
                    $jawaban = HasilKuisionerAlumni::findFirstByIdUser($alumni->id_user);
                  ?>
                  <td>
                      <?php if ($jawaban): ?>
                      <?= date('d-M-Y',strtotime($jawaban->tanggal_menjawab)) ?>
                      <?php else: ?>
                          <span class="text text-warning ">Kuisioner belum terisi</span>
                      <?php endif; ?>
                  </td>
                  <td>
                           <?php if ($jawaban): ?>
                               <a href="<?= $this->url->get('alumni/jawaban/'.$alumni->id_user) ?>" class="btn btn-info btn-sm">
                                   <span class="glyphicon glyphicon-file"></span>
                                   Lihat Jawaban
                               </a>
                           <?php endif; ?>
                  </td>
              </tr>
              <!-- <div class="modal fade" id="edit<?= $alumni->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Edit Alumni</h4>
                      </div>
                      <form class="" action="<?= $this->url->get('alumni/update') ?>" method="post">
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="">Username</label>
                                <input value="<?= $alumni->username ?>" type="text" class="form-control" id="" placeholder="Username alumni..." name="username" required>
                              </div>
                              <div class="form-group">
                                <label for="">Nama</label>
                                <input value="<?= $alumni->nama ?>" type="text" class="form-control" id="" placeholder="Nama alumni..." name="nama" required>
                              </div>
                              <div class="form-group">
                                <label for="">E-Mail</label>
                                <input value="<?= $alumni->email ?>" type="email" class="form-control" id="" placeholder="Email alumni..." name="email">
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Tambah Alumni</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </form>
                    </div>
                </div>
              </div> -->
          <?php endforeach; ?>
          <tbody>

          </tbody>
      </table>
  </div>
  <div class="panel-footer">

  </div>
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Tambah Alumni</h4>
      </div>
      <form class="" action="<?= $this->url->get('user/add') ?>" method="post">
          <div class="modal-body">
              <div class="form-group">
                <label for="">NIM</label>
                <input type="number" class="form-control" id="" placeholder="NIM alumni..." name="username" required>
              </div>
              <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" id="" placeholder="Nama alumni..." name="nama" required>
              </div>
              <div class="form-group">
                <label for="">E-Mail</label>
                <input type="email" class="form-control" id="" placeholder="Email alumni..." name="email">
              </div>
              <div class="form-group">
                <label for="">Alamat</label>
                <input type="alamat" class="form-control" id="" placeholder="Alamat alumni..." name="alamat">
              </div>
              <input type="hidden" name="hak_akses" value="alumni">
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-success">Tambah Alumni</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </form>
    </div>
  </div>
</div>

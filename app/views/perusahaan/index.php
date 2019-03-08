<div class="panel panel-info">
  <div class="panel-heading">
    <h4>Data Perusahaan</h4>
  </div>
  <div class="panel-body">
      <div class="btn-group btn-group-sm">
          <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">
              <span class="glyphicon glyphicon-plus"></span>
              Tambah Data Perusahaan
          </button>
      </div>
      <?php $this->flashSession->Output(); ?>
      <hr>
      <table class="table table-hover" id="example">
          <thead>
            <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hak Akses</th>
            </tr>
          </thead>
          <?php foreach ($perusahaans as $perusahaan): ?>
              <tr>
                  <td><?= $perusahaan->username ?></td>
                  <td><?= $perusahaan->nama ?></td>
                  <td><?= $perusahaan->email ?></td>
                  <td><?= $perusahaan->hak_akses ?></td>
              </tr>
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
        <h4>Tambah Data Perusahaan</h4>
      </div>
      <form class="" action="<?= $this->url->get('user/add') ?>" method="post">
          <div class="modal-body">
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" placeholder="Username perusahaan..." name="username" required>
              </div>
              <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" id="" placeholder="Nama perusahaan..." name="nama" required>
              </div>
              <div class="form-group">
                <label for="">E-Mail</label>
                <input type="email" class="form-control" id="" placeholder="Email perusahaan..." name="email">
              </div>
              <div class="form-group">
                <label for="">Alamat</label>
                <input type="alamat" class="form-control" id="" placeholder="Alamat perusahaan..." name="alamat">
              </div>
              <input type="hidden" name="hak_akses" value="user">
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-success">Tambah Perusahaan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </form>
    </div>
  </div>
</div>

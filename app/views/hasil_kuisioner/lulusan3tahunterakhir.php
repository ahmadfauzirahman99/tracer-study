<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Data Alumni 3 Tahun terakhir</h3>
  </div>
  <div class="panel-body">
      <table class="table table-bordered" id="example" >
          <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>IPK</th>
                  <th>Tahun Wisuda</th>
                  <th>Masa Studi</th>
                  <th>Masa Tunggu Memperoleh Kerja</th>
              </tr>
          </thead>
          <tbody>
              <?php
              $i = 0 ;
              $ipks = 0;
              $masa_studis = 0;
              $masa_menganggurs = 0;
              ?>
              <?php foreach ($arr_datatigatahun as $datatigatahun): ?>
                  <tr>
                      <td><?= $i+1 ?></td>
                      <td><?= $datatigatahun->nama ?></td>
                      <td><?= $datatigatahun->ipk ?></td>
                      <td><?= $datatigatahun->tahun_wisuda ?></td>
                      <td><?= $datatigatahun->masa_studi ?> Tahun</td>
                      <td><?= $datatigatahun->masa_menganggur ?></td>
                  </tr>
                  <?php $ipks +=  $datatigatahun->ipk ?>
                  <?php $masa_studis +=  $datatigatahun->masa_studi ?>
                  <!-- <?php $masa_menganggurs +=  $datatigatahun->masa_menganggur ?> -->
                  <?php $i++; ?>
              <?php endforeach; ?>
          </tbody>
          <tfoot>
              <th colspan="2">RATA-RATA</th>
              <th><?= $ipks/$i ?></th>
              <th></th>
              <th><?= $masa_studis/$i ?></th>
              <!-- <th><?= $masa_menganggurs/$i ?></th> -->
          </tfoot>
      </table>
      <div id="p1">
          <img src="<?= $this->url->get('images/cop.png') ?>" alt="">
          <hr>
          <table class="table table-bordered"  >
              <thead>
                  <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>IPK</th>
                      <th>Tahun Wisuda</th>
                      <th>Masa Studi</th>
                      <th>Masa Tunggu Memperoleh Kerja</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $i = 0 ;
                  $ipks = 0;
                  $masa_studis = 0;
                  $masa_menganggurs = 0;
                  ?>
                  <?php foreach ($arr_datatigatahun as $datatigatahun): ?>
                      <tr>
                          <td><?= $i+1 ?></td>
                          <td><?= $datatigatahun->nama ?></td>
                          <td><?= $datatigatahun->ipk ?></td>
                          <td><?= $datatigatahun->tahun_wisuda ?></td>
                          <td><?= $datatigatahun->masa_studi ?> Tahun</td>
                          <td><?= $datatigatahun->masa_menganggur ?></td>
                      </tr>
                      <?php $ipks +=  $datatigatahun->ipk ?>
                      <?php $masa_studis +=  $datatigatahun->masa_studi ?>
                      <!-- <?php $masa_menganggurs +=  $datatigatahun->masa_menganggur ?> -->
                      <?php $i++; ?>
                  <?php endforeach; ?>
              </tbody>
              <tfoot>
                  <th colspan="2">RATA-RATA</th>
                  <th><?= $ipks/$i ?></th>
                  <th></th>
                  <th><?= $masa_studis/$i ?></th>
                  <!-- <th><?= $masa_menganggurs/$i ?></th> -->
              </tfoot>
          </table>
      </div>
      <button type="button" class="btn btn-info btn-block" onclick="printContent('p1')">
        <span class="glyphicon glyphicon-print"></span> print
      </button>
      <script type="text/javascript">
          $('#p1').hide();
      </script>
  </div>
</div>

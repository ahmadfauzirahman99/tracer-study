<div class="panel panel-default">
  <div class="panel-heading">
    <h4>
        <button type="button" class="btn btn-default" onclick="history.back(-1)">
          <span class="glyphicon glyphicon-arrow-left"></span>
        </button>
        Jawaban Kuisioner <strong><?= $hasil_kuisioner_alumni->nama ?> </strong>Tanggal Menjawab <strong><?= $hasil_kuisioner_alumni->tanggal_menjawab ?></strong>
    </h4>
  </div>
  <div class="panel-body">
      <?php
      $pertanyaan_jawaban = json_decode($hasil_kuisioner_alumni->pertanyaan_jawaban);
      ?>
      <table class="table table-striped table-hover">
          <thead>
              <tr>
                  <th>Pertanyaan</th>
                  <th>Jawaban</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($pertanyaan_jawaban as  $value): ?>
                  <tr>
                      <td><?= $value->pertanyaan ?></td>
                      <td>
                          <?php if (is_array($value->jawaban)): ?>
                              <?= $value->jawaban[0] ?>
                          <?php else: ?>
                              <?= $value->jawaban ?>
                          <?php endif; ?>
                      </td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>
  <div class="panel-footer">

  </div>
</div>

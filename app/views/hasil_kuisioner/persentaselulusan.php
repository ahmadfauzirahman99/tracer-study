<div class="panel panel-default">
    <div class="panel-heading">
        <h3>Persentase Lulusan yang bekerja sesuai bidang</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered" id="example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Alumni</th>
                    <th>Tempat Bekerja</th>
                    <th>Jabatan</th>
                    <th>kesesuaian</th>
                    <th>Bobot</th>
                </tr>
            </thead>
            <tbody>
                <?php
              $i = 0 ;
              $bobots = 0;
              ?>
                    <?php foreach ($arr_persentase as $persentase): ?>
                    <tr>
                        <td>
                            <?= $i+1 ?>
                        </td>
                        <td>
                            <?= $persentase->nama ?>
                        </td>
                        <td>
                            <?= $persentase->tempat_bekerja ?>
                        </td>
                        <td>
                            <?= $persentase->jabatan ?>
                        </td>
                        <td>
                            <?= $persentase->kesesuaian ?>
                        </td>
                        <td>
                            <?= $persentase->bobot ?>
                        </td>
                    </tr>
                    <?php $bobots += $persentase->bobot ?>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            </tbody>
            <tfoot>
                <th colspan="5">RATA-RATA</th>
                <th>
                    <?= $bobots/$i ?>
                </th>
            </tfoot>
        </table>
        <div id="p1">
            <div id="hide" class="col-md-12">
                <img src="<?= $this->url->get('images/cop.png') ?>" alt="">
                <hr>
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Alumni</th>
                            <th>Tempat Bekerja</th>
                            <th>Jabatan</th>
                            <th>kesesuaian</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      $i = 0 ;
                      $bobots = 0;
                      ?>
                            <?php foreach ($arr_persentase as $persentase): ?>
                            <tr>
                                <td>
                                    <?= $i+1 ?>
                                </td>
                                <td>
                                    <?= $persentase->nama ?>
                                </td>
                                <td>
                                    <?= $persentase->tempat_bekerja ?>
                                </td>
                                <td>
                                    <?= $persentase->jabatan ?>
                                </td>
                                <td>
                                    <?= $persentase->kesesuaian ?>
                                </td>
                                <td>
                                    <?= $persentase->bobot ?>
                                </td>
                            </tr>
                            <?php $bobots += $persentase->bobot ?>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <th colspan="5">RATA-RATA</th>
                        <th>
                            <?= $bobots/$i ?>
                        </th>
                    </tfoot>
                </table>
            </div>
            <hr>
            <div class="col-md-6">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>Jabatan</th>
                            <th>Orang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Administrasi</th>
                            <td>
                                <?= $administrasis ?>
                            </th>
                        </tr>
                        <tr>
                            <th>Operator</th>
                            <td>
                                <?= $operators ?>
                            </th>
                        </tr>
                        <tr>
                            <th>Staff IT</th>
                            <td>
                                <?= $staff_it_s ?>
                            </th>
                        </tr>
                        <tr>
                            <th>Programmer</th>
                            <td>
                                <?= $programmers?>
                            </td>
                        </tr>
                        <tr>
                            <th>Tenaga Pendidik</th>
                            <td>
                                <?= $tenaga_pendidiks?>
                            </td>
                        </tr>
                        <tr>
                            <th>Wiraswasta</th>
                            <td>
                                <?= $wiraswastas
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Text</th>
                            <td>
                                <?= $texts ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>
                                <?= $total ?>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kesesuaian</th>
                            <th>Orang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Sangat Kesesuaian</th>
                            <td><?= $sangat_kesesuaians ?></td>
                        </tr>
                        <tr>
                            <th>Sesuai Kesesuaian</th>
                            <td><?= $sesuai_kesesuaians ?></td>
                        </tr>
                        <tr>
                            <th>Kurang Kesesuaian</th>
                            <td><?= $kurang_kesesuaians ?></td>
                        </tr>
                        <tr>
                            <th>Tidak Kesesuaian</th>
                            <td><?= $tidak_kesesuaians ?></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th><?= $total_kesesuaian ?></th>
                        </tr>
                        <tr>
                            <th>Persentase Kesesuaian</th>
                            <td><?= $persentasekesesuaian ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="panel-footer">

    </div>
</div>
<button type="button" class="btn btn-info btn-block" onclick="printContent('p1')">
  <span class="glyphicon glyphicon-print"></span> print
</button>
<script type="text/javascript">
    $('#hide').hide();
</script>

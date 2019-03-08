<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Hasil Studi Pelacakan untuk Mengukur Kompetensi Alumni di Dunia Kerja</h3>
  </div>
  <div class="panel-body">
       <div id="p1">
           <div id="hide">
               <img src="<?= $this->url->get('images/cop.png') ?>" alt="">
               <hr>
           </div>
           <table class="table table-bordered" >
               <thead>
                   <tr >
                       <th rowspan="2">Pengguna</th>
                       <?php foreach ($kompetensi_alumnis[0][1]->pertanyaan as $pertanyaan): ?>
                           <th colspan="4"><?= $pertanyaan ?></th>
                       <?php endforeach; ?>
                       <th rowspan="2">Jumlah</th>
                       <th rowspan="2">Rata-rata</th>
                   </tr>
                   <tr>
                   <?php foreach ($kompetensi_alumnis[0][1]->pertanyaan as $pertanyaan): ?>
                       <?php foreach ($kompetensi_alumnis[0][1]->radiokey as $radiokey): ?>
                           <th><?= $radiokey ?></th>
                       <?php endforeach; ?>
                   <?php endforeach; ?>
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $nol = 0;
                    $i = 0 ;
                    $total1 = 0;
                    $total2 = 0;
                    $total3 = 0;
                    $total4 = 0;
                    $total5 = 0;
                    $total6 = 0;
                    $total7 = 0;
                   ?>
                   <?php foreach ($kompetensi_alumnis as $kompetensi_alumni): ?>
                       <tr>
                           <td><?= $kompetensi_alumni[0]->jawaban ?></td>
                           <?php
                           $sum = 0
                           ?>
                           <?php foreach ($kompetensi_alumni[1]->jawaban as $jawaban): ?>
                               <td><?php if($jawaban == 4): ?><?= $jawaban ?><?php else: ?><?= $nol ?><?php endif; ?></td>
                               <td><?php if($jawaban == 3): ?><?= $jawaban ?><?php else: ?><?= $nol ?><?php endif; ?></td>
                               <td><?php if($jawaban == 2): ?><?= $jawaban ?><?php else: ?><?= $nol ?><?php endif; ?></td>
                               <td><?php if($jawaban == 1): ?><?= $jawaban ?><?php else: ?><?= $nol ?><?php endif; ?></td>
                               <?php $sum+=$jawaban ?>
                           <?php endforeach; ?>
                           <td><?= $sum  ?></td>
                           <td><?= round($sum/count($kompetensi_alumnis[0][1]->pertanyaan),3)  ?></td>

                               <?php  $total1+= $kompetensi_alumni[1]->jawaban[0] ?>
                               <?php  $total2+= $kompetensi_alumni[1]->jawaban[1] ?>
                               <?php  $total3+= $kompetensi_alumni[1]->jawaban[2] ?>
                               <?php  $total4+= $kompetensi_alumni[1]->jawaban[3] ?>
                               <?php  $total5+= $kompetensi_alumni[1]->jawaban[4] ?>
                               <?php  $total6+= $kompetensi_alumni[1]->jawaban[5] ?>
                               <?php  $total7+= $kompetensi_alumni[1]->jawaban[6] ?>
                       </tr>
                       <?php $i++ ?>
                   <?php endforeach; ?>
               </tbody>
               <tfoot>
                   <tr>
                       <th>Total</th>
                       <td colspan="4"><?= $total1 ?></td>
                       <td colspan="4"><?= $total2 ?></td>
                       <td colspan="4"><?= $total3 ?></td>
                       <td colspan="4"><?= $total4 ?></td>
                       <td colspan="4"><?= $total5 ?></td>
                       <td colspan="4"><?= $total6 ?></td>
                       <td colspan="4"><?= $total7 ?></td>
                   </tr>
               </tfoot>
           </table>
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

<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Tambah Kuisioner</h3>
  </div>
  <form class="" action="<?= $this->url->get('kuisioner/addalumnikuisionerproses') ?>" method="post">
      <div class="panel-body">
              <div class="form-group">
                <label for="">Pertanyaan :</label>
                <textarea class="form-control" name="pertanyaan" rows="8" cols="80" placeholder="Pertanyaan yang diajukan..."></textarea>
              </div>
              <div class="form-group">
                  <label for="">Tipe Jawaban</label>
                  <select class="form-control" name="tipe_jawaban" id="tipe_jawaban" onchange="getVal()">
                      <option value="radio">Pilihan Ganda</option>
                      <option value="text" selected>Essay</option>
                  </select>
              </div>
              <div class="row">
                  <div class="form-group col-md-6" id="radio">
                    <label for="">Pilihan Ganda </label>
                    <input type="text" name="jawaban[]" value="" class="radio form-control">
                    <input type="text" name="jawaban[]" value="" class="radio form-control">
                    <input type="text" name="jawaban[]" value="" class="radio form-control">
                    <input type="text" name="jawaban[]" value="" class="radio form-control">
                    <input type="text" name="jawaban[]" value="" class="radio form-control">
                    <button type="button" class="btn btn-success" onclick="add()">
                        +
                    </button>
                    <button type="button" class="btn btn-danger" onclick="delete()">
                      -
                    </button>
                  </div>
              </div>
      </div>
      <div class="panel-footer">
          <button type="submit" class="btn btn-success">

          </button>
      </div>
  </form>
</div>
<script type="text/javascript">

  $('#radio').hide();
  function getVal() {
      var tipe_jawaban = $('#tipe_jawaban').val();
      console.log(tipe_jawaban);
      if (tipe_jawaban == 'radio') {
          $('#radio').show();
      }else {
          $('#radio').hide();
      };
  };
</script>

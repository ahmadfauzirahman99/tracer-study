<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kusioner Online STIKOM PI</title>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= $this->url->get('js/jquery-3.2.1.min.js') ?>"></script>
    <!-- Bootstrap -->
    <link href="<?= $this->url->get('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?= $this->url->get('css/styles.css')?>" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= $this->url->get('js/jquery.js') ?>"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>" />
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#e79b8b;" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <a class="navbar-brand" href="#">KUISIONER ONLINE STIKOM PI</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <?php if ($this->session->get('ses_username') != null ): ?>
                <ul class="nav navbar-nav">
                    <?php if ($this->session->get('ses_hak_akses') == 'administrator'): ?>
                    <li class="active"><a href="<?= $this->url->get('dashboard') ?>">beranda</a></li>
                    <li ><a href="<?= $this->url->get('alumni') ?>">alumni</a></li>
                    <li ><a href="<?= $this->url->get('perusahaan') ?>">perusahaan</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hasil Kuisioner
                                <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= $this->url->get('hasil_kuisioner/hasilalumni/3tahunterakhir')?>">Alumni 3 Tahun terakhir</a></li>
                            <li><a href="<?= $this->url->get('hasil_kuisioner/hasilalumni/persentaselulusan')?>">Persentase Lulusan</a></li>
                            <li><a href="<?= $this->url->get('hasil_kuisioner/hasiluser/kompetensialumni')?>">Hasil Study Pelacakan</a></li>
                        </ul>
                    </li>
                <?php elseif($this->session->get('ses_hak_akses') == 'alumni'): ?>
                    <li class="active"><a href="<?= $this->url->get('dashboard/formalumni') ?>">beranda</a></li>
                <?php elseif($this->session->get('ses_hak_akses') == 'user'): ?>
                    <li class="active"><a href="<?= $this->url->get('dashboard/formuser') ?>">beranda</a></li>
                <?php endif; ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-toggle="modal" data-target="#logout" >
                      Logout
                  </a></li>
                </ul>
                <?php else: ?>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="<?= $this->url->get('')?>">Kuisioner</a></li>
                    <li><a href="<?= $this->url->get('auth/logout')?>">Log In</a></li>
                </ul>
                <?php endif; ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="row" style="margin-top:5%">
        <div class="container">
            <?php echo $this->getContent(); ?>
        </div>
    </div>
    <!-- jQuery UI -->
    <script src="<?= $this->url->get('js/jquery-ui.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= $this->url->get('bootstrap/js/bootstrap.min.js') ?>"></script>

    <script src="<?= $this->url->get('vendors/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= $this->url->get('vendors/datatables/dataTables.bootstrap.js') ?>"></script>

    <script src="<?= $this->url->get('js/custom.js') ?>"></script>
    <script src="<?= $this->url->get('js/tables.js') ?>"></script>


    <!-- bootstrap-datetimepicker -->
    <link href="<?= $this->url->get('vendors/bootstrap-datetimepicker/datetimepicker.css') ?>" rel="stylesheet">
    <script src="<?= $this->url->get('vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js') ?>"></script>


    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Konfirmasi Logout</h4>
          </div>
          <div class="modal-body">
              Apakah anda yakin ingin logout?
          </div>
          <div class="modal-footer">
              <a href="<?= $this->url->get('auth/logout')?>" class="btn btn-success">Log Out</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</body>


<script>
    function printContent(el) {
        $('#hide').show();
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
        $('#hide').hide();
    }
</script>
</html>

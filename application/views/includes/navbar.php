<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('site/home') ?>"><h3>Penerimaan Siswa Baru</h3></a>
    </div>
<?php
 // $id = $this->Set_data->get_id(); 
?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="float: right;">
      <ul class="nav navbar-nav">
        <li class="item link">
            <a href="<?= base_url('site/input') ?>">Input Data</a>
        </li>
        <li class="item link">
            <?php// foreach ($id as $data): ?>
            <a href="<?= base_url('site/edit')//.$data->id_siswa) ?>">Edit Data</a>
          <?php// endforeach; ?>
        </li>
        <li class="item link">
            <a href="<?= base_url('site/daftar') ?>">Daftar Akun</a>
        </li>
        <li class="item">
            <?php 
            $nis = $this->session->userdata('nis'); 
            if(!isset($nis)){
              echo '"<a href="'.base_url('site/sign_in').'">Masuk</a>"';
            } else {
              echo '"<a href="'.base_url('site/logout').'">Keluar</a>"';
            }
            ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
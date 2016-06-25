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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="float: right;">
      <ul class="nav navbar-nav">
        <li class="item link">
            <a href="<?= base_url('site/input') ?>">Input Data</a>
        </li>

        <?php if($this->session->userdata('role') == 'siswa'): ?>
        <li class="item link">
            <a href="<?= base_url('site/data') ?>">Data</a>
        </li>
        <?php endif; ?>

        <?php if($this->session->userdata('role') == 'siswa'): ?>
        <li class="item link">
            <a href="<?= base_url('site/edit/'.$this->session->userdata('id_siswa')) ?>">Edit Data</a>
        </li>
        <?php endif; ?>

        <?php if(isset($username)): ?>
        <li class="item link">
            <a href="<?= base_url('site/daftar') ?>">Daftar Akun</a>
        </li>
        <?php endif; ?>

        <li class="item">
            <?php 
            if(!isset($nis)) {
                echo '"<a href="'.base_url('site/login').'">Masuk</a>"';
            }
            else if(!isset($username)){
                echo '"<a href="'.base_url('site/login').'">Masuk</a>"';
            }
            else {
                echo '"<a href="'.base_url('site/logout').'">Keluar</a>"';
            }
            ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
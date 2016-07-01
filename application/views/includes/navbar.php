<style type="text/css">
  ul li{margin-top: 6%; font-size: 22px;}
</style>
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
      <a class="navbar-brand" href="<?= base_url('home') ?>"><h3 style="margin-top: -2%;">Penerimaan Siswa Baru</h3></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="float: right;">
        <ul>
            <li class="item">
                <?php 
                $nis        = $this->session->userdata('nis');
                $username   = $this->session->userdata('username');

                if(!isset($nis) && !isset($username)) {
                    echo '"<a href="'.base_url('login/siswa').'">Masuk</a>"';
                }
                else {
                    echo '"<a href="'.base_url('login/logout').'">Keluar</a>"';
                }
                ?>
            </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
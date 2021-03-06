<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links'); ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahdeskripsimapel" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahdeskripsimapel">Ubah Deskripsi Mata Pelajaran</h4>
      </div>
      <form class="" action="<?php echo base_url('admin/update_deskripsi_mapel') ?>" method="post">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <input type="hidden" class="form-control" id="id_deskripsi_mapel" placeholder="" name="id_deskripsi_mapel">
          <div class="form-group">
            <label for="">Nama Mata Pelajaran</label>
            <select class="form-control" id="id_mapel" name="id_mapel" required>
              <?php foreach ($tb_mapel as $data_tb_mapel): ?>
                <option value="<?php echo $data_tb_mapel->id_mapel ?>"><?php echo $data_tb_mapel->nama_mapel ?></option>
              <?php endforeach; ?>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Jenis Deskripsi</label>
            <select class="form-control" id="jenis_deskripsi" name="jenis_deskripsi" required>
              <option value="Pengetahuan">Pengetahuan</option>
              <option value="Ketrampilan">Ketrampilan</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Nilai</label>
            <input type="text" class="form-control" id="nilai" placeholder="Masukkan Nilai" name="nilai" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi" name="deskripsi" required>
            <p class="help-block"></p>
          </div>
          <!-- AKHIR MEMBUAT FORM MENU -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--  MULAI MODAL-->
<body class="hold-transition skin-black sidebar-mini">
  <div class="modal fade" id="modal_deskripsi_mapel" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_deskripsi_mapel">Tambah Deskripsi Mata Pelajaran</h4>
        </div>
        <form class="" action="<?php echo base_url ('Admin/create_deskripsi_mapel') ?>" method="post">
          <div class="modal-body">

            <!-- MULAI MEMBUAT FORM MENU -->
            <div class="form-group">
              <label for="">Nama Mata Pelajaran</label>
              <select class="form-control"  name="id_mapel" required>
                <option value="">:Pilih:.</option>
                <?php foreach ($tb_mapel as $data_tb_mapel): ?>
                  <option value="<?php echo $data_tb_mapel->id_mapel ?>"><?php echo $data_tb_mapel->nama_mapel ?></option>
                <?php endforeach; ?>
              </select>
              <p class="help-block"></p>
              <div class="form-group">
                <label for="">Jenis Deskripsi</label>
                <select class="form-control"  name="jenis_deskripsi" required>
                  <option value="">:Pilih:.</option>
                  <option value="Pengetahuan">Pengetahuan</option>
                  <option value="Ketrampilan">Ketrampilan</option>
                </select>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Nilai</label>
                <input type="text" class="form-control"  placeholder="Masukkan Nilai" name="nilai" required>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Deskripsi</label>
                <input type="text" class="form-control"  placeholder="Masukkan Deskripsi" name="deskripsi" required>
                <p class="help-block"></p>
              </div>
              <!-- AKHIR MEMBUAT FORM MENU -->

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end of modal -->

<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="./" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SMP N 12 YOGYAKARTA</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SMP N 12 YOGYAKARTA</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                <p><?php echo $_SESSION['nama']; ?></p>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img <img src="<?php echo base_url('assets/images/avatar5.png');?>" class="img-circle" alt="User Image">
                  <p><?php echo $_SESSION['nama']; ?></p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url('Auth/logout') ?>" class="btn btn-default btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img <img src="<?php echo base_url('assets/images/avatar5.png');?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
              <p><?php echo $_SESSION['nama']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <?php $this->load->view('template/sidebar') ?>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <section class="content-header">
        <h1></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          <li class="active">Master Data</li>
          <li class="active">Data Siswa</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- YANG DIUBAH MULAI SINI -->

        <!-- Your Page Content Here -->
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>TABEL DESKRIPSI MATA PELAJARAN</b></h3>
              </div>
              <div class="box-tools" style="padding:10px;">
                <div class="form-group">

                  <!--  MENAMBAH NAMA DI BUTTON-->
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal_deskripsi_mapel">
                    <i class="fa fa-plus-circle"></i> Tambah Data
                  </button>
                  <?php if ($this->session->flashdata('sukses')) { ?>
                    <div class="">
                      <div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
                    </div>
                  <?php } ?>
                  <?php if ($this->session->flashdata('edit')) { ?>
                    <div class="">
                      <div class="alert alert-warning"><?php echo $this->session->flashdata('edit'); ?></div>
                    </div>
                  <?php } ?>
                  <?php if ($this->session->flashdata('delete')) { ?>
                    <div class="">
                      <div class="alert alert-danger"><?php echo $this->session->flashdata('delete'); ?></div>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <!-- menampilkan Tabel -->
              <div class="box-body table-responsive">
                <table class="table table-hover table-bordered table-responsive">
                  <thead>
                    <tr class="bg-blue" align="center">
                      <th>No</th>
                      <th>Mata Pelajaran</th>
                      <th>Nilai</th>
                      <th>Jenis Deskripsi</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no =1; foreach ($tb_deskripsi_mapel as $input_deskripsi_mapel):?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $input_deskripsi_mapel->nama_mapel?></td>
                        <td><?php echo $input_deskripsi_mapel->nilai?></td>
                        <td><?php echo $input_deskripsi_mapel->jenis_deskripsi?></td>
                        <td><?php echo $input_deskripsi_mapel->deskripsi?></td>
                        <td>
                          <!-- ketiga delete -->
                          <form class="" action="<?php echo base_url('admin/delete_deskripsi_mapel') ?>" method="post">
                            <!-- kelima -->
                            <button type="button" class="btn btn-warning" onclick="edit_deskripsi_mapel('<?php echo $input_deskripsi_mapel->id_deskripsi_mapel; ?>')">
                              <i class="fa fa-edit"></i>
                            </button>
                            <input type="hidden" name="id_deskripsi_mapel" value="<?php echo $input_deskripsi_mapel->id_deskripsi_mapel; ?>">
                            <button type="submit" class="btn btn-danger" name="delete_deskripsi_mapel" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
                              <i class="fa fa-trash-o"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div> <!-- /.box-body -->
            </div> <!-- /.box -->
          </div>
        </div>

        <!-- SAMPAI SINI AJA -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Default to the left -->
      <strong>Copyright &copy;<a href="./"> SMP N 12 Yogyakarta 2018 </a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 2.2.3 -->
  <?php $this->load->view('template/javascript') ?>
  <script type="text/javascript">
  function edit_deskripsi_mapel(id_deskripsi_mapel){
    $.ajax({
      type: 'get',
      url: '<?php echo base_url('Admin/edit_deskripsi_mapel?id_deskripsi_mapel=') ?>'+id_deskripsi_mapel,
      success: function(data){
        $response = $(data);
        var id_deskripsi_mapel = $response.filter('#id_deskripsi_mapel').text();
        var id_mapel = $response.filter('#id_mapel').text();
        var jenis_deskripsi = $response.filter('#jenis_deskripsi').text();
        var nilai = $response.filter('#nilai').text();
        var deskripsi = $response.filter('#deskripsi').text();
        //menampilkan ke Modal
        $('#id_deskripsi_mapel').val(id_deskripsi_mapel);
        $('#id_mapel').val(id_mapel);
        $('#jenis_deskripsi').val(jenis_deskripsi);
        $('#nilai').val(nilai);
        $('#deskripsi').val(deskripsi);
        $('#modal_ubahdeskripsimapel').modal('show');
      }
    });
  }
  </script>
</body>
</html>

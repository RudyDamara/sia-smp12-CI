<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- edit ketiga -->
<div class="modal fade" id="modal_ubahmapel" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahmapel">Ubah Data Mata Pelajaran</h4>
      </div>
      <form class="" action="<?php echo base_url('Admin/update_mapel') ?>" method="post">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <input type="hidden" class="form-control" id="id_mapel" placeholder="" name="id_mapel">
          <div class="form-group">
            <label for="">Kelas</label>
            <select class="form-control" id="id_kelas" name="id_kelas" required>
              <?php foreach ($tb_kelas as $data_tb_kelas): ?>
                <option value="<?php echo $data_tb_kelas->id_kelas ?>"><?php echo $data_tb_kelas->tingkat ?><?php echo $data_tb_kelas->nama_kelas ?></option>
              <?php endforeach; ?>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Mata Pelajaran</label>
            <input type="text" class="form-control" id="nama_mapel" placeholder="Masukkan Nama Mapel" name="nama_mapel" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Kelompok</label>
            <select class="form-control" id="kelompok" name="kelompok" required>
              <option value="A">Kelompok A. Pengetahuan</option>
              <option value="B">Kelompok B. Seni Budaya</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">KKM</label>
            <input type="text" class="form-control" id="kkm" placeholder="0" name="kkm" required>
            <p class="help-block"></p>
          </div>

          <!--  AKHIR MODAL MENU -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!--  MULAI MODAL-->
<body class="hold-transition skin-black sidebar-mini">
  <div class="modal fade" id="modal_mapel" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_mapel">Tambah Data Mata Pelajaran</h4>
        </div>
        <form class="" action="<?php echo base_url ('Admin/create_mapel') ?>" method="post">
          <div class="modal-body">

            <!-- MULAI MEMBUAT FORM MENU -->
            <div class="form-group">
              <label for="">Kelas</label>
              <select class="form-control" id="" name="id_kelas" required>
                <option value="">.:Pilih:.</option>
                <?php foreach ($tb_kelas as $data_tb_kelas): ?>
                  <option value="<?php echo $data_tb_kelas->id_kelas ?>"><?php echo $data_tb_kelas->tingkat ?><?php echo $data_tb_kelas->nama_kelas ?></option>
                <?php endforeach; ?>
              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Mata Pelajaran</label>
              <input type="text" class="form-control" id="" placeholder="Masukkan Nama Mapel" name="nama_mapel" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Kelompok</label>
              <select class="form-control" id="kelompok" name="kelompok" required>
                <option value="A">Kelompok A. Pengetahuan</option>
                <option value="B">Kelompok B. Seni Budaya</option>
              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">KKM</label>
              <input type="text" class="form-control" id="" placeholder="0" name="kkm" required>
              <p class="help-block"></p>
            </div>

            <!--  AKHIR MODAL MENU -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </form>
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

      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Your Page Content Here -->
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b> TABEL DATA MATA PELAJARAN</b></h3>
              </div>
              <div class="box-tools"style="padding:10px;">
                <div class="form-group">

                  <!--  MENAMBAH NAMA DI BUTTON-->
                    <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                  <button class="btn btn-success" data-toggle="modal"
                  data-target="#modal_mapel">
                  <i class="fa fa-plus-circle"></i> Tambah Data
                </button>
              <?php } ?>
              </div>
              <?php if ($this->session->flashdata('sukses')) { ?>
                <div class="">
                  <div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('edit')) { ?>
                <div class="">
                  <div class="alert alert-success"><?php echo $this->session->flashdata('edit'); ?></div>
                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('delete')) { ?>
                <div class="">
                  <div class="alert alert-danger"><?php echo $this->session->flashdata('delete'); ?></div>
                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('exist')) { ?>
            <div class="">
              <div class="alert alert-warning"><?php echo $this->session->flashdata('exist'); ?></div>
            </div>
          <?php } ?>
            </div>

            <!-- menampilkan Tabel -->
            <div class="box-body table-responsive">
              <table class="table table-hover table-bordered table-responsive">
                <thead>
                  <tr class="bg-blue" align="center">
                    <th>No</th>
                    <th>kelas</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelompok</th>
                    <th>KKM</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no =1; foreach ($tb_mapel as $input_mapel):?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $input_mapel->tingkat?><?php echo $input_mapel->nama_kelas?></td>
                      <td><?php echo $input_mapel->nama_mapel?></td>
                      <td><?php echo $input_mapel->kelompok?></td>
                      <td><?php echo $input_mapel->kkm?></td>
                      <td>
                        <form class="" action="<?php echo base_url('admin/delete_mapel') ?>" method="post">
                          <!-- kelima -->
                            <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                          <button type="button" class="btn btn-warning" onclick="edit_mapel('<?php echo $input_mapel->id_mapel; ?>')">
                            <i class="fa fa-edit"></i>
                          </button>
                          <input type="hidden" name="id_mapel" value="<?php echo $input_mapel->id_mapel; ?>">
                          <button type="submit" class="btn btn-danger"name="delete_mapel" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
                            <i class="fa fa-trash-o"></i>
                          </button>
                        <?php } ?>
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
function edit_mapel(id_mapel){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('Admin/edit_mapel?id_mapel=') ?>'+id_mapel,
    success: function(data){
      $response = $(data);
      var id_mapel = $response.filter('#id_mapel').text();
      var id_kelas = $response.filter('#id_kelas').text();
      var nama_mapel = $response.filter('#nama_mapel').text();
      var kelompok = $response.filter('#kelompok').text();
      var kkm = $response.filter('#kkm').text();
      //menampilkan ke Modal
      $('#id_mapel').val(id_mapel);
      $('#id_kelas').val(id_kelas);
      $('#nama_mapel').val(nama_mapel);
      $('#kelompok').val(kelompok);
      $('#kkm').val(kkm);
      $('#modal_ubahmapel').modal('show');
    }
  });
}
</script>

</body>
</html>

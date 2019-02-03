<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="assets/css/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
    require('koneksi.php');
    use koneksi\koneksi;

    $initDb = koneksi::initDatabase();
?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    

    <!-- Registrasi Form -->
    <form class="form-horizontal" role="form">
        <h2>Registrasi</h2>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label">Username*</label>
            <div class="col-sm-9">
                <input type="text" id="Username" placeholder="Username" class="form-control" name="username" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control" name="password">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Re-Password" class="form-control" name="repassword">
            </div>
        </div>
        <div class="form-group">
            <label for="namalengkap" class="col-sm-3 control-label">Nama Lengkap*</label>
            <div class="col-sm-9">
                <input type="text" id="namaLengkap" placeholder="Nama Lengkap" class="form-control" name="namaLengkap" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="Tempat Lahir" class="col-sm-3 control-label">Tempat Lahir*</label>
            <div class="col-sm-9">
                <input type="text" id="Tempat Lahir" placeholder="Tempat Lahir" class="form-control" name="tempatLahir" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Tanggal Lahir*</label>
            <div class="col-sm-9">
                <input type="date" id="birthDate" name="tanggalLahir" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="NIK" class="col-sm-3 control-label">NIK*</label>
            <div class="col-sm-9">
                <input type="text" id="NIK" placeholder="NIK" class="form-control" name="nik" autofocus>
            </div>
        </div>
        <div class="form-group">
            <label for="Nomor Telefon" class="col-sm-3 control-label">Nomor Telefon*</label>
            <div class="col-sm-9">
                <input type="text" id="Nomor Telefon" placeholder="Nomor Telefon" name="nomorTelepon" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="Pekerjaan" class="col-sm-3 control-label">Pekerjaan* </label>
            <div class="col-sm-9">
                <input type="text" id="Pekerjaan" placeholder="Pekerjaan" class="form-control" name="pekerjaan">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Jenis Kelamin*</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="femaleRadio" value="wanita">Perempuan
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="maleRadio" value="pria">Laki-laki
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Status*</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="menikahRadio" value="menikah">Menikah
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="blmRadio" value="belumMenikah">Belum Menikah
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name="email">
            </div>
        </div>
         <!-- /.form-group -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <span class="help-block">*Wajib Diisi</span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Registrasi</button>
    </form> <!-- /form -->
      <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

        }
      ?>
  </div>
</div>
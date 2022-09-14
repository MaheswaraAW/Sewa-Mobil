<section class="section">
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <!-- <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3"> -->
                
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 style="text-align:center";>Form Daftar</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('/CDaftarAkun/tambah_akun')?>" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="text" name="No_Telepon" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Scan KTP (format file .jpg/.png)</label>
                                        <input type="file" name="ktp" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <!-- <label>Nomor Telepon</label> -->
                                        <input type="hidden" name="status" value="1" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group col-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:100%">
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 style="text-align:center";>Tambah Mobil</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('/CMobil/tambah_mobil')?>" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Foto Mobil (format file .jpg/.png)</label>
                                        <input type="file" name="foto_mobil" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Type Mobil</label>
                                        <input type="text" name="type_mobil" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Merk</label>
                                        <input type="text" name="merk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Nomor Polisi</label>
                                        <input type="text" name="no_polisi" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" name="harga" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
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
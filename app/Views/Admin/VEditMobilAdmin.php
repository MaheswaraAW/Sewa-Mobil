<section class="section">
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-5 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 style="text-align:center";>Edit Mobil</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($dtmobil as $mb) : ?>
                        <form action="<?= base_url('/CMobil/edit_mobil').'/'. $mb['idmobil']?>" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <img class="card-img-top" height="170px"
                                        src="<?= base_url('assets/mobil/') .'/'. $mb['foto_mobil'] ?>">
                                    </img>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Foto Mobil (format file .jpg/.png)</label>
                                        <input type="file" name="foto_mobil" class="form-control">
                                    </div>
                                </div>
                                <!-- <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Nama File</label> -->
                                        <input type="hidden" name="foto_mobil" value="<?php echo $mb['foto_mobil'];?>" class="form-control" readonly>
                                    <!-- </div>
                                </div> -->
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Type Mobil</label>
                                        <input type="text" name="type_mobil" value="<?php echo $mb['type_mobil'];?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Merk</label>
                                        <input type="text" name="merk" value="<?php echo $mb['merk'] ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Nomor Polisi</label>
                                        <input type="text" name="no_polisi" value="<?php echo $mb['no_polisi']?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" name="harga" value="<?php echo $mb['harga']?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Status (1:Belum Disewa  0:Disewa)</label>
                                        <input type="text" name="status" value="<?php echo $mb['status']?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:100%">
                                            Edit
                                        </button>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
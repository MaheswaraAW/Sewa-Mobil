<section class="section">
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-5 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 style="text-align:center";>Detail Mobil</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?//= base_url('/Home/indexadmin')?>" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <?php foreach ($dtmobil as $mb) : ?>
                                <div class="col-12 mt-2">
                                    <img class="card-img-top" height="170px"
                                        src="<?= base_url('assets/mobil/') .'/'. $mb['foto_mobil'] ?>">
                                    </img>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Type Mobil</label>
                                        <input type="text" value="<?php echo $mb['type_mobil']?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Merk</label>
                                        <input type="text" value="<?php echo $mb['merk']?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Nomor Polisi</label>
                                        <input type="text" value="<?php echo $mb['no_polisi']?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" value="<?php echo $mb['harga']?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $mb['status']?>" class="form-control" readonly>
                                    </div>
                                </div>
                                <?php endforeach ?>

                                <div class="form-group col-12 mt-3">
                                    <?php if(isset($_SESSION['Status'])){
                                        if($_SESSION['Status']==0){ ?>
                                    <a href="<?= base_url('/Home/indexadmin')?>" class="btn btn-primary btn-lg btn-block" style="width:100%">
                                        Kembali
                                    </a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('/Home/indexclient')?>" class="btn btn-primary btn-lg btn-block" style="width:100%">
                                        Kembali
                                    </a>
                                    <?php } } else {?>
                                        <a href="<?= base_url('/')?>" class="btn btn-primary btn-lg btn-block" style="width:100%">
                                        Kembali
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
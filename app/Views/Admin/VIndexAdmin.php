<style>
.btn-default {
    background-color: #3232FF;
    color: #fff;
    width: 100px;
}
</style>
<!-- Page Content -->
<div class="container">   
      <div class="row mt-5">
          <div class="col-12">
              <div class="row mt-5">
              </div>
              <div class="row">
                  <div class="col-12">
                  <a class="btn btn-success" style='width: 100%; color:white;'
                    href="<?= base_url('CMobil/index')?>">Tambah Mobil</a>                
                  </div>
              </div>
              <!-- <br> -->
              <div class="row mt-2">
                  <?php foreach ($dtmobil as $mb) : ?>

                  <div class="col-lg-3 col-md-6 mb-4">
                      <div class="card" style="width: 100%">
                          <img class="card-img-top" height="170px"
                              src="<?= base_url('assets/mobil') .'/'. $mb['foto_mobil'] ?>">
                           </img>
                          <div class="card-body">
                              <h4 class="card-title font-weight-bold">
                                  <?= $mb['merk'] ?>
                              </h4>
                              <h5 style="font-size: 18px"><?= $mb['harga'] ?> /hari</h5>
                          </div>
                          <div class="card-footer">
                              <div class="row">
                                  <div class="col-6">
                                      <?php
                                        if ($mb['status'] == "0") {
                                            echo "<span class = 'btn btn-warning' style='width: 100px;' disable>Disewa</span>";
                                        } else {
                                            echo "<span class = 'btn btn-default' style='width: 100px;' disable>Rental</span>";
                                            // echo anchor('Home/indexadmin', '<button class="btn btn-default">Rental</button>');
                                        } 
                                      ?>
                                  </div>
                                  <div class="col-6">
                                      <a class="btn btn-success" style='width: 100px;'
                                          href="<?= base_url('CMobil/detail') .'/'. $mb['idmobil'] ?>">Detail</a>
                                  </div>
                                  <div class="col-6 mt-2">
                                      <a class="btn btn-danger" style='width: 100px;'
                                          href="<?= base_url('CMobil/hapus') .'/'. $mb['idmobil'] ?>">Hapus</a>
                                  </div>
                                  <div class="col-6 mt-2">
                                      <a class="btn btn-secondary" style='width: 100px;'
                                          href="<?= base_url('CMobil/index_edit') .'/'. $mb['idmobil'] ?>">Edit</a>
                                  </div>
                                  
                                  <div class="col-12 mt-2">
                                        <?php foreach($dtsewa as $sw) : 
                                            if($mb['idmobil']==$sw['idmobil']&&$sw['status_sewa']==0){  ?>
                                                <a class="btn btn-danger" style='width: 100%;'
                                                href="<?= base_url('CMobil/index_verifikasi') .'/'. $mb['idmobil'] ?>">Belum Verifikasi</a>
                                        <?php }  endforeach;?>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <?php endforeach ?>

              </div>
          </div>
      </div>
  </div>
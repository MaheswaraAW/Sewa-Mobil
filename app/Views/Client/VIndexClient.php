<style>
.btn-default {
    background-color: #3232FF;
    color: #fff;
    width: 100px;
}
</style>
  <!-- Page Content -->
<div class="container">
<!--         <?php if(isset($_SESSION['id_user'])==NULL){ ?>
            <a href="<?= base_url('customer/Chat/chatting/')?>" class="floating-wa"><img class="wa-logo" width="60px" height="60px" src="https://user-images.githubusercontent.com/34729296/34238334-b5a35a20-e5c6-11e7-9963-79c6308f9769.png"></a>
        <?php }
        if(isset($_SESSION['id_user'])!= NULL){ ?>
            <a href="<?= base_url('customer/Chat/chatting/'.$_SESSION['id_user'])?>" class="floating-wa"><img class="wa-logo" width="60px" height="60px" src="https://user-images.githubusercontent.com/34729296/34238334-b5a35a20-e5c6-11e7-9963-79c6308f9769.png"></a>
        <?php } ?> -->

  <!-- <a href="<?= base_url('customer/Chat/chatting')?>" class="floating-wa"><img class="wa-logo" width="60px" height="60px" src="https://user-images.githubusercontent.com/34729296/34238334-b5a35a20-e5c6-11e7-9963-79c6308f9769.png"></a> -->

      <div class="row">


          <!-- /.col-lg-3 -->

          <div class="col">
              <div class="row mt-5">
              </div>
              <div class="row mt-5">
                <?php
                    if(!empty(session()->getFlashdata('msgclient'))): ?>
                    <div class="alert alert-info mt-3" style="text-align:center">
                    <a class="text-black" style="text-decoration: none"><i
                        class="fas fa-sign-in-alt"></i><?= session()->getFlashdata('msgclient') ?> </a>
                    </div>
                <?php endif; ?>
                  <?php foreach ($dtmobil as $mb) : ?>
                  <div class="col-lg-3 col-md-6 mb-4">
                      <div class="card" style="width: 250px">
                          <img class="card-img-top" height="170px"
                              src="<?= base_url('assets/mobil/') .'/'. $mb['foto_mobil'] ?>">
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
                                            echo anchor('CClient/index_rental_client/' . $mb['idmobil'], '<button class="btn btn-default">Rental</button>');
                                        }

                                        ?>
                                  </div>
                                  <div class="col-6">
                                      <a class="btn btn-success" style='width: 100px;'
                                          href="<?= base_url('CMobil/detail') .'/'. $mb['idmobil'] ?>">Detail</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <?php endforeach ?>

              </div>
          </div>
          <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

  </div>
  <!-- /.container -->
<style>
.btn-default {
    background-color: #3232FF;
    color: #fff;
    width: 100px;
}
.floating-wa{
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            
            /* box-shadow: 2px 7px 20px black; */
            position: fixed;
            right: 20px;
            bottom: 20px;
            transition: background 0.25s;

            /* button */
            outline: green;
            border: none;
            cursor: pointer;
        }

        .wa-logo{
            box-shadow: 2px 2px 5px black;
            border-radius: 20%;
            background: white;
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
              <div class="row">
                  <div class="col-md-3">
                      <h3>Daftar Mobil</h3>
                      <hr style="height: 2px" width="250px" color="#0F0E20">
                  </div>
              </div>
              <br>


              <div class="row">

                  <?php foreach ($dtmobil as $mb) : ?>

                  <div class="col-lg-3 col-md-6 mb-4">
                      <div class="card" style="width: 250px">
                          <img class="card-img-top" height="170px"
                              src="<?= base_url('assets/mobil/') . $mb['foto_mobil'] ?>">
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
                                            echo "<span class = 'btn btn-danger' style='width: 100px;' disable>Disewa</span>";
                                        } else {
                                            echo anchor('customer/rental/tambah_rental/' . $mb['idmobil'], '<button class="btn btn-default">Rental</button>');
                                        }

                                        ?>
                                  </div>
                                  <div class="col-6">
                                      <a class="btn btn-secondary" style='width: 100px;'
                                          href="<?= base_url('customer/dashboard/detail_mobil/') . $mb['idmobil'] ?>">Detail</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <?php endforeach ?>

              </div>
              <!-- /.row -->
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
          </div>
          <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

  </div>
  <!-- /.container -->
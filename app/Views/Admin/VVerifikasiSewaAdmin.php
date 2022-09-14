<div class="container mt-5 mb-5">
    <div class="card bg-light">
        <?php foreach ($dtsewa as $sw) : ?>
        <div class="card-body">
            <div class="row">
                <h3 class="mb-4 ml-3 font-weight-bold"><?//php $mb['merk'] ?></h3>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="<?= base_url('assets/bukti_transfer') .'/'. $sw['bukti_transfer'] ?>" height="380px" width="610px">
                </div>
                <div class="col-md-5">
                    <form action="<?= base_url('CMobil/verifikasi_sewa').'/'. $sw['idmobil']?>" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="date" name="tgl_sewa" value="<?php echo $sw['tgl_sewa']?>" class="form-control picker" autocomplete="off"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="tgl_selesai" value="<?php echo $sw['tgl_selesai']?>" class="form-control picker" autocomplete="off"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label>Waktu Sewa (Hari)</label>
                            <!-- <input type="hidden" name="idmobil" value="<?//= $mb['idmobil'] ?>"> -->
                            <input type="number" name="waktu_sewa" id="waktu_sewa" value="<?php echo $sw['hari']?>" class="form-control picker" autocomplete="off" readonly>
                        
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="<?php echo $sw['nama']?>" class="form-control picker" autocomplete="off" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nomor Rekening</label>
                            <input type="number" name="no_rekening" value="<?php echo $sw['no_rekening']?>" class="form-control picker" autocomplete="off" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="number" name="no_telepon" value="<?php foreach ($dtakun as $ak) : 
                            if($sw['nama']==$ak['Nama']){ echo $ak['No_Telepon'];} endforeach;?>" class="form-control picker" autocomplete="off" readonly>
                        </div>
                        <div class="form-group">
                            <label>total harga</label>
                            <input type="number" name="total_harga" id="total_harga" value="<?php echo $sw['harga_total']?>"class="form-control picker" autocomplete="off" readonly>
                        </div>
                        <input type="hidden" name="status_sewa" id="status_sewa" value="1" class="form-control picker">
                        <!-- <div class="col-6" style="width:100%;"> -->
                            <button type="submit" class="btn btn-success mt-3 float-right" style="width:100%;">
                            Setuju</button>
                            <!-- <button type="submit" class="btn btn-danger mt-3 float-right" style="width:50%;">
                            Tidak Setuju</button> -->
                        <!-- </div> -->
                        <!-- <button type="submit" class="btn btn-primary mt-3 float-right" style="width:100%;">
                            Setuju</button>
                        <button type="submit" class="btn btn-primary mt-3 float-right" style="width:100%;">
                        Tidak Setuju</button> -->
                        <a href="<?= base_url('Home/indexadmin')?>" class="btn btn-primary mt-3 float-right" style="width:100%;">
                        Kembali</a>

                    </form>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
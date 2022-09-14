<div class="container mt-5 mb-5">
    <div class="card bg-light">
        <?php foreach ($dtmobil as $mb) : ?>
        <div class="card-body">
            <div class="row mt-3">
                <h3 class="mb-4 ml-3 font-weight-bold" style="text-align:center"><?php echo $mb['merk'] ?></h3>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="<?= base_url('assets/mobil') .'/'. $mb['foto_mobil'] ?>" height="380px" width="610px">
                </div>
                <div class="col-md-5">
                    <form action="<?= base_url('CClient/tambah_sewa') ?>" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="date" name="tgl_sewa" class="form-control picker" onclick="disable()" autocomplete="off"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="tgl_selesai" class="form-control picker" onclick="disable()" autocomplete="off"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Harga/hari</label>
                            <input type="number" name="harga_per_hari" id="harga_per_hari" value="<?= $mb['harga'] ?>" class="form-control picker" autocomplete="off" readonly>
                        </div>
                        <div class="form-group">
                            <label>Waktu Sewa (Hari)</label>
                            <input type="hidden" name="idmobil" value="<?= $mb['idmobil'] ?>">
                            <input type="number" name="waktu_sewa" id="waktu_sewa" class="form-control picker" onchange="hitung()" autocomplete="off" required>
                        
                        </div>
                        <div class="form-group">
                            <label>Nomor Rekening</label>
                            <input type="number" name="no_rekening" class="form-control picker" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-2">
                            <label>Bukti Transfer<br> Foto slip pembayaran yang ditransfer ke Rekening Mandiri ARTHAO, no rek: 1234567812<br> format file .jpg/.png</label>
                            <input type="file" name="bukti_transfer" id="bukti_transfer" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>total harga</label>
                            <input type="number" name="total_harga" id="total_harga" class="form-control picker" autocomplete="off" readonly>
                        </div>
                        <input type="hidden" name="status_sewa" id="status_sewa" value="0" class="form-control picker">

                        <button type="submit" class="btn btn-primary mt-3 float-right" onchange="hitung()" style="width:100%;">
                            Sewa</button>

                    </form>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
<script>
function hitung(){
    var harga_per_hari = document.getElementById('harga_per_hari').value;
    var waktu_sewa = document.getElementById('waktu_sewa').value;
    var total = harga_per_hari*waktu_sewa;
    document.getElementById('total_harga').value=total;
    console.log(total);

}
</script>
<?php require_once('../../_header.php') ?>

   <?php if (isset($_POST['tambah'])) : ?>
      <?php if (add_dc($_POST) > 0) : ?>
         <!-- Statement 1 -->
         <div class="alert">
            <div class="box">
            <img src="<?=url('_assets/img/berhasil.png')?>" height="68" alt="alert sukses">
               <p>Berhasil Di Tambahkan</p>
               <button onclick="window.location='http://localhost/rumah_laundry/paket/pkt_dc/pkt_dc.php'" class="btn-alert">Ok</button>
            </div>
         </div>
         
         <?php else : ?>
         <!-- Statement 2 -->
         <div class="alert">
            <div class="box">
            <img src="<?=url('_assets/img/gagal.png')?>" height="68" alt="alert gagal">
               <p>Gagal Di Tambahkan</p>
               <button onclick="window.location='http://localhost/rumah_laundry/paket/pkt_dc/pkt_dc.php'" class="btn-alert">Ok</button>
            </div>
         </div>
      <?php endif ?>      
   <?php endif ?>

   <div id="tambah_paket_dc" class="main-content">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Tambah Daftar Makanan</h2>	
                     </div>
                     <div class="card-col txt-right">
                        <a href="<?=url('paket/pkt_dc/pkt_dc.php')?>" class="btn-xs bg-primary">Kembali</a>
                     </div>
                  </div>

                  <div class="card-body">
                     <form action="" method="post" class="form-input">
                        <div class="form-grup">
                           <label for="nama">Nama Makanan</label>
                           <input type="text" name="nama_paket_dc" placeholder="Nama Makanan" autocomplete="off" id="nama" required>
                        </div>

                        <div class="form-grup">
                           <label for="wk">Jenis Makanan</label>
                           <input type="text" name="waktu_kerja_dc" placeholder="Jenis Makanan" autocomplete="off" id="wk" required>
                        </div>

                        <div class="form-grup">
                           <label for="berat">Berat</label>
                           <input type="text" name="kuantitas_dc" placeholder="Berat" autocomplete="off" id="berat" required>
                        </div>

                        <div class="form-grup">
                           <label for="tarif">Harga</label>
                           <input type="text" name="tarif_dc" placeholder="Harga" autocomplete="off" id="tarif" required>
                        </div>

                        <div class="form-grup ">
                           <button type="submit" class="mt-1" name="tambah">Tambah</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<?php require_once('../../_footer.php') ?>
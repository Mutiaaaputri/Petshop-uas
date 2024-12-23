<?php 
   require_once('../../_header.php');
   $id_ck = $_GET['id_ck'];
   $data_ck = query("SELECT * FROM tb_cuci_komplit WHERE id_ck = '$id_ck'")[0];
?>

   <?php if (isset($_POST['ubah'])) : ?>
      <?php if (edit_ck($_POST) > 0) : ?>
         <!-- Statement 1 -->
         <div class="alert">
				<div class="box">
               <img src="<?=url('_assets/img/berhasil.png')?>" height="68" alt="alert sukses">
					<p>Berhasil Di Ubah</p>
					<button onclick="window.location='http://localhost/rumah_laundry/paket/pkt_ck/pkt_ck.php'" class="btn-alert">Ok</button>
				</div>
         </div>
         
         <?php else : ?>
         <!-- Statement 2 -->
         <div class="alert">
            <div class="box">
               <img src="<?=url('_assets/img/gagal.png')?>" height="68" alt="alert gagal">
               <p>Gagal Di Ubah</p>
               <button onclick="window.location='http://localhost/rumah_laundry/paket/pkt_ck/pkt_ck.php'" class="btn-alert">Ok</button>
            </div>
         </div>
      <?php endif ?>      
   <?php endif ?>

   <div id="edit_ck" class="main-content">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Ubah Paket</h2>	
                     </div>
                     <div class="card-col txt-right">
                        <a href="<?=url('paket/pkt_ck/pkt_ck.php')?>" class="btn-xs bg-primary">Kembali</a>
                     </div>
                  </div>

                  <div class="card-body">
                     <form action="" method="post" class="form-input">
                     <input type="hidden" name="id_ck" value="<?=$data_ck['id_ck']?>">
                        <div class="form-grup">
                           <label for="nama">Nama Barang</label>
                           <input type="text" name="nama_paket_ck" placeholder="Nama Barang" value="<?=$data_ck['nama_paket_ck']?>" autocomplete="off" id="nama" required>
                        </div>

                        <div class="form-grup">
                           <label for="wk">Jenis Barang</label>
                           <input type="text" name="waktu_kerja_ck" placeholder="Jenis Barang" value="<?=$data_ck['waktu_kerja_ck']?>" autocomplete="off" id="wk" required>
                        </div>

                        <div class="form-grup">
                           <label for="berat">Satuan</label>
                           <input type="text" name="kuantitas_ck" placeholder="Satuan" value="<?=$data_ck['kuantitas_ck']?>" autocomplete="off" id="berat" required>
                        </div>

                        <div class="form-grup">
                           <label for="tarif">Tarif</label>
                           <input type="text" name="tarif_ck" placeholder="Harga" value="<?=$data_ck['tarif_ck']?>" autocomplete="off" id="tarif" required>
                        </div>

                        <div class="form-grup ">
                           <button type="submit" class="mt-1" name="ubah">Update</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
<?php require_once('../../_footer.php') ?>
<?php 
   require_once('../../_header.php'); 
   $id_dc = $_GET['id_dc'];
?>

<?php if (del_dc($id_dc) > 0) : ?>
   <div class="alert">
      <div class="box">
      <img src="<?=url('_assets/img/berhasil.png')?>" height="68" alt="alert sukses">
			<p>Berhasil Di Hapus</p>
			<button onclick="window.location='http://localhost/Petshop/paket/pkt_dc/pkt_dc.php'" class="btn-alert">Ok</button>
		</div>
   </div>
   <?php else : ?>
   <div class="alert">
      <div class="box">
      <img src="<?=url('_assets/img/gagal.png')?>" height="68" alt="alert gagal">
         <p>Gagal Di Hapus</p>
         <button onclick="window.location='http://localhost/Petshop/paket/pkt_dc/pkt_dc.php'" class="btn-alert">Ok</button>
      </div>
   </div>
<?php endif ?>
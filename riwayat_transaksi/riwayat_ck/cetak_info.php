<?php
   require_once('../../_functions.php');
   $id_ck = $_GET['id_ck'];
   $data = query("SELECT * FROM tb_riwayat_ck WHERE id_ck = '$id_ck'")[0];
   // var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Invoice <?= $data['or_number'];?></title>
   <link rel="shortcut icon" href="<?=url('_assets/img/Logo/png')?>" type="image/x-icon">
   <link rel="stylesheet" href="<?=url('_assets/css/invoice.css')?>">
</head>
<body>
      <div class="invoice">
         <div class="invoice-content">
            <div class="invoice-header">
               <div class="logo">
                  <img src="<?=url('_assets/img/Logo.png')?>" width="145" alt="Logo rumah laundry">
               </div>
               <div class="invoice-no_order">
                  <span>Invoice number : <?=$data['or_number']?></span>
               </div>
            </div>

            <h4 style="text-align: center; color:#4d4d4d;">Bukti Transaksi</h4>

            <div class="invoice-body">
               <table class="table-invoice">
                  <tr>
                     <th>Nama pelanggan</th>
                     <td><?=$data['pelanggan']?></td>
                  </tr>
                  <tr>
                     <th>Nomor telepon</th>
                     <td><?=$data['no_telp']?></td>
                  </tr>
                  <tr>
                     <th>Alamat</th>
                     <td><?=$data['alamat']?></td>
                  </tr>
               </table>

               <table class="table-invoice">
                  <tr>
                     <th>Tanggal order</th>
                     <td><?=$data['tgl_msk']?></td>
                  </tr>
               </table>

               <table class="tb_byr">
                  <tr>
                     <th class="tb_heading">Jenis <div class="card text-left">
                       <img class="card-img-top" src="holder.js/100px180/" alt="">
                       <div class="card-body">
                         <h4 class="card-title">Title</h4>
                         <p class="card-text">Body</p>
                       </div>
                     </div></th>
                     <th class="tb_heading">Satuan</th>
                     <th class="tb_heading">Harga</th>
                  </tr>
                  <tr>
                     <td><?=$data['j_paket']?></td>
                     <td><?=$data['berat'] . " "?></td>
                     <td><?="Rp. " . $data['h_perkilo'] . " x " . $data['berat']?></td>
                  </tr>
                  <tr>
                     <th colspan="2" class="ub">Total</th>
                     <td class="ub-col"><?="Rp. " . $data['total']?></td>
                  </tr>
                  <tr>
                     <th colspan="2" class="ub">Nominal Bayar</th>
                     <td class="ub-col"><?="Rp. " . $data['nominal_byr']?></td>
                  </tr>
                  <tr>
                     <th colspan="2" class="ub">Uang kembali</th>
                     <td class="ub-col"><?="Rp. " . $data['kembalian']?></td>
                  </tr>
               </table>

               <div class="ket">
                  <p><span>Keterangan : </span><?=$data['keterangan']?></p>
               </div>

               <div class="invoice-footer">
                  <h3 class="foot_logo"><span>Pussy</span> Petshop</h3>
                  <p>Terima kasih telah menggunakan jasa kami.</p>
               </div>

            </div>
         </div>

         <div class="printbtn" id="btnPrint">
            <img src="<?=url('_assets/img/printer.svg')?>" width="48" alt="print icon">
            <span>Cetak Invoice</span>
         </div>

         <a href="<?=url('riwayat_transaksi/riwayat.php')?>" class="btn-back">Kembali</a>
      </div>

      <script>
         let print = document.getElementById('btnPrint');
         print.addEventListener('click', function(){
            return window.print();
         });
      </script>
</body>
</html>
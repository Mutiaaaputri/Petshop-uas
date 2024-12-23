<?php 
	require_once('../../_header.php'); 
	$data_ck = query('SELECT * FROM tb_cuci_komplit');
?>
	<div id="pkt_ck" class="main-content">
		<div class="container">
			<div class="baris">
				<div class="selamat-datang">
					<div class="col-header">
						<h2 class="judul-md">Aksesoris</h2>
					</div>

					<div class="col-header txt-right">
						<a href="<?=url('paket/pkt_ck/tambah.php')?>" class="btn-lg bg-primary">+ Tambah Barang</a>
					</div>	
				</div>
			</div>

			<div class="baris">
				<div class="col">
					<div class="card">
						<div class="card-title card-flex">
							<div class="card-col">
								<h2>Daftar Barang </h2>	
							</div>

							<div class="card-col txt-right">
								<a href="<?=url('paket/paket.php')?>" class="btn-xs bg-primary">Kembali</a>
							</div>
						</div>

						<div class="card-body">
							<div class="tabel-kontainer">
								<table class="tabel-transaksi">
									<thead>
										<tr>
											<th class="sticky">No</th>
											<th class="sticky">Nama Barang</th>
											<th class="sticky">Jenis Barang</th>
											<th class="sticky">Satuan</th>
											<th class="sticky">Harga</th>
											<th class="sticky">Action</th>
										</tr>
									</thead>

									<tbody>

										<?php $no = 1; ?>
										<?php foreach($data_ck as $ck) : ?>
											<tr>
												<td><?= $no ?></td>
												<td><?= $ck['nama_paket_ck'] ?></td>
												<td><?= $ck['waktu_kerja_ck'] ?></td>
												<td><?= $ck['kuantitas_ck'] . ' pcs' ?></td>
												<td><?= $ck['tarif_ck'] ?></td>
												<td>
													<a href="<?=url('paket/pkt_ck/edit.php')?>?id_ck=<?=$ck['id_ck']?>" class="btn btn-edit">Edit</a>
													<a href="<?=url('paket/pkt_ck/hapus.php')?>?id_ck=<?=$ck['id_ck']?>" onclick="return confirm('Yakin akan menghapus?');"  class="btn btn-hapus">Hapus</a>
												</td>
											</tr>
											<?php $no++ ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require_once('../../_footer.php'); ?>
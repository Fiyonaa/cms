<div class="row">
	<div class="col-lg-12 mb-4 order-0">
		<div class="card">
			<div class="d-flex align-items-end row">
				<div class="col-sm-7">
					<div class="card-body">
						<h2 class="card-title text-primary"><b>Selamat Datang
								<?= $this->session->userdata('nama'); ?></b></h2>
					</div>
				</div>
			</div>
			<div class="d-flex align-items-end row">
				<div  class="col-sm-12">
					<div class="card-body">
						<div class="card-title text-primary">
							<p style="margin-top: 20px; font-weight: bold; font-size: 20px; color: #6c757d;">
								Apakah ada yang bisa kami bantu?
							</p>

							<!-- Tambahkan daftar tautan -->
							<!-- Daftar tautan dengan 3 kalimat per baris, latar belakang biru muda agak ke ungu muda, teks biru tua agak muda, ukuran teks diperbesar -->
							<p style="margin-top: 10px; font-size: 18px; color: #0056b3; line-height: 1.8;">
								<a href="<?= site_url('admin/caraousel') ?>"
									style="text-decoration: none; color: #1e3d8b; background-color: #b3c9f7; border-radius: 30px; padding: 12px 20px; display: inline-block; margin-bottom: 10px; width: 30%;">Ingin
									mengubah carousel untuk tampilan frontend?</a>
								<a href="<?= site_url('admin/kategori') ?>"
									style="text-decoration: none; color: #1e3d8b; background-color: #b3c9f7; border-radius: 30px; padding: 12px 20px; display: inline-block; margin-bottom: 10px; width: 30%;">Ingin
									mengubah kategori konten yang tersedia?</a>
								<a href="<?= site_url('admin/konten') ?>"
									style="text-decoration: none; color: #1e3d8b; background-color: #b3c9f7; border-radius: 30px; padding: 12px 20px; display: inline-block; margin-bottom: 10px; width: 30%;">Ingin
									memperbarui konten untuk yang terbaru?</a>
								<br>
								<?php if($this->session->userdata('level')=='admin') { ?>
								<a href="<?= site_url('admin/user') ?>"
									style="text-decoration: none; color: #1e3d8b; background-color: #b3c9f7; border-radius: 30px; padding: 12px 20px; display: inline-block; margin-bottom: 10px; width: 30%;">Ingin
									mengelola admin & kontributor?</a>
								<a href="<?= site_url('admin/konfigurasi') ?>"
									style="text-decoration: none; color: #1e3d8b; background-color: #b3c9f7; border-radius: 30px; padding: 12px 20px; display: inline-block; margin-bottom: 10px; width: 30%;">Ingin
									mengubah konfigurasi profile produk?</a>
								<a href="<?= site_url('admin/galeri') ?>"
									style="text-decoration: none; color: #1e3d8b; background-color: #b3c9f7; border-radius: 30px; padding: 12px 20px; display: inline-block; margin-bottom: 10px; width: 30%;">Ingin
									mengelola galeri dalam frontend?</a>
								<?php } ?>
							</p>
						</div>
					</div>
					
					<!-- Tambahkan jarak antara tulisan -->
				</div>
		</div>
		</div><br>
		
		<!-- <div>
			<script src="https://static.elfsight.com/platform/platform.js" async></script>
			<div class="elfsight-app-a4f98946-d1ae-491c-bda9-fa6516b2d67f" data-elfsight-app-lazy></div>
		</div> -->
	</div>
</div>

<?php if ($this->session->userdata['login']['role']=='user'):?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<img style="height: 65px;" src="<?= base_url('sb-admin') ?>/img/gt2.png">
				</div>
				<div class="sidebar-brand-text mx-3">INVENTORI BARANG (MANAJER)</div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">
		
			<div class="sidebar-heading">
				Laporan Barang
			</div>
			<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('Laporan_barang') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Laporan Stok Barang</span></a>

			<li class="nav-item <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('Laporan_penerimaan') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Laporan Barang Masuk</span></a>

		<li class="nav-item <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('Laporan_pengeluaran') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Laporan Barang Keluar</span></a>

			<hr class="sidebar-divider">
		
				<!-- Heading -->
				<div class="sidebar-heading">
					Pengaturan
				</div>

				<li class="nav-item <?= $aktif == 'perusahaan' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('perusahaan') ?>">
						<i class="fas fa-fw fa-building"></i>
						<span>Pofil Perusahaan</span></a>
				</li>
				<!-- Divider -->
		
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<?php elseif ($this->session->userdata['login']['role']=='admin'):?>
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<img style="height: 65px;" src="<?= base_url('sb-admin') ?>/img/gt2.png">
				</div>
				<div class="sidebar-brand-text mx-3">INVENTORI BARANG (ADMIN)</div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">

			<div class="sidebar-heading">
				DATA MASTER
			</div>
			
			<li class="nav-item <?= $aktif == 'user' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('user') ?>">
					<i class="fas fa-fw fa-users"></i>
					<span> Data User</span></a>
				</li>

			<li class="nav-item <?= $aktif == 'pegawai' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('pegawai') ?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Data Pegawai</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('barang') ?>">
					<i class="fas fa-fw fa-box"></i>
					<span>Master Data Barang</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'vendorr' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('vendorr') ?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Data Vendor Barang</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
	
			<div class="sidebar-heading">
				DATA TRANSAKSI
			</div>

			<li class="nav-item <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('penerimaan') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Transaksi Barang Masuk</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('pengeluaran') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Transaksi Barang Keluar</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider">
	
			<div class="sidebar-heading">
				Laporan Barang
			</div>
			<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('Laporan_barang') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Laporan Stok Barang</span></a>

			<li class="nav-item <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('Laporan_penerimaan') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Laporan Barang Masuk</span></a>

		<li class="nav-item <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('Laporan_pengeluaran') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Laporan Barang Keluar</span></a>

			<hr class="sidebar-divider">

			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<?php elseif ($this->session->userdata['login']['role']=='leader'):?>
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<img style="height: 65px;" src="<?= base_url('sb-admin') ?>/img/gt2.png">
				</div>
				<div class="sidebar-brand-text mx-3">INVENTORI BARANG (LEADER)</div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">
		
			<div class="sidebar-heading">
                    DATA TRANSAKSI
                </div>
    
                <li class="nav-item <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= base_url('penerimaan') ?>">
                        <i class="fas fa-fw fa-file-invoice"></i>
                        <span>Transaksi Barang Masuk</span></a>
                </li>
    
                <li class="nav-item <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= base_url('pengeluaran') ?>">
                        <i class="fas fa-fw fa-file-invoice"></i>
                        <span>Transaksi Barang Keluar</span></a>
                </li>
				<!-- Heading -->
				<div class="sidebar-heading">
					Pengaturan
				</div>

				<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('pengguna') ?>">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Manajemen Admin</span></a>
                    </li>

				
                    <li class="nav-item <?= $aktif == 'perusahaan' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('perusahaan') ?>">
                            <i class="fas fa-fw fa-building"></i>
                            <span>Pofil Perusahaan</span></a>
                    </li>
				<!-- Divider -->
		
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<?php endif;?>
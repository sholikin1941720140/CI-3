<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#1166d8;">
    <a href="<?= base_url('dashboard'); ?>" class="brand-link" style="border-color: white;">
    <img src="<?= base_url('assets/template/dist/img/avatar5.png'); ?>" alt="SIMAS Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Adi Surya Sempurna</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-color: white;">
            <div class="info d-flex flex-column" style="white-space: normal;">
                <a href="<?= base_url('dashboard'); ?>" class="d-block">
                    <b>User - Sholikin</b>
                </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url(); ?>" class="nav-link">
                        <i class="fas fa-home"></i>
                        <p> &nbsp; Stok</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pembelian'); ?>" class="nav-link">
                        <i class="fas fa-arrow-right"></i>
                        <p> &nbsp; Pembelian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('penjualan'); ?>" class="nav-link">
                        <i class="fas fa-arrow-left"></i>
                        <p> &nbsp; Penjualan</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

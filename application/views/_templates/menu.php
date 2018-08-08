<div class="container-fluid" style="padding-top: 30px;padding-bottom: 20px">
	<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?php if ($menus=='aritmatika'): ?>active<?php endif ?>" href="<?php echo site_url('aritmatika') ?>">Artimatika</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($menus=='peserta'): ?>active<?php endif ?>" href="<?php echo site_url('peserta') ?>">Data Peserta</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($menus=='laporan'): ?>active<?php endif ?>" href="<?php echo site_url('peserta/laporan') ?>">Laporan Jumlah Peserta</a>
  </li>
  
</ul>
</div>
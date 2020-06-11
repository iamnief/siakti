<?php
// Fungsi untuk membuat item menu di kiri
function sidebar_menu_item($title, $icon, $menuName, $menuActive, $page_name)
{
?>
    <li class="nav-item">
        <a href="<?php echo site_url($page_name); ?>" class="nav-link <?php if ($menuActive == $menuName) {
                                                                            echo "active";
                                                                        } ?>">
            <i class="<?php echo $icon ?>"></i>
            <p><?php echo $title ?></p>
        </a>
    </li>
<?php
}
?>

<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/dist/img/logopnj.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Sistem Informasi TIK</span>
</a>

<?php
$user = $this->session->get_userdata();
$id = 'empty';
$nama = 'noname';
if (isset($user['nim'])){
    $id = $user['nim'];
    $nama = $user['nama_mhs'];
}
else if (isset($user['nip'])){
    $id = $user['nip'];
    $nama = $user['nama'];
}
?>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php echo $nama?></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php
            if ($main['userType'] == 'mahasiswa') {
                sidebar_menu_item("Dashboard", "nav-icon fas fa-tachometer-alt", 'dashboard', $main['menuActive'], "absensi_mahasiswa/");
                sidebar_menu_item("Jadwal Perkuliahan", "nav-icon far fa-calendar-alt", 'jadwal', $main['menuActive'], "absensi_mahasiswa/jadwal");
                sidebar_menu_item("Absen", "nav-icon fas fa-edit", 'absen', $main['menuActive'], "absensi_mahasiswa/absen");
                sidebar_menu_item("Ketidakhadiran", "nav-icon fas fa-file", 'kompen', $main['menuActive'], "absensi_mahasiswa/kompen");
            } else if ($main['userType'] == 'dosen') {
                sidebar_menu_item("Dashboard", "nav-icon fas fa-tachometer-alt", 'dashboard', $main['menuActive'], "absensi_dosen/");
                sidebar_menu_item("Jadwal Perkuliahan", "nav-icon far fa-calendar-alt", 'jadwal', $main['menuActive'], "absensi_dosen/jadwal");
            } else if ($main['userType'] == 'kps') {
                sidebar_menu_item("Dashboard", "nav-icon fas fa-tachometer-alt", 'dashboard', $main['menuActive'], "absensi_kps/");
                sidebar_menu_item("Jadwal Perkuliahan", "nav-icon far fa-calendar-alt", 'jadwal', $main['menuActive'], "absensi_kps/jadwal");
                sidebar_menu_item("Absensi", "nav-icon fas fa-edit", 'absensi', $main['menuActive'], "absensi_kps/absensi");
                sidebar_menu_item("Permohonan Verifikasi", "nav-icon far fa-copy", 'permohonan', $main['menuActive'], "absensi_kps/verifikasi_perkuliahan");
            } else if ($main['userType'] == 'admin') {
                sidebar_menu_item("Dashboard", "fas fa-tachometer-alt", 'dashboard', $main['menuActive'], "absensi_admin/");
                sidebar_menu_item("Edit Dosen", "fas fa-edit", 'edit_dosen', $main['menuActive'], "absensi_admin/edit_dosen");
                sidebar_menu_item("Edit Mahasiswa", "fas fa-edit", 'edit_mahasiswa', $main['menuActive'], "absensi_admin/edit_mahasiswa");
            }
            ?>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
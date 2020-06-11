<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
</ul>

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

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user fa-fw"></i> <?php echo $nama. ' - ' . $id ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" style="left: inherit; right: 0px;">
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs"></i> Settings
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url().'login/signout' ?>">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>

    </li>
</ul>
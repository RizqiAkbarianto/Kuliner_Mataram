<?php 
// proteksi halaman admin dengan fungsi cek login yang ada pada simple login
$this->simple_login->cek_login();
// gabungkan semua baguan layout menjadi satu
require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');
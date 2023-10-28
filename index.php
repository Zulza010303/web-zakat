<?php
// mulai session
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

//cek status login
if(!isset($_SESSION['status'])){
    header("location:login.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Zakat</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/menu.css">
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
        <div id="wrapper" class="active">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand"><img class="img-thumbnail" src="assets/img/logo.png" alt="" style="width: 100px; height: 100px; margin-top:10px;border-radius: 20px 20px 20px 20px;"></li>
        </ul>
        <ul id="sidebar_menu" class="sidebar-nav" style="margin-top: 60px;">
            <li class="sidebar-brand"><a id="menu-toggle" href="index.php">Beranda<span id="main_icon"></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">     
            <li><a href="add_data.php">Tambah Data Zakat</a></li>
            <li><a href="list_data.php">Data Zakat</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
        </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
              <p class="well lead" style="margin-top: 10px;">Beranda</p>
            </div>
          </div>
        </div>

        <div class="page-content inset">
          <div class="jumbotron" style="margin: 20px 20px 20px 20px; padding: 20px 20px 20px 20px">
              <h2 class="text-center">
              "Menebar Kebaikan dengan Zakat: Mendukung Program Sosial untuk Kemajuan Bersama"
              </h2>
              <h3 class="text-center">
              WEBSITE BAZNAS KEC. KAWALU
              </h3>
              <br>
              <p>
                 <br>
                 <p>Website pengelolaan zakat memiliki berbagai fungsi, diantaranya:</p>
                  <ul>
                    <li>Mengumpulkan Zakat: Website pengelolaan zakat dapat digunakan untuk mengumpulkan zakat dari masyarakat. Masyarakat dapat berdonasi langsung melalui website dengan mudah dan aman.</li>
                    <li>Mengelola Dana Zakat: Website pengelolaan zakat dapat digunakan untuk mengelola dana zakat yang telah terkumpul. Dana zakat tersebut dapat digunakan untuk membantu masyarakat yang membutuhkan.</li>
                    <li>Mempromosikan Program Zakat: Website pengelolaan zakat dapat digunakan untuk mempromosikan program zakat yang telah dilakukan oleh lembaga pengelola zakat. Hal ini dapat meningkatkan kesadaran masyarakat untuk berzakat.</li>
                    <li>Menginformasikan Program Zakat: Website pengelolaan zakat dapat digunakan untuk menginformasikan program zakat yang telah dilakukan oleh lembaga pengelola zakat. Masyarakat dapat melihat secara jelas program zakat yang sedang dilakukan dan manfaat yang diberikan.</li>
                    <li>Membuat Laporan Zakat: Website pengelolaan zakat dapat digunakan untuk membuat laporan zakat secara transparan. Hal ini dapat meningkatkan kepercayaan masyarakat terhadap lembaga pengelola zakat.</li>
                    <li>Memudahkan Penerimaan Donasi Zakat: Website pengelolaan zakat dapat memudahkan penerimaan donasi zakat karena donor dapat melakukan donasi secara online dengan mudah dan cepat.</li>
                  </ul>
              </p>
          </div>
        </div>
        
      </div>
      
    </div>
</body>
</html>
<?php 
$id_user = $this->session->userdata('id_user');
$level = $this->session->userdata('level');
$info = $this->m_general->info($id_user);
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets')?>/css/style.css">

  <title>THE TRANS LUXRY HOTEL</title>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item">
          <a class="nav-link" href="<?=base_url('order/kamars')?>">Kamar</a>
      <li class="nav-item">
          <a class="nav-link" href="<?=base_url('order/kamars')?>">fasilitas</a>
      <?php 
      if($level==1){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('user')?>">Data User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('Kamar')?>">Data Kamar</a>
          <li class="nav-item">
          <a class="nav-link" href="<?=base_url('Kamar')?>">Data Fasilitas</a>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('Kamarr')?>">Data RESERVASI</a>
            <li class="nav-item">
          <a class="nav-link" href="<?=base_url('about_us')?>">TENTANG</a>
      <?php }elseif($level==2){
        ?>
        </li>

         <li class="nav-item">
           <li class="nav-item">
          <a class="nav-link" href="<?=base_url('order/my')?>">Pesanan Saya</a>
        </li>
          <a class="nav-link" href="<?=base_url('about_us')?>">TENTANG</a>
        <?php
      } ?>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="account nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if(isset($id_user)){ echo $info->nama; }else{ echo "AKUN"; } ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php if(isset($id_user)){
            ?>
          <a class="dropdown-item" href="<?=base_url('account/profile')?>">Profil</a>
          <a class="dropdown-item" href="<?=base_url('account/logout')?>">Keluar</a>
        <?php }else{
          ?>
          <a class="dropdown-item" href="<?=base_url('account/login')?>">Masuk</a>
          <a class="dropdown-item" href="<?=base_url('account/register')?>">Daftar</a>
          <?php
        }?>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div style="min-height: 520px">
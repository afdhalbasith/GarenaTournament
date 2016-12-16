<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>  

 <!DOCTYPE HTML>

<hmtl>
<head>
  <link rel="stylesheet" href="<?php base_url() ?>../assets/style.css">
</head>

<body>
<?php $this->session->set_userdata ( 'status', 1 ); 
$my_name = ucfirst($this->session->userdata('username')); ?>
<div class="container">


  <header class="mainHeader">
    <div class="outer">
      <div class="inner">
        <nav>
          <ul>
            <li><a href="#">facebook</a></li>
            <li class="nav-mid"><a href="#">portal</a></li>
            <li><a href="#">forum</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div class="logo">
    <!-- <img src=""> -->
  </div>

  <div class="mainContent">
    <div class="contain2">
      <header>
      <div class="kiri">&nbsp</div>
      <div class="tengah"><h2>registrasi berhasil</h2></div>
      <div class="kanan">Hi, <?php echo $my_name ?>! [ <a style="text-transform:none;text-decoration: underline;color: #d1d100;" href="<?=site_url('login/logout');?>">Keluar</a> ]</div>
      <div class="clear"></div>
      </header>

      <div class="selamat">
        <p>Terima Kasih telah mendaftar di Turnamen Garena 3 vs 3!</p>
        <p>Untuk info lebih lanjut kunjungi Forum Garena Indonesia <a href="#">di sini.</a></p>
        <p>Garena. Connecting World Gamers!</p>
      </div>
    </div>
  </div>

  <div class="button">
    <div id="getout"><a href="<?=site_url('login/logout');?>">keluar</a></div>
  </div>

  

</div>


  <footer class="foot">
    <div class="contai">
      <div class="garena"><img src="../assets/images/garena.png"></div>
      <div class="icon">
        <a href="#"><div class="fb"></div></a>
        <a class="pad" href="#"><div class="twitter"></div></a>
        <a href="#"><div class="utube"></div></a>
      </div>
    </div>
  </footer>

</body>

</hmtl>
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html> 
<hmtl>
<head>
  <link rel="stylesheet" href="<?php base_url();?>../assets/style.css">
</head>

<body>

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
    <div class="content">
      <header>
        <h2>login</h2>
      </header>

      <?php
        // Cetak jika ada notifikasi
        if($this->session->flashdata('sukses')) {
             echo '<span class="z"> <p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
        }
        ?>

      <div class="wrap">
        <div class="left">
         <form method="POST" action="<?php echo site_url("login")?>" onsubmit="return Validate()" name="lForm">
            <p>
              Username
              <span class="z">:  <input type="text" name="username" placeholder="Masukkan Username anda..." tabindex="1" value="<?php echo set_value('username'); ?>" autofocus /></span>
              <input type="submit" name="btnSubmit" value="Login" tabindex="3"/>
            </p>

            <p> <?php echo form_error('username'); ?> </p>
            <div id="username_error" style="color: #000;"></div>

            <p>
              Password:
              <span class="z">:  <input type="password" name="password" placeholder="Masukkan Password anda..." tabindex="2" value="<?php echo set_value('password'); ?>" /></span>
            </p>

            <p> <?php echo form_error('password'); ?> </p>
            <div id="pass_error" style="color: #000;"></div>

          </form>
          <p><ul><li>Anda tidak punya akun? Silakan daftar <a href="<?=site_url('register');?>">disini</a></li></ul></p>
        </div>
      </div>
    </div>
  </div>

  <div style="margin-top:340px;"></div>

  <div class="button">
    <!-- NO -->
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

 <script type="text/javascript">
      // GETTING ALL INPUT TEXT FIELDS
      var username = document.forms["lForm"]["username"];
      var password = document.forms["lForm"]["password"];

      // GETTING ALL ERROR OBJECTS
      var username_error = document.getElementById("username_error");
      var pass_error = document.getElementById("pass_error");

      // SETTING ALL EVENT LISTENERS
      username.addEventListener("blur", usernameVerify, true);
      password.addEventListener("blur", passwordVerify, true);

      function Validate(){                  // ONSUBMIT
         if(username.value == "" || !(username.value.match(/^[A-Za-z0-9]+$/)) || username.value.length < 6 || username.value.length > 15)
         {
            username_error.textContent = "The Username field must be alphabet or numberic only with length between 6 - 15 characters (from Js)";
            username.style.border = "2px solid red";
            username.focus();
            return false;
         }

         if(password.value == "" || !(password.value.match(/^[A-Za-z0-9]+$/)) || password.value.length < 6 || password.value.length > 15)
         {
            pass_error.textContent = "The Password field must be alphabet or numberic only with length between 6 - 15 characters (from Js)";
            password.style.border = "2px solid red";
            password.focus();
            return false;
         }
         return true;
      
      }
      
      function usernameVerify()                 // ONBLUR
      {
          if(!(username.value.match(/^[A-Za-z0-9]+$/)) || username.value.length < 6 || username.value.length > 15)
          {
              username_error.innerHTML = "The Username field must be alphabet or numberic only with length between 6 - 15 characters (from Js)";
              username.style.border = "2px solid red";
              username_error.style.color = "red";
              return false;
          }else{
              username_error.innerHTML = "";
              username.style.border = "2px solid green";
              return true;
          }
      }

      function passwordVerify()
      {
          if(!(password.value.match(/^[A-Za-z0-9]+$/)) || password.value.length < 8 || password.value.length > 16)
          {
              pass_error.innerHTML = "The Password field must be alphabet or numberic only with length between 6 - 15 characters (from Js)";
              password.style.border = "2px solid red";
              pass_error.style.color = "red";
              return false;
          }else{
              pass_error.innerHTML = "";
              password.style.border = "2px solid green";
              return true;
          }
      }


 </script>


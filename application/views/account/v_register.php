 <!DOCTYPE HTML>

<hmtl>
<head>
  <link rel="stylesheet" href="<?php base_url() ?>../assets/style.css">
  <style>
       .error{
          color:red;font-size: 13px;visibility: hidden;
       }
   </style>
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
        <h2>registrasi akun</h2>
      </header>

      <div class="wrap">
        <div class="left">
          <form method="POST" action="<?php echo site_url("register")?>" name="rForm" onsubmit="return validate();">
          <p>
            <label>Nama Lengkap</label>
            <div class="x">:  <input type="text" name="name" tabindex="1" value="<?php echo set_value('name'); ?>"/></div>
            <?php echo form_error('name'); ?> 
                <span id="name_error" class="error" >The Name field is not valid (from Js)</span>
          </p>
          

          <p>
            <label>Email</label>
            <div class="x">:  <input type="text" name="email" tabindex="2" value="<?php echo set_value('email'); ?>"/></div>
            <?php echo form_error('email'); ?> 
                <span id="email_error" class="error">The Email field is not valid (from Js)</span>
          </p>

          <p>
            <label>No. Telepon</label>
            <div class="x">:  <input type="text" name="phone" tabindex="3" value="<?php echo set_value('phone'); ?>"/></div>
            <?php echo form_error('phone'); ?> 
                  <span id="phone_error" class="error">The Phone field is not valid (from Js)</span>
          </p>

          <p>
            <label>Jenis Kelamin</label><div class="x">:
            <select name="gender" id="gender">
                  <option value="" >Jenis Kelamin</option>
                  <option value="Male" <?php echo set_select('gender','Male', ( !empty($data) && $data == "Male" ? TRUE : FALSE )); ?>>Male</option>
                  <option value="Female" <?php echo set_select('gender','Female', ( !empty($data) && $data == "Female" ? TRUE : FALSE )); ?>>Female</option>
               </select></div>
               <span id="gender_error" class="error">The Gender field is not valid (from Js)</span>
          </p>
          <p>
            <label for="alamat">Alamat</label>
            <div class="x"> : <textarea name="alamat" rows="3" cols="35" id="alamat" tabindex="4"><?php echo set_value('alamat'); ?></textarea></div>
            <p> <?php echo form_error('alamat'); ?> </p>
                  <span id="address_error" class="error">The Address field is not valid (from Js)</span>
          </p>

          <p>
            <label>Username</label>
            <div class="x">:  <input type="text" name="username" tabindex="5" value="<?php echo set_value('username'); ?>" /></div>
            <?php echo form_error('username'); ?> 
                <span id="username_error" class="error">The Username field is not valid (from Js)</span>
          </p>

          <p>
            <label>Password</label>
            <div class="x">:  <input type="password" name="password" tabindex="6" value="<?php echo set_value('password'); ?>"/></div>
            <input type="submit" name="btnSubmit" value="Daftar" style="font-size:16px;" tabindex="9" />
            <?php echo form_error('password'); ?> 
                  <span id="pass_error" class="error">The Password field is not valid (from Js)</span>
          </p>

          <p>
            <label>Password Confirm</label>
            <div class="x">:  <input type="password" name="password_conf" tabindex="7" value="<?php echo set_value('password_conf'); ?>" /></div>
            <?php echo form_error('password_conf'); ?>
                  <span id="pass_conf_error" class="error">Please enter the same password in both password field</span>
          </p>

          <p>
            <div class="xx"><input type="checkbox" name="check" tabindex="8" />Saya telah membaca dan menerima <a href="#">Syarat dan Peraturan </a>dari Garena</div>
            
          </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  

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
 <script type="text/javascript">
          var ERROR = 1;  
          var spans = document.getElementsByTagName("span");
          var namez = document.rForm.name;             var phonez = document.rForm.phone;                 var alamatz = document.rForm.alamat;
          var usernamez = document.rForm.username;     var password = document.rForm.password;            var genderz = document.rForm.gender;
          var emailz = document.rForm.email;           var password_conf = document.rForm.password_conf;

     function validate()
     {    
          if(namez.value === "")             {spans[0].setAttribute("style","visibility:visible"); ERROR = 0; } else {spans[0].style.visibility = "hidden"; ERROR = 1;}
          if(usernamez.value === "" || usernamez.value.length < 6 || usernamez.value.length > 15 || !(usernamez.value.match(/^[A-Za-z0-9]+$/)))         
            {spans[5].style.visibility = "visible"; ERROR = 0;} else {spans[5].style.visibility = "hidden"; ERROR = 1;}

          if(emailz.value === "" ||  !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(rForm.email.value)) )
             {spans[1].setAttribute("style","visibility:visible");  ERROR = 0;} else {spans[1].style.visibility = "hidden"; ERROR = 1;}

          if(phonez.value === "" || !(phonez.value.match(/^[0-9]+$/)) )           
             {spans[2].style.visibility = "visible"; ERROR = 0;}                else {spans[2].style.visibility = "hidden"; ERROR = 1;}

          if(alamatz.value === "")            {spans[4].style.visibility = "visible"; ERROR = 0;}                else {spans[4].style.visibility = "hidden"; ERROR = 1;}
          if(genderz.value === "")            {spans[3].style.visibility = "visible"; ERROR = 0;}                else {spans[3].style.visibility = "hidden"; ERROR = 1;}
          if(password.value === "" || password.value.length < 8 || password.value.length > 16 || !(password.value.match(/^[A-Za-z0-9]+$/)))          
            {spans[6].setAttribute("style","visibility:visible");  ERROR = 0;} else {spans[6].style.visibility = "hidden"; ERROR = 1;}

          if(password_conf.value === "" || password_conf.value != password.value)     
            {spans[7].style.visibility = "visible"; ERROR = 0;}                else {spans[7].style.visibility = "hidden"; ERROR = 1;}

          if(ERROR == 0){return false;} else {return true;}

     }
 </script>
</hmtl>
 <!-- /*
 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>
 <html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Pendaftaran Akun | Tutorial Simple Login Register CodeIgniter @ http://recodeku.blogspot.com
   </title>
   <style>
       .error{
          color:red;font-size: 13px;visibility: hidden;
       }
   </style>
 </head>
 <body>
     <h2>Account Registration</h2>
 
     <form method="POST" action="<?php echo site_url("register")?>" name="rForm" onsubmit="return validate();">

     <p>Name:</p>
     
     <input type="text" name="name" value="<?php echo set_value('name'); ?>" autofocus/>
          <?php echo form_error('name'); ?> 
          <span id="name_error" class="error" >The Name field is not valid (from Js)</span>
 
     <p>Username:</p>
     
     <input type="text" name="username" value="<?php echo set_value('username'); ?>"/> 
          <?php echo form_error('username'); ?> 
          <span id="username_error" class="error">The Username field is not valid (from Js)</span>
      
     <p>Email:</p>
     
     <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
          <?php echo form_error('email'); ?> 
          <span id="email_error" class="error">The Email field is not valid (from Js)</span>

     <p>Phone:</p>
     
     <input type="text" name="phone" value="<?php echo set_value('phone'); ?>"/>
          <?php echo form_error('phone'); ?> 
          <span id="phone_error" class="error">The Phone field is not valid (from Js)</span>
 

     <p>Address:</p>
     
     <textarea name="alamat" rows="4" cols="50" ><?php echo set_value('alamat'); ?></textarea>
          <p> <?php echo form_error('alamat'); ?> </p>
          <span id="address_error" class="error">The Address field is not valid (from Js)</span>
     
     <p>Gender:</p>
     <p>
     <select name="gender" id="gender">
        <option value="" >Jenis Kelamin</option>
        <option value="Male" <?php echo set_select('gender','Male', ( !empty($data) && $data == "Male" ? TRUE : FALSE )); ?>>Male</option>
        <option value="Female" <?php echo set_select('gender','Female', ( !empty($data) && $data == "Female" ? TRUE : FALSE )); ?>>Female</option>
     </select>
     </p>
     <span id="gender_error" class="error">The Gender field is not valid (from Js)</span>

     <p>Password:</p>
     
     <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
          <?php echo form_error('password'); ?> 
          <span id="pass_error" class="error">The Password field is not valid (from Js)</span>
      
     <p>Password Confirm:</p>
     
     <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
          <?php echo form_error('password_conf'); ?>
          <span id="pass_conf_error" class="error">Please enter the same password in both password field</span>
 
     <p>
     <input type="submit" name="btnSubmit" value="Daftar"  />
     </p>
 
     <?php //echo form_close();?>
     </form>
 
     <p>
     Kembali ke login, Silakan klik <?php echo anchor(site_url().'/login','Login'); ?>
     </p>

 <script type="text/javascript">
          var ERROR = 1;  
          var spans = document.getElementsByTagName("span");
          var namez = document.rForm.name;             var phonez = document.rForm.phone;                 var alamatz = document.rForm.alamat;
          var usernamez = document.rForm.username;     var password = document.rForm.password;            var genderz = document.rForm.gender;
          var emailz = document.rForm.email;           var password_conf = document.rForm.password_conf;

     function validate()
     {    
          if(namez.value === "")             {spans[0].setAttribute("style","visibility:visible"); ERROR = 0; } else {spans[0].style.visibility = "hidden"; ERROR = 1;}
          if(usernamez.value === "" || usernamez.value.length < 6 || usernamez.value.length > 15 || !(usernamez.value.match(/^[A-Za-z0-9]+$/)))         
            {spans[1].style.visibility = "visible"; ERROR = 0;} else {spans[2].style.visibility = "hidden"; ERROR = 1;}

          if(emailz.value === "" ||  !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(rForm.email.value)) )
             {spans[2].setAttribute("style","visibility:visible");  ERROR = 0;} else {spans[2].style.visibility = "hidden"; ERROR = 1;}

          if(phonez.value === "" || !(phonez.value.match(/^[0-9]+$/)) )           
             {spans[3].style.visibility = "visible"; ERROR = 0;}                else {spans[3].style.visibility = "hidden"; ERROR = 1;}

          if(alamatz.value === "")            {spans[4].style.visibility = "visible"; ERROR = 0;}                else {spans[4].style.visibility = "hidden"; ERROR = 1;}
          if(genderz.value === "")            {spans[5].style.visibility = "visible"; ERROR = 0;}                else {spans[5].style.visibility = "hidden"; ERROR = 1;}
          if(password.value === "" || password.value.length < 8 || password.value.length > 16 || !(password.value.match(/^[A-Za-z0-9]+$/)))          
            {spans[6].setAttribute("style","visibility:visible");  ERROR = 0;} else {spans[6].style.visibility = "hidden"; ERROR = 1;}

          if(password_conf.value === "" || password_conf.value != password.value)     
            {spans[7].style.visibility = "visible"; ERROR = 0;}                else {spans[7].style.visibility = "hidden"; ERROR = 1;}

          if(ERROR == 0){return false;} else {return true;}

     }
 </script>

 </body>
 </html>


*/
-->

















































 <!--
 <script type="text/javascript">
      // GETTING ALL INPUT TEXT FIELDS
      var name = document.forms["rForm"]["name"];
      var username = document.forms["rForm"]["username"];
      var email = document.forms["rForm"]["email"];
      var phone = document.forms["rForm"]["phone"];
      var pass = document.forms["rForm"]["password"];
      var pass_conf = document.forms["rForm"]["password_conf"];

      // GETTING ALL ERROR OBJECTS
      var name_error = document.getElementById("name_error");
      var username_error = document.getElementById("username_error");
      var email_error = document.getElementById("email_error");
      var phone_error = document.getElementById("phone_error");
      var pass_error = document.getElementById("pass_error");
      var pass_conf = document.getElementById("pass_conf_error");

      // SETTING ALL EVENT LISTENERS
      name.addEventListener("blur", nameVerify, true);
      username.addEventListener("blur", usernameVerify, true);
      email.addEventListener("blur", emailVerify, true);
      phone.addEventListener("blur", phoneVerify, true);
      pass.addEventListener("blur", passwordVerify, true);
      pass_conf.addEventListener("blur", passConfVerify, true);

      function usernameVerify()
      {
          if(username.value == "")
         {
            username_error.textContent = "The Username field is required (from Js)";
            username.style.border = "2px solid red";
            username.focus();
            return false;
         }
         else if(!username.value.match(/^[A-Za-z0-9]+$/))
         {
            username_error.textContent = "The Username field must be alphabet or numberic only";
            username.style.border = "2px solid red";
            username.focus();
            return false;
         }
         else if(username.value.length < 6 || username.value.length > 15)
         {
            username_error.textContent = "The Username field must between 6 - 15 characters";
            username.style.border = "2px solid red";
            username.focus();
            return false;
         }else{username_error.innerHTML = "";username.style.border = "2px solid green";return true;}
      }

      function passwordVerify()
      {
          if(password.value == "")
         {
            pass_error.textContent = "The Password field is required (from Js)";
            password.style.border = "2px solid red";
            password.focus();
            return false;
         }else if(!password.value.match(/^[A-Za-z0-9]+$/))
         {
            pass_error.textContent = "The Password field must be alphabet or numberic only";
            password.style.border = "2px solid red";
            password.focus();
            return false;
         }
         else if(password.value.length < 8 || password.value.length > 16)
         {
            pass_error.textContent = "The Password field must between 8 - 16 characters";
            password.style.border = "2px solid red";
            password.focus();
            return false;
         }else{pass_error.innerHTML = "";password.style.border = "2px solid green";return true;}
      }

      function passConfVerify()
      {
          if(password.value == "")
         {
            pass_error.textContent = "The Password field is required (from Js)";
            password.style.border = "2px solid red";
            password.focus();
            return false;
         }else if(!password.value.match(/^[A-Za-z0-9]+$/))
         {
            pass_error.textContent = "The Password field must be alphabet or numberic only";
            password.style.border = "2px solid red";
            password.focus();
            return false;
         }
         else if(password.value.length < 8 || password.value.length > 16)
         {
            pass_error.textContent = "The Password field must between 8 - 16 characters";
            password.style.border = "2px solid red";
            password.focus();
            return false;
         }else{pass_error.innerHTML = "";password.style.border = "2px solid green";return true;}
      }


 </script>
 -->
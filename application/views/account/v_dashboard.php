 <!DOCTYPE HTML>

<hmtl>
<head>
  <link rel="stylesheet" href="<?php base_url() ?>../assets/style.css">
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
      <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
          rel="stylesheet" type="text/css" />
      <script type="text/javascript">
          $(function () {
              $("#dialog").dialog({
                  modal: true,
                  autoOpen: false,
                  title: "Tournament Rules",
                  width: 500,
                  height: 350
              });
              $("#btnShow").click(function () {
                  $('#dialog').dialog('open');
              });
          });
      </script> 
</head>

<body>

<div class="container">
<?php
        $name = ucfirst($this->session->userdata('nama'));
        $phone = ucfirst($this->session->userdata('phone'));
        $username = $this->session->userdata('username');
        $gender = $this->session->userdata('gender');
?>

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
    <div class="contain2" style="background-image:none;" >
      <header>
      <div class="kiri">&nbsp</div>
      <div class="tengah"><h2>form registrasi</h2></div>
      <div class="kanan">Hi, <?php echo ucfirst($this->session->userdata('username')); ?>! [ <a style="text-transform:none;text-decoration: underline;color: #d1d100;" href="<?=site_url('login/logout');?>">Keluar</a> ]</div>
      <div class="clear"></div>
      </header>

       <form method="POST" action="<?php echo site_url("dashboard")?>" onsubmit="return Validate()" name="dForm">
        <div class="kiri" style="width:98.5%;">
          <p>
            <label>Nama Tim</label>
            <span class="x">:  <input type="text" name="teamname" tabindex="1" value="<?php echo set_value('teamname'); ?>"/></span>
            <?php echo "<br>" ?><?php form_error('teamname'); ?>
               <span id="teamname_error" style="color: red;"></span>
          </p>

          <p>
            <label>Nama Lengkap</label>
            <span class="x">:  <input type="text" name="name1" tabindex="2" value="<?php echo ($name); ?>" /></span>
              <?php echo "<br>" ?><?php form_error('name1'); ?> 
               <span id="name1_error" style="color:red;"></span>
          </p>
          
          <p>
            <label>No. Telepon</label>
            <span class="x">:  <input type="text" name="phone1" tabindex="3" value="<?php echo ($phone); ?>" /></span>
              <?php echo "<br>" ?><?php form_error('phone1'); ?>
               <span id="phone1_error" style="color:red;"></span>
          </p>
          
          <p>
            <label>Jenis Kelamin</label>
            <span class="x">:    
              <select style="border-radius:5px;" name="gender1" id="gender1">
              <option value="<?php echo $gender ?>"><?php echo ($gender); ?></option>
                  <?php if($gender == "Male") {echo "<option value="?>Female<?php echo ">Female</option>";} 
                   else if($gender == "Female") {echo "<option value="?>Male<?php echo ">Male</option>";} else {echo "<option>None</option>";}?>
            </select></span> <span class="role"><q>C</q>aptain</span>
              <?php echo "<br>" ?><?php form_error('gender1'); ?>
               <span id="gender1_error" style="color:red;"></span>
          </p>
      <hr>
          <p>
            <label>Nama Lengkap</label>
            <span class="x">:  <input type="text" name="name2" tabindex="4" value="<?php echo set_value('name2'); ?>"/></span>
             <?php echo "<br>" ?><?php form_error('name2'); ?> 
               <span id="name2_error" style="color:red;"></span>
          </p>

          <p>
            <label>No. Telepon</label>
            <span class="x">:  <input type="text" name="phone2" tabindex="5" value="<?php echo set_value('phone2'); ?>" /></span>
            <?php echo "<br>" ?><?php form_error('phone2'); ?>  
               <span id="phone2_error" style="color:red;"></span>
          </p>

          <p>
            <label>Jenis Kelamin</label>
            <span class="x">:   
            <select style="border-radius:5px;" name="gender2" id="gender2">
              <option value="" >Jenis Kelamin</option>
                  <option value="Male" <?php echo set_select('gender2','Male', ( !empty($data) && $data == "Male" ? TRUE : FALSE )); ?>>Male</option>
                  <option value="Female" <?php echo set_select('gender2','Female', ( !empty($data) && $data == "Female" ? TRUE : FALSE )); ?>>Female</option>
            </select></span> <span class="role">anggota<q>1</q></span>
            <?php echo "<br>" ?><?php form_error('gender2'); ?>  
               <span id="gender2_error" style="color:red;"></span>
          </p>
      <hr>

        <input type="hidden" name="username" value="<?php echo $username; ?>">
        </div>
    </div>

  </div>

  <div class="button">
    <div id="syarat">
      <input type="checkbox" id="box2" /> 
      <label >Saya telah membaca dan menerima</label>
      <label class="cbox2"><a href="#">Syarat dan Peraturan</a> dari turnamen ini.</label>
    </div>
    <div id="regis"><input type="submit" name="btnSubmit" value="Register" /></div>
  </div>

 </form>

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
      var teamname = document.forms["dForm"]["teamname"];
      var name1 = document.forms["dForm"]["name1"];         var name2 = document.forms["dForm"]["name2"];  
      var phone1 = document.forms["dForm"]["phone1"];       var phone2 = document.forms["dForm"]["phone2"];
      var gender1 = document.forms["dForm"]["gender1"];     var gender2 = document.forms["dForm"]["gender2"];

      // GETTING ALL ERROR OBJECTS
      var teamname_error = document.getElementById("teamname_error");
      var name1_error = document.getElementById("name1_error");      var name2_error = document.getElementById("name2_error");  
      var phone1_error = document.getElementById("phone1_error");    var phone2_error = document.getElementById("phone2_error");  
      var gender1_error = document.getElementById("gender1_error");  var gender2_error = document.getElementById("gender2_error");     

      name1.style.border = "2px solid green";phone1.style.border = "2px solid green";gender1.style.border = "2px solid green";

      function Validate(){                  // ONSUBMIT
      var err= 1
         if(teamname.value === "" || !(teamname.value.match(/^[A-Za-z0-9_]+$/)) || teamname.value.length < 4 || teamname.value.length > 15)
         {
            teamname_error.textContent = "The Team Name field must be alphabet or numberic only with length between 4 - 15 characters (from Js)";
            teamname.style.border = "2px solid red";
            teamname.focus();
            err = 0;//return false;
         }else{teamname_error.textContent =""; teamname.style.border = "2px solid green"; err = 1;}

         if(name2.value === "" || !(name2.value.match(/^[A-Za-z ]+$/)) )
         {
            name2_error.textContent = "The Name field must be alphabet (from Js)";
            name2.style.border = "2px solid red";
            name2.focus();
            err = 0;//return false;
         }else{name2_error.textContent =""; name2.style.border = "2px solid green"; err = 1;}

         if(phone2.value === "" || !(phone2.value.match(/^[0-9]+$/)) )
         {
            phone2_error.textContent = "The Phone field must be numeric (from Js)";
            phone2.style.border = "2px solid red";
            phone2.focus();
            err = 0;//return false;
         }else{phone2_error.textContent =""; phone2.style.border = "2px solid green"; err = 1;}

         if(gender2.value == "" )
         {  
            gender2_error.textContent = "Please choose the Gender field (from Js)";
            gender2.style.border = "2px solid red";
            gender2.focus();
            err = 0;//return false;
         }else {gender2_error.textContent ="";gender2.style.border = "2px solid green"; err = 1;}

         //return true;
         if(err ==0){return false;} else{return true;}
      
      }

</script>







 <!--
 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
      <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
          rel="stylesheet" type="text/css" />
      <script type="text/javascript">
          $(function () {
              $("#dialog").dialog({
                  modal: true,
                  autoOpen: false,
                  title: "Tournament Rules",
                  width: 500,
                  height: 350
              });
              $("#btnShow").click(function () {
                  $('#dialog').dialog('open');
              });
          });
      </script>
   <meta charset="UTF-8">
   <title>
     Dashboard | Tutorial Simple Login Register CodeIgniter @ http://recodeku.blogspot.com
   </title>
 </head>
 <body>
      <h3>Competition Registration</h3>
      <p>
           Selamat datang di halaman Registrasi Lomba, <?php echo ucfirst($this->session->userdata('username')); ?>!
           Untuk logout dari sistem, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
      </p>
      
      <p>
          My valid = <?php echo ucfirst($this->session->userdata('valid_login')); ?>
      </p>
      <p>
          My status = <?php echo ucfirst($this->session->userdata('status')); ?>
      </p>
      <?php
        $name = ucfirst($this->session->userdata('nama'));
        $phone = ucfirst($this->session->userdata('phone'));
        $username = $this->session->userdata('username');
        $gender = $this->session->userdata('gender');
      ?>

     <form method="POST" action="<?php echo site_url("dashboard")?>" onsubmit="return Validate()" name="dForm">
     <p>Team Name:</p>
     <p>
     <input type="text" name="teamname" value="<?php echo set_value('teamname'); ?>"/>
     </p>
     <p> <?php echo form_error('teamname'); ?> </p>
     <span id="teamname_error" style="color:red;"></span>
      
      <hr>

     <p>Capt. Name:</p>
     <p>
     <input type="text" name="name1" value="<?php echo ($name); ?>"/> 
     </p>
     <p> <?php echo form_error('name1'); ?> </p>
     <span id="name1_error" style="color:red;"></span>
 
     <p>Phone:</p>
     <p>
     <input type="text" name="phone1" value="<?php echo ($phone); ?>"/>
     </p>
     <p> <?php echo form_error('phone1'); ?> </p>
     <span id="phone1_error" style="color:red;"></span>

     <p>Gender:</p>
     <p>
     <select name="gender1" id="gender1"  />
        <option value="<?php echo $gender ?>"><?php echo ($gender); ?></option>
        <?php if($gender == "Male") {echo "<option value="?>Female<?php echo ">Female</option>";} 
         else if($gender == "Female") {echo "<option value="?>Male<?php echo ">Male</option>";} else {echo "<option>None</option>";}?>
        </select>
     </p>
     <p> <?php echo form_error('gender1'); ?> </p>
     <span id="gender1_error" style="color:red;"></span>

        <hr>

     <p>Member Name:</p>
     <p>
     <input type="text" name="name2" value="<?php echo set_value('name2'); ?>"/> 
     </p>
     <p> <?php echo form_error('name2'); ?> </p>
     <span id="name2_error" style="color:red;"></span>
 
     <p>Phone:</p>
     <p>
     <input type="text" name="phone2" value="<?php echo set_value('phone2'); ?>"/>
     </p>
     <p> <?php echo form_error('phone2'); ?> </p>
     <span id="phone2_error" style="color:red;"></span>

     <p>Gender:</p>
     <p>
     <select name="gender2" id="gender2">
        <option value="" >Jenis Kelamin</option>
        <option value="Male" <?php echo set_select('gender2','Male', ( !empty($data) && $data == "Male" ? TRUE : FALSE )); ?>>Male</option>
        <option value="Female" <?php echo set_select('gender2','Female', ( !empty($data) && $data == "Female" ? TRUE : FALSE )); ?>>Female</option>
     </select>
     </p>
     <p> <?php echo form_error('gender2'); ?> </p>
     <span id="gender2_error" style="color:red;"></span>
 
     <p>
     <input type="submit" name="btnSubmit" value="Register" />
      <input type="button" id="btnShow" value="Show Rules" />
     </p>
      
      <input type="hidden" name="username" value="<?php echo $username; ?>">

     </form>
      
    <div id="dialog" style="display: none" align = "left">
        <ul>
        <li>Saya MAho</li>
        <li>Saya Ganteng</li>
        </ul>
    </div>
   
 </body>

<script type="text/javascript">
    // GETTING ALL INPUT TEXT FIELDS
      var teamname = document.forms["dForm"]["teamname"];
      var name1 = document.forms["dForm"]["name1"];         var name2 = document.forms["dForm"]["name2"];  
      var phone1 = document.forms["dForm"]["phone1"];       var phone2 = document.forms["dForm"]["phone2"];
      var gender1 = document.forms["dForm"]["gender1"];     var gender2 = document.forms["dForm"]["gender2"];

      // GETTING ALL ERROR OBJECTS
      var teamname_error = document.getElementById("teamname_error");
      var name1_error = document.getElementById("name1_error");      var name2_error = document.getElementById("name2_error");  
      var phone1_error = document.getElementById("phone1_error");    var phone2_error = document.getElementById("phone2_error");  
      var gender1_error = document.getElementById("gender1_error");  var gender2_error = document.getElementById("gender2_error");     

      name1.style.border = "2px solid green";phone1.style.border = "2px solid green";gender1.style.border = "2px solid green";

      function Validate(){                  // ONSUBMIT
      var err= 1
         if(teamname.value === "" || !(teamname.value.match(/^[A-Za-z0-9_]+$/)) || teamname.value.length < 4 || teamname.value.length > 15)
         {
            teamname_error.textContent = "The Team Name field must be alphabet or numberic only with length between 4 - 15 characters (from Js)";
            teamname.style.border = "2px solid red";
            teamname.focus();
            err = 0;//return false;
         }else{teamname_error.textContent =""; teamname.style.border = "2px solid green"; err = 1;}

         if(name2.value === "" || !(name2.value.match(/^[A-Za-z ]+$/)) )
         {
            name2_error.textContent = "The Name field must be alphabet (from Js)";
            name2.style.border = "2px solid red";
            name2.focus();
            err = 0;//return false;
         }else{name2_error.textContent =""; name2.style.border = "2px solid green"; err = 1;}

         if(phone2.value === "" || !(phone2.value.match(/^[0-9]+$/)) )
         {
            phone2_error.textContent = "The Phone field must be numeric (from Js)";
            phone2.style.border = "2px solid red";
            phone2.focus();
            err = 0;//return false;
         }else{phone2_error.textContent =""; phone2.style.border = "2px solid green"; err = 1;}

         if(gender2.value == "" )
         {  
            gender2_error.textContent = "Please choose the Gender field (from Js)";
            gender2.style.border = "2px solid red";
            gender2.focus();
            err = 0;//return false;
         }else {gender2_error.textContent ="";gender2.style.border = "2px solid green"; err = 1;}

         //return true;
         if(err ==0){return false;} else{return true;}
      
      }

</script>




 </html>


-->
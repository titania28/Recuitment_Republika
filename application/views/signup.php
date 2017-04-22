<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Recuitment Republika</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url();?>source/login/css/style.css">

  
</head>

<body>
  <div class="form">
        <div id="login">   
          <h1>Register</h1>
      <h1 style="color : white">
        <?php 
        if(isset($err)){
        if($err == 2){
           echo " Isi Data Dengan Benar<br>";
           echo "Gunakan email perusahaan";
      }
        }
       ?>
      <br>
    </h1>
          <form action="<?php echo base_url('login/addreg/');?>" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Nama <span class="req">*</span>
            </label>
            <input type="nama" name="nama" required autocomplete="off"/>
          </div>
          <p class="forgot"><a href="#">Gunakan Email Perusahaan (@rol..)</a></p>
          <button class="button button-block"/>Sign up</button>
          
          </form><!-- tab-content -->
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>source/login/js/index.js"></script>


</body>
</html>

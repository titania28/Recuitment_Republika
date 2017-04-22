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
          <h1>Welcome Back!</h1>
          <?php
          if($this->input->get('err') == 1){
          ?>
              <h1 style="color:white;">
               Maaf, email atau password Anda tidak sama / salah
               <h3 style="color:red;" align="center">Gunakan email perusahaan</h3>
              </h1>
          <?php } elseif($this->input->get('err') == 2){ ?>
            <h1 style="color:white;">
          Maaf, Anda harus login terlebih dahulu. 
              </h1>
          <?php } ?>
          <form action="<?php echo base_url('login/check_login/');?>" method="post">
          
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
          
          <p class="forgot"><a href="<?php echo base_url();?>login/addreg">Sign Up</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>source/login/js/index.js"></script>


</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AIT ADMISSION PROCESSING SYSTEM </title>
    <meta name="description" content="AIT- Admission processing system">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/assets/css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/assets/fontawesome-free-6.5.1-web/css/all.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/assets/css/style.sea.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/assets/css/custom.css">
    
    <!-- Favicon-->
    <link href="/assets/img/favicon_io/favicon-32x32.png" type="image/x-icon" rel="icon">
    <link href="/assets/img/favicon_io/favicon-16x16.png" type="image/x-icon" rel="icon">
  </head>
  <body>
      
      
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center" style="background-color:#135478">
                <div class="content">
                  <div class="logo align-items-center ">
                      <img src="/assets/img/aitlog.png" height="200" width="200" style="margin-left:180px;">
                  </div>
                   <h1>AIT ADMISSION PROCESSING SYSTEM</h1>
                  <p>This is where you want to go to University....</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <div class="alert alert-danger text-center" id="error_guys" style="display: none;"></div>
                <form id="loginForm" action="/index.php/login" method="POST">
                    <div class="form-group">
                      <label for="login-username" class="label-material">Email Address</label>
                      <input type="email" class="form-control"  name="email" autocomplete="email" required  value="<?= old('email', '')?>">
                    </div>
                    <div class="form-group">
                      
                      <label for="password" class="label-material">Password</label>
                      <input class="form-control" name="password" type="password" autocomplete="current-password" required>
                      <?php if(isset($errors['password'])):?>
                <p class= "text-red-500 text-xs mt-2"><?=$errors['password'] ?></p>
                <?php endif; ?>
                    </div>

                       <div class="form-group">
                        <div class="text-center form-group" id="ait_loader_yes" style="display: none;">
                        <img src="/assets/img/page-loader.gif" style="max-height: 50%; max-width: 50%;">
                      </div>
                      </div><button type="submit"  class="btn btn-primary">Login</button>
              
                     
                  </form><small>Do not have an account? </small><a href="/index.php/Instant-Online-Reg.php" class="signup">Register now</a>
                  <br>
                  <small style="color: red" class="text-center"> (Please use exactly the email address you indicated in your original online application on this platform) </small>
                </div>
                <?php if(isset($errors['email'])):?>
                <p class= "text-red-500 text-xs mt-2"><?=$errors['email'] ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p><a href="#" style="color:#fff;" class="external">&copy; AIT | All right Reserved &reg; Accra Institute Of Technology</a></p>
        
      </div>
    </div>
    <script src="/assets/jquery/jquery-3.6.0.min.js"></script>
  </body>
</html>

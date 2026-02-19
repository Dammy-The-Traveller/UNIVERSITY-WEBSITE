<?php include __DIR__ . '/../partials/head.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>
  


	<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Abel&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Abel&amp;family=Rajdhani:wght@300&amp;display=swap" rel="stylesheet"> 
	<title>AIT ONLINE APPLICATION</title>

<style>
div.card {
  width: 450px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  float: left;
  margin-right: 20px;
}

div.card2 {
  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  margin-right: 20px;
  display: block;
}

div.header {
  /*background-color: #02418c;*/
  color: white;
  /*padding: 10px;*/
  font-size: 40px;
}

.icon_styling {
    width: 100%;
    height: 18vw;
    object-fit: cover;
}

div.container {
  padding: 10px;
}

/*.grad {
  background-image: linear-gradient(to bottom right,   #02418c  ,  #1f63b4 );
}*/
.newgrad {
  background-image: linear-gradient(to bottom right,  #fff ,   #1f63b4  );
}
.center-screen {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;
}
a{text-decoration: none;}
.ms{
	font-family: 'Abel', sans-serif;
	font-size: 30px;
	color: #02418c;
	font-weight: bold;
}
.smalltalk {
	font-family: 'Rajdhani', sans-serif;color:#0e0757;
	font-weight:bold;
	font-size:18px;
}
</style>


<script
src='../../../../fw-cdn.com/7229516/3258684.js'
chat='true'
widgetId='f3748773-fdcf-4d2c-b19e-0a38138d06bd'>
</script>


</head>
<body>
<?php include __DIR__ . '/../partials/nav.php'; ?>
<?php include __DIR__ . '/../partials/Responsive.Navbar.php'; ?>
<!-- <div id="main" class="center-screen" style="margin-top: 0px">
	<div class="header" >
	<h3>AiT Online Application</h3>
</div> -->
	 
   <!-- Start Pages Banner Area -->
   <div class="pages-banner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pages-title">
                            <h2>IOR</h2>
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none" href="/">
                                        Home
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    Instant Online Registration
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pages-image">
                            <img src="/assets/img/pages/pages-1.jpg" alt="pages-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-7">
                <img src="/assets/img/shape/shape-7.png" alt="shape">
            </div>
        </div>
        <br>
        <!-- End Pages Banner Area -->

	  <div class="container center-screen" style="margin-top: -120px">
	  	<!-- <div class="card" style="cursor: pointer;" onclick="window.location.href='../public/new_index.php'">
			  <div class="header newgrad">
			    <i class="fa fa-user-plus" style="font-size:48px;color:#02418c"></i>
			    <p class="ms">New Applicants</p>
			  </div>

			  <div class="container">
			    <a class="smalltalk" href="../public/new_index.php">If you are applying for the first time please click this link &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
			  </div>
		</div> -->

		 <div class="card" style="margin-top:160px;cursor: pointer;" onclick="window.location.href='/index.php/Instant-Online-Reg.php'">
  			<img src="/assets/catalog/images/new_applicants.jpg" alt="New Applicants" style="width:100%;">
  			<div class="container_app">
    			<p class="ms">New Applicants</p>
    			<a class="smalltalk" href="/index.php/Instant-Online-Reg.php">If you are applying for the first time please click this link &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  			</div>
		</div> 

	    <!-- <div class="card" style="cursor: pointer;" onclick="window.location.href='account/login.php'">
			  <div class="header newgrad">
			    <i class="fa fa-history" style="font-size:48px;color:#02418c"></i>
			    <p class="ms">Returning Applicants</p>
			  </div>

			  <div class="container">
			    <a class="smalltalk" href="account/login.php">Please click this link to log into your application portal if you had earlier applied through this system</a>
			  </div>
		</div> -->

		<div class="card" style="margin-top:160px;cursor: pointer;" onclick="window.location.href='/index.php/login.php'">
  			<img src="/assets/catalog/images/For%20returning%20applicants.png" alt="New Applicants" style="width:100%;">
  			<div class="container_app">
    			<p class="ms">Returning Applicants</p>
    			<a class="smalltalk" href="/index.php/login.php">Please click this link to log into your application portal if you had earlier applied through this system</a>
  			</div>
		</div>
	  </div>
	</div>

	<!--div class="card" style="cursor: pointer;">
	  <div class="header grad">
	    <h1>1</h1>
	    <p>Returning Applicants</p>
	  </div>

	  <div class="container">
	    <a href="#">Please click this link to log into your application portal if you hav earlier applied through this system</a>
	  </div>
	</div>


	<div class="card " style="cursor: pointer;">
	  <div class="header newgrad">
	    <h1>2</h1>
	    <p>New Applicants</p>
	  </div>

	  <div class="container">
	    <a href="#">If you are applying for first time please click this link  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	  </div>
	</div-->
</div>
           <!-- Start Footer Area -->
           <?php include __DIR__ . '/../partials/footer.php';  ?>
        <!-- End Footer Area -->
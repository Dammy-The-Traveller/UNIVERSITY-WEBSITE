<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="programmers" content="[DABIRI IDOWU DANIEL, +233205828249, dgdgraffix@gmail.com][KODJO AKAMA, +233267164187, johnakama32@gmail.com]" />
  <!-- CSS-->
  <link rel="stylesheet" href="/assets/css/intlTelInput.css" />

  <link rel="stylesheet" type="text/css" href="/assets/css/intlTelInput6e46.css?var=1727182724">
  <link rel="stylesheet" type="text/css" href="/assets/common/bootstrap/css/bootstrap.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="/assets/common/fontAwesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/common/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="/assets/common/animate/animating.css">
  <link rel="stylesheet" type="text/css" href="/assets/common/tooltip/balloon.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/style6e46.css?var=1727182724">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="/assets/css/scrollCue.css">
  <link rel="stylesheet" href="/assets/css/remixicon.css">
  <link rel="stylesheet" href="/assets/css/flaticon.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">
  <link href="/assets/img/favicon_io/favicon-32x32.png" type="image/x-icon" rel="icon">
  <link href="/assets/img/favicon_io/favicon-16x16.png" type="image/x-icon" rel="icon">
  <link rel="stylesheet" href="/assets/fontawesome-free-6.5.1-web/css/all.min.css">
  <style>
	.iti__selected-dial-code { display: none; } 
  </style>
  <title>AIT ADMISSION PROCESSING SYSTEM</title>
</head>
<body style="background-color:rgba(255, 255, 255, 0.149);">
  <div class="header_top_fixed">
    <div class="left_nav_tabs">
      <img src="/assets/img/aitlog.png" class="icon_styling">
      <span>Accra Institute Of Technology</span>
    </div>
    <div class="right_container_nav">
      <span><a href="/">Go back to home</a></span> <span><a href="/index.php/login.php">Login</a></span>
    </div>
  </div>
  <br>
  <div class="body_guy_container">
    <div class="container">
      <h2 class="text-center" style="color: #f5f5f5; margin-top:4px;">AIT ONLINE APPLICATION SYSTEM</h2>
      <div class="row">
        <div class="col-md-8">
          <div class="inner_holder_left_body">
            <br>
            <img src="/assets/img/ait3.jpg" class="img-responsive" style="max-width:80%; max-height: 80%; margin-top: 10px; cursor: pointer;">
            <div class="site-info-display">
              <em> Please Note : </em>
              <ul style="margin:10px 20px ; font-size: 15px;">
                <li>Your Application Will Be Evaluated Based On The Information You Provided</li>
                <li>Your May Update Your Information At Any Time</li>
                <li>You Are Required To Check Your Email Message Regularly For Any Update And Information From The School</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="right_inner_holder_body">
            <div style="color: #fff; ">
              <h4 id="idLabel">STEP 1: Please fill details below</h4>
            </div>
            <div class="text-center" id="all_field_error" style="padding: 4px; color: #fff; display: none;"></div>
            <div>
              <form id="form_sessioner" action="/index.php/register" method="POST" enctype="multipart/form-data">
                <div class="first_giuy_togggle" >
                  <div class="form-group " data-balloon="Enter Firstname" data-balloon-pos="left">
                    <input type="text" name="first_name" class="form-control access_level_auth" placeholder="Your First Name *">
                  </div>
                  <div class="form-group " data-balloon="Enter Middle Name" data-balloon-pos="left">
                    <input type="text" name="middle_name" class="form-control" placeholder="Your Middle Name">
                  </div>
                  <div class="form-group" data-balloon="Enter Lastname" data-balloon-pos="left">
                    <input type="text" name="last_name" class="form-control access_level_auth" placeholder="Your Last Name *">
                  </div>
                  <div class="form-group" data-balloon="Enter a valid Email Address" data-balloon-pos="left">
                    <input type="email" name="email" id="email" class="form-control access_level_auth" placeholder="Your Email Address *" autocomplete="email" required>
                  </div>
                  <div class="form-group" data-balloon="Create a new Password for the purpose of later accessing your Admission Portal" data-balloon-pos="left">
                    <input placeholder="Create your Password *" id="first_pass" name="password" value="" class="form-control access_level_auth" required type="password" autocomplete="current-password" />
                  </div>
                  <div class="form-group" data-balloon=" Confirm Password Must Match first password" data-balloon-pos="left">
                    <input name="repassword" id="sec_pass" placeholder="Confirm Password *" value="" class="form-control access_level_auth" required="required" type="password" />
                    <em class="clear"></em>
                  </div>
                  <div class="form-group">
                    <button  id="goto_next_guy" class="btn btn-success btn-block">Continue</button>
                  </div>
                </div>
                <ul>
                <?php if (isset($errors['first_name'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['first_name'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['middle_name'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['middle_name'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['last_name'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['last_name'] ?></li>
                    <?php endif; ?>


                    <?php if (isset($errors['email'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['password'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['full_number'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['full_number'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['second_phone'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['second_phone'] ?></li>
                    <?php endif; ?>


                    <?php if (isset($errors['whatsapp'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['whatsapp'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['address'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['address'] ?></li>
                    <?php endif; ?>


                    <?php if (isset($errors['address'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['address'] ?></li>
                    <?php endif; ?>
                </ul>


                <div class="next_guy_toggler" style="display: none; position: relative; overflow: hidden;">
                  <div style="margin-top:2%; align-items:center;">
                    <img src="/assets/img/no-pic.png" width="150" height="150" id="idPhotoStud">
                    <input type="file" name="newupload" id="file" style="display: none;">
                    <input type="hidden" id="idPhotoVal">
                  </div>
                  <br> <br>
                 


				  

                  <div class="form-group" data-balloon="Enter Contact Number (Note: Country code should be included e.g +234 - xxx-xxxx-xxx" data-balloon-pos="left">
                    <input type="tel" name="contact1" style="width: 100%;" id="phone" class="form-control access_level_auth_next" required>
                    <input type="hidden" name="country_code" style="opacity: 0; position: absolute; left: -9999px;" id="country_code" value="" required>
                    <input type="hidden" name="full_number" placeholder="Enter Phone number *" style="opacity: 0; position: absolute; left: -9999px; " id="full_number" value="" required>
                  </div>

                  <div class="form-group" data-balloon="Enter other Contact here" data-balloon-pos="left">
                    <input type="number" name="second_phone" class="form-control" placeholder="Other Contact if Any">
                  </div>

                  <div class="form-group" data-balloon="Please select gender" data-balloon-pos="left">
                    <select name="gender"  class="form-control access_level_auth_next" required="required">
                      <option selected="selected" disabled="disabled">Select Gender *</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="form-group" data-balloon="Choose your date of  birth" data-balloon-pos="left">
                    <input type="date" name="DOB" class="form-control access_level_auth_next" placeholder="Date of Birth *" required>
                  </div>
                  <div class="form-group" data-balloon="Enter Whatsapp Contact here" data-balloon-pos="left">
                    <input type="number" name="whatsapp" class="form-control access_level_auth_next" placeholder="Your Whatsapp Contact *">
                  </div>
                  <div class="form-group" data-balloon="Enter Home Address" data-balloon-pos="left">
                    <input type="text" name="address" class="form-control access_level_auth_next" placeholder="Your Home Address *" required>
                  </div>
                  <div class="form-group" data-balloon="Enter Your Country of Origin" data-balloon-pos="left">
                    <select name="country" id="countryDropdown" name="Country_Of_Origin" value="" class="form-control access_level_auth_next" required="required">
                      <option>Your Country Of Origin *</option>
                      <option>Algeria</option>
                      <option>Angola</option>
                      <option>Benin</option>
                      <option>Botswana</option>
                      <option>Burkina Faso</option>
                      <option>Burundi</option>
                      <option>Cameroon</option>
                      <option>Cape Verde</option>
                      <option>Central African Republic</option>
                      <option>Chad</option>
                      <option>Comoros</option>
                      <option>Cote d'Ivoire (Ivory Coast)</option>
                      <option>Democratic Republic of the Congo</option>
                      <option>Djibouti</option>
                      <option>Egypt</option>
                      <option>Equatorial Guinea</option>
                      <option>Eritrea</option>
                      <option>Ethiopia</option>
                      <option>Gabon</option>
                      <option>Ghana</option>
                      <option>Guinea</option>
                      <option>Guinea-Bissau</option>
                      <option>Kenya</option>
                      <option>Lesotho</option>
                      <option>Liberia</option>
                      <option>Libya</option>
                      <option>Madagascar</option>
                      <option>Malawi</option>
                      <option>Mali</option>
                      <option>Mauritania</option>
                      <option>Mauritius</option>
                      <option>Morocco</option>
                      <option>Mozambique</option>
                      <option>Namibia</option>
                      <option>Niger</option>
                      <option>Nigeria</option>
                      <option>Republic of the Congo</option>
                      <option>Rwanda</option>
                      <option>Sao Tome and Principe</option>
                      <option>Senegal</option>
                      <option>Seychelles</option>
                      <option>Sierra Leone</option>
                      <option>Somalia</option>
                      <option>South Africa</option>
                      <option>South Sudan</option>
                      <option>Sudan</option>
                      <option>Swaziland</option>
                      <option>Tanzania</option>
                      <option>The Gambia</option>
                      <option>Togo</option>
                      <option>Tunisia</option>
                      <option>Uganda</option>
                      <option>Zambia</option>
                      <option>Zimbabwe</option>
                    </select>
                  </div>
                  <div class="form-group" data-balloon="Choose School Type" data-balloon-pos="left">
                    <select class="form-control checkinput" id="changer_here_tag" required="required" name="campus_type">
                      <option value="Campus-Based Programs" selected="selected">What are you Applying for ? *</option>
                      <option  title="AIT offer a number of campus-based programs at the undergraduate level in a number of fields including: Engineering, Computing Sciences, Information Technology, Business Administration and Management. Students enrolled on the campus-based programs attend regular lecture sessions at our various technologically advanced modern physical campuses and have free and unlimited access all their learning resources including e-books, lecture notes, handouts, lecture videos, e-library resources etc.">Campus-Based Programs</option>
                      <option value="Open University Programs" title="AIT offers a number of open university programs at the undergraduate and postgraduate levels in a number of fields. The Open University postgraduate programs are offered at the Masters and the PhD levels. Students on our open university programs have unlimited and free access to all their course and learning materials and other learning resources online via our Learning Management System and they have the opportunity to attend 4-5 scheduled weekend tutorial sessions on campus within a trimester."> Open University Programs</option>
              
                    </select>
                  </div>
                  <div class="form-group" id="show_me_level_oum" style="">
                  <select class="form-control checkinput" name="Type_of_program" id="programtype" required="required">
                      <option value="" selected="selected">Select Program Type... *</option>
                    <option value="Undergraduates">Undergraduates Programs</option>
                  </select>
                  </div>
                  <!-- <input type="text" name="univtype" id="store_prog_val" style="display: none;"> -->
                  <div class="form-group">
                    <select id="undergraduates_main" style="" name="programchoice_undergraduates" data-placeholder="Your First Choice" value="" class="sng  form-control" required="required">
                    	<!-- <select onchange="auto_save()" required="required" data-placeholder="Your First Choice" name="first_choice" class="form-control"> -->
                          <option value="YPOC" disabled="disabled" selected="selected">Your Program Of Choice...</option>

                          <option value="" disabled="disabled" style="font-weight: bold;">Advanced School of Systems and Data Studies (ASSDAS)</option>
                                                         <option value="Certificate of Technology (CTech) in Information Technology (IT)">Certificate of Technology (CTech) in Information Technology (IT)</option>
                                                          <option value="Certificate of Technology (CTech) in Computer Science">Certificate of Technology (CTech) in Computer Science</option>
                                                          <option value="Bachelor of Computer Science">Bachelor of Computer Science</option>
                                                          <option value="Bachelor of Science (BSc) in Information Tech (IT) (Network Systems)">Bachelor of Science (BSc) in Information Tech (IT) (Network Systems)</option>
                                                          <option value="Bachelor of Science (BSc) in Information Tech (IT) (Web Dev. &amp; Engineering)">Bachelor of Science (BSc) in Information Tech (IT) (Web Dev. &amp; Engineering)</option>
                                                          <option value="Bachelor of Science (BSc) in Information Tech (IT) (Multimedia Systems)">Bachelor of Science (BSc) in Information Tech (IT) (Multimedia Systems)</option>
                                                          <option value="Bachelor of Science (BSc) in Information Tech (IT) (E-Commerce)">Bachelor of Science (BSc) in Information Tech (IT) (E-Commerce)</option>
                                                          <option value="Bachelor of Science (BSc) in Information Tech (IT) (Software Development)">Bachelor of Science (BSc) in Information Tech (IT) (Software Development)</option>
                                                          <option value="Bachelor of Science (BSc) in Computer Science">Bachelor of Science (BSc) in Computer Science</option>
                             

                          <option value="" disabled="disabled" style="font-weight: bold;">AIT Business School (ABS)</option>
                                                         <option value="Certificate of Technology (CTech) in Business Administration &amp; Info Tech (IT)">Certificate of Technology (CTech) in Business Administration &amp; Info Tech (IT)</option>
                                                          <option value="Certificate of Technology (CTech) in Accounting and Finance">Certificate of Technology (CTech) in Accounting and Finance</option>
                                                          <option value="Certificate of Technology (CTech) in Marketing &amp; Information Technology (IT)">Certificate of Technology (CTech) in Marketing &amp; Information Technology (IT)</option>
                                                          <option value="Certificate of Technology (CTech) in Management Information System (MIS)">Certificate of Technology (CTech) in Management Information System (MIS)</option>
                                                          <option value="DTech in Marketing and Information  Technology">DTech in Marketing and Information  Technology</option>
                                                          <option value="DTech in Business Accounting  Technology">DTech in Business Accounting  Technology</option>
                                                          <option value="DTech in Human Resource Management &amp; Information Technology">DTech in Human Resource Management &amp; Information Technology</option>
                                                          <option value="Diploma of Technology (DTech) in Information Technology (IT)">Diploma of Technology (DTech) in Information Technology (IT)</option>
                                                          <option value="Diploma of Technology (DTech) in Computer Science">Diploma of Technology (DTech) in Computer Science</option>
                                                          <option value="Bachelor of Science (BSc) in Business Administration (Accounting &amp; Finance)">Bachelor of Science (BSc) in Business Administration (Accounting &amp; Finance)</option>
                                                          <option value="Bachelor of Science (BSc) in Business Administration (E-Commerce)">Bachelor of Science (BSc) in Business Administration (E-Commerce)</option>
                                                          <option value="BSc in Business Administration (Entrepreneurship &amp; Information Technology)">BSc in Business Administration (Entrepreneurship &amp; Information Technology)</option>
                                                          <option value="BSc in Business Administration (Marketing &amp; Information Technology)">BSc in Business Administration (Marketing &amp; Information Technology)</option>
                                                          <option value="BSc in Business Administration (Human Res. Management &amp; Information Technology)">BSc in Business Administration (Human Res. Management &amp; Information Technology)</option>
                                                          <option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
                             



                          <option value="" disabled="disabled" style="font-weight: bold;">School of Advanced Technologies, Engineering and Science (SATES)</option>
                                                         <option value="Certificate of Technology (CTech) in Computer Engineering">Certificate of Technology (CTech) in Computer Engineering</option>
                                                          <option value="Certificate of Technology (CTech) in Civil Engineering">Certificate of Technology (CTech) in Civil Engineering</option>
                                                          <option value="Certificate of Technology (CTech) in Electrical and Electronic Engineering">Certificate of Technology (CTech) in Electrical and Electronic Engineering</option>
                                                          <option value="Diploma of Technology (DTech) in Computer Engineering">Diploma of Technology (DTech) in Computer Engineering</option>
                                                          <option value="Diploma of Technology (DTech) in Civil Engineering">Diploma of Technology (DTech) in Civil Engineering</option>
                                                          <option value="Diploma of Technology (DTech) in Electrical and Electronic Engineering">Diploma of Technology (DTech) in Electrical and Electronic Engineering</option>
                                                          <option value="Diploma of Technology (DTech) in Electromechanical Engineering">Diploma of Technology (DTech) in Electromechanical Engineering</option>
                                                          <option value="Diploma of Technology (DTech) in Industrial Engineering">Diploma of Technology (DTech) in Industrial Engineering</option>
                                                          <option value="Diploma of Technology (DTech) in Telecommunications Engineering">Diploma of Technology (DTech) in Telecommunications Engineering</option>
                                                          <option value="Diploma of Technology (DTech) in Software Engineering">Diploma of Technology (DTech) in Software Engineering</option>
                                                          <option value="Bachelor of Engineering (BEng) in Computer Engineering">Bachelor of Engineering (BEng) in Computer Engineering</option>
                                                          <option value="Bachelor of Engineering (BEng) in Civil Engineering">Bachelor of Engineering (BEng) in Civil Engineering</option>
                                                          <option value="Bachelor of Engineering (BEng) in Electrical and Electronic Engineering">Bachelor of Engineering (BEng) in Electrical and Electronic Engineering</option>
                             

                                                    <option value="" disabled="disabled" style="font-weight: bold;">School of Education and Instructional Technologies (SEIT)</option>
                        

                    </select>  
                  </div>
                  <div class="form-group">       
                       <select id="undergraduates_oum" name="programchoice_undergraduates_oum" style="display: none;" class="sng set_my_val form-control" >
                                                     <option value="" disabled="disabled" selected="selected">Your Program Of Choice....</option>
                                                          <option value="Bachelor of Accounting With Honours">Bachelor of Accounting With Honours</option>
                                                           <option value="Bachelor of Business Administration With Honours ">Bachelor of Business Administration With Honours </option>
                                                           <option value="Bachelor of Information Technology With Honours ">Bachelor of Information Technology With Honours </option>
                                                           <option value="Bachelor of Occupational Health And Safety Management With Honours ">Bachelor of Occupational Health And Safety Management With Honours </option>
                                                           <option value="Bachelor of Human Resource Managemnet With Honours">Bachelor of Human Resource Managemnet With Honours</option>
                                                  </select>
                     <select id="masters" name="programchoice_master" style="display: none;" class="sng set_my_val form-control " >
                                                          <option value="" disabled="disabled" selected="selected">Your Program Of Choice....</option>
                                                          <option value="Master of Human Resource Management">Master of Human Resource Management</option>
                                                           <option value="Master of Project Management">Master of Project Management</option>
                                                           <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
                                                           <option value="Master of Information Technology">Master of Information Technology</option>
                                                           <option value="Master of Occupational Safety and Health Risk Management">Master of Occupational Safety and Health Risk Management</option>                     
                     </select>
                     <select id="phd" style="display: none;" name="programchoice_phd" class="sng set_my_val form-control " >
                                                          <option value="" disabled="disabled" selected="selected">Your Program Of Choice....</option>
                                                          <option value="PhD (Business Administration)">PhD (Business Administration)</option>
                                                           <option value="PhD (Information Technology)">PhD (Information Technology)</option>
                                                           <option value="PhD (Education)">PhD (Education)</option>
                                                  </select>
                   </div> 
                  <!--<div class="g-recaptcha" data-sitekey="6LffXmcUAAAAAPNt4O4iACC9HN8LBKwZipzZoyZj"></div>-->
                  <div class="form-group text-center">
                    <button id="prev_guy_call" class="btn btn-info def_dis">PREV</button> 
                    <button type="submit" value="Submit" class="btn btn-warning" >Finish</button>
                  </div>
                </div>
				      <ul>
                    <?php if (isset($errors['email'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['password'])) : ?>
                        <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                    <?php endif; ?>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id='overlay'></div>
    <div id="MoreInfo" style="">
      <img src="/assets/img/confused.png">
      <h4>Face to Face ( Campus-Based Program)</h4>
      <p>AIT offer a number of campus-based programs at the undergraduate level in a number of fields including: Engineering, Computing Sciences, Information Technology, Business Administration and Management. </p>
      <p>Students enrolled on the campus-based programs attend regular lecture sessions at our various technologically advanced modern physical campuses and have free and unlimited access all their learning resources including e-books, lecture notes, handouts, lecture videos, e-library resources <a href="#">read more</a>.</p>
      <h4>Online ( Open University Program)</h4>
      <p>AIT offers a number of open university programs at the undergraduate and postgraduate levels in a number of fields. The Open University postgraduate programs are offered at the Masters and the PhD levels.</p>
      <p> Students on our open university programs have unlimited and free access to all their course and learning materials and other learning resources online via our Learning Management System and they have the opportunity to attend 4-5 scheduled weekend tutorial sessions on campus within a trimester <a href="#">read more</a></p>
      <button id="closeInfo">Got it</button>
    </div>
  </div>
  <br>
  <br>
  <br>
</body>
<script src="/assets/catalog/view/jquery.js"></script>
<script src="/assets/common/bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/assets/catalog/view/intlTelInput.min1bdc.js?var1727182724"></script> 
<script type="text/javascript" src="/assets/catalog/view/script1bdc.js?var1727182724"></script>
<script src="/assets/js/intlTelInput.min.js"></script>
<script src="/assets/js/utils.js"></script>

<script>

        // Initializing the intl-tel-input plugin on the #phone input element
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            initialCountry: "auto",
            preferredCountries: ["us", "gb", "gh"],
            separateDialCode: true,
			autoPlaceholder:true,
            formatOnDisplay:true,
            placeholderNumberType:"MOBILE",
        });



        fetch('https://ipinfo.io/json?token=bef370c911e8ad') 
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('GeoIP Response:', data); 
                let countryCode = "";
                if (data && data.country) {
                    countryCode = data.country; 
                } else {
                    console.error('No country code found in response.');
                }

                // Set the country code in intl-tel-input and hidden input
                iti.setCountry(countryCode.toLowerCase()); 
                document.querySelector("#country_code").value = countryCode;
            })
            .catch(error => {
                console.error('GeoIP lookup failed:', error); 
            });
		

  
  input.addEventListener("blur", function() {
            var countryCode = iti.getSelectedCountryData().dialCode; 
            var fullNumber = iti.getNumber();  

            document.querySelector("#country_code").value = countryCode;  
            document.querySelector("#full_number").value = fullNumber;  
        });




    document.getElementById('form_sessioner').addEventListener('submit', function() {
    const undergraduates = document.getElementById('undergraduates_oum');
    const masters = document.getElementById('masters');
    const phd = document.getElementById('phd');

    if (undergraduates.style.display !== 'none') {
        undergraduates.setAttribute('required', 'required');
    } else {
        undergraduates.removeAttribute('required');
    }

    if (masters.style.display !== 'none') {
        masters.setAttribute('required', 'required');
    } else {
        masters.removeAttribute('required');
    }

    if (phd.style.display !== 'none') {
        phd.setAttribute('required', 'required');
    } else {
        phd.removeAttribute('required');
    }
});

    </script>

</html>
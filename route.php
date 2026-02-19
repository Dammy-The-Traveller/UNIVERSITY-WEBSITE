<?php
        //HOME
$router->get("/","index.php");



      //ABOUT
$router->get("/index.php/about.php","about.php");
       //ABOUT/Media&events
$router->get("/index.php/News&events.php","About-Us/Media&events/News&events.php");
       //ABOUT
$router->get("/index.php/ait-advantage.php","About-Us/Ait-Advantage.php");
$router->get("/index.php/Ait-President.php","About-Us/Ait-President.php");
$router->get("/index.php/Privacy-Policy.php","About-Us/Privacy-Policy.php");
$router->get("/index.php/terms-conditions.php","About-Us/terms-conditions.php");
$router->get("/index.php/University-Leadership.php","About-Us/University-Leadership.php");
$router->get("/index.php/Visions-Missions.php","About-Us/Visions-Missions.php");



       //Admissions/Alternative-Application
$router->get("/index.php/International-Applicants.php","Admissions/Alternative-Application/International-Applicants.php");
$router->get("/index.php/Local-Applicants.php","Admissions/Alternative-Application/Local-Applicants.php");
          //Admissions/Prospective-Student
$router->get("/index.php/Cut-off-points.php","Admissions/Prospective-Student/Cut-off-points.php");
$router->get("/index.php/Distance-Learning-Admissions.php","Admissions/Prospective-Student/Distance-Learning-Admissions.php");
$router->get("/index.php/How-to-apply.php","Admissions/Prospective-Student/How-to-apply.php");
$router->get("/index.php/Postgraduate-Entry-Requirement&Guidelines.php","Admissions/Prospective-Student/Postgraduate-Entry-Requirement&Guidelines.php");
$router->get("/index.php/Undergraduate-Entry-Requirement&Guidelines.php","Admissions/Prospective-Student/Undergraduate-Entry-Requirement&Guidelines.php");
             //Admissions
$router->get("/index.php/Application-Form.php","Admissions/Application-Form.php");
$router->get("/index.php/Check-Admission-Status.php","Admissions/Check-Admission-Status.php");
$router->get("/index.php/Instant-Online-registration.php","Admissions/Instant-Online-registration.php");
$router->get("/index.php/Log-In-Now.php","Admissions/Log-In-Now.php");
$router->get("/index.php/Support&Guidance.php","Admissions/Support&Guidance.php");
$router->get("/index.php/Verify-Admission.php","Admissions/Verify-Admission.php");



       //Academics
$router->get("/index.php/All-Programs.php","Academics/All-Programs.php");
$router->get("/index.php/Tutition&Fees.php","Academics/Tutition&Fees.php");



          //Health-Care
$router->get("/index.php/Fitness&Athletics.php","Health-Care/Fitness&Athletics.php");



            //Student-Life/Fresh-Student-Guide
$router->get("/index.php/Accomodation.php","Student-Life/Fresh-Student-Guide/Accomodation.php");
$router->get("/index.php/Campus-Facilities.php","Student-Life/Fresh-Student-Guide/Campus-Facilities.php");
$router->get("/index.php/Campus-Security.php","Student-Life/Fresh-Student-Guide/Campus-Security.php");
$router->get("/index.php/Important-Offices.php","Student-Life/Fresh-Student-Guide/Important-Offices.php");
$router->get("/index.php/Orientation.php","Student-Life/Fresh-Student-Guide/Orientation.php");
$router->get("/index.php/Student-Id-Card.php","Student-Life/Fresh-Student-Guide/Student-Id-Card.php");
$router->get("/index.php/Transportation.php","Student-Life/Fresh-Student-Guide/Transportation.php");
           //Student-Life
$router->get("/index.php/University-life.php","Student-Life/University-life.php");



                 //Contact
$router->get("/index.php/contact.php","contact.php");



// $router->get("/index.php/Notes.php","Notes/Index.php")->only("auth");
// $router->get("/index.php/Notes","Notes/Show.php");
// $router->delete("/index.php/Notes","Notes/destroy.php");

// $router->get("/index.php/Notes/edit.php","Notes/edit.php");
// $router->patch("/index.php/Notes","Notes/update.php");

// $router->get("/index.php/Notes/Create.php","Notes/Create.php");
// $router->post("/index.php/Notes","Notes/store.php");

 $router->get("/index.php/Instant-Online-Reg.php","registration/Create.php")->only("guest");
$router->post("/index.php/register","registration/store.php")->only("guest");


$router->get("/index.php/login.php","Sessions/Create.php")->only("guest");
$router->post("/index.php/login","Sessions/store.php")->only("guest");

$router->get("/index.php/dashboard.php","user/dashboard.php")->only("auth");

$router->delete("/index.php/logout","Sessions/destroy.php")->only("auth");
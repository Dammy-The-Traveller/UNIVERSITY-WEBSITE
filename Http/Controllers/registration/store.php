<?php 
use core\App;
use core\Database;
use core\Validator;
use core\Authenticator;

$first_name = trim($_POST["first_name"]);
$middle_name = trim($_POST["middle_name"]);
$last_name = trim($_POST["last_name"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$repassword = trim($_POST["repassword"]);
$country_code =$_POST['country_code'];
$first_phone = trim($_POST["contact1"]);
$second_phone = trim($_POST["second_phone"]);
$gender =$_POST["gender"];
$DOB = $_POST["DOB"];
$whatsapp = trim($_POST["whatsapp"]);
$address = trim($_POST["address"]);
$country = $_POST['country'];
$campus_type = $_POST["campus_type"];
$Type_of_program = $_POST["Type_of_program"];
$programchoice_undergraduates = $_POST["programchoice_undergraduates"];
// $programchoice_undergraduates_oum = $_POST["programchoice_undergraduates_oum"];
// $programchoice_master = $_POST["programchoice_master"];
// $programchoice_phd = $_POST["programchoice_phd"];
$user_type='user';




//validate the form inputs.
$errors=[];


 if(!Validator::email($email)){
    $errors['email'] = "Please provide a valid email address.";
}
 if(!Validator::string($password,7,255)) {
    $errors["password"] = "Please provide a valid password of atleast 7 characters";
}
 


if(!$password===$repassword) {
    $errors["password"] = "Your passwords does not match!";

}



// if(!Validator::email($email)) {
//     $errors['email'] = "Please provide a valid email address.";
// }


// if(!Validator::string($password,7,255)) {
//     $errors["password"] = "Please provide a valid password of atleast 7 characters";
// }

if(!empty($errors)) {
    
    return view('registration/new_index.view.php', [
        'errors'=>$errors
        
    ]);
    
}




$db = App::resolve(Database::class);
//check if the account already exists
$user = $db->query("SELECT * FROM `users` WHERE email =:email", ['email'=> $email])->find();
// if yes, redirect to a login page.
// if not, save one to the database, and log the user in and redirect
if($user){
    //then someone with that email already exists and has an account
    // if yes, redirect to a login page
    header('location:/index.php/login.php');
    exit();
}else{
    // if not, save one to the database, and then log the user in, and redirect.
    $db->query('INSERT INTO `users`(first_name, middle_name, last_name, email, password, first_phone, second_phone, gender, DOB, whatsapp, address, country, campus_type, Type_of_program, Program_of_choice, user_type) VALUES (:first_name, :middle_name, :last_name, :email, :password, :first_phone, :second_phone, :gender, :DOB, :whatsapp, :address, :country, :campus_type, :Type_of_program, :Program_of_choice, :user_type)',[
        'first_name' => $first_name,
        'middle_name' => $middle_name,
        'last_name' => $last_name,
        'email'=> $email,
        'password'=> password_hash ($password, PASSWORD_DEFAULT),
        'first_phone' => $first_phone,
        'second_phone' => $second_phone,
        'gender' => $gender,
        'DOB' => $DOB,
        'whatsapp' => $whatsapp,
        'address' => $address,
        'country' => $country,
        'campus_type' => $campus_type,
        'Type_of_program' => $Type_of_program,
        'Program_of_choice' => $programchoice_undergraduates,
        'user_type' => $user_type,

]);
}
$auths = new Authenticator();
$auths->login($user);
header('location:/index.php/dashboard.php');
exit();

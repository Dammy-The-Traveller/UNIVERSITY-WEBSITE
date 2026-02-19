<?php 
use core\Authenticator;
use Http\Forms\Loginform;
 
$form = Loginform::validate($attributes =[
    "email"=>  trim($_POST["email"]),
    "password"=> trim($_POST["password"]),
]);


$signedIn = (new Authenticator)->attempt(
    $attributes['email'], $attributes['password']
);


if (!$signedIn) {
   $form->error(
    'email', 'No matching account found for that email address and password.'
)->throw();
}

redirect('/index.php/dashboard.php');






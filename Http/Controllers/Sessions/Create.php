<?php 
use core\Session;
view('Sessions/Create.veiw.php',[
    'errors'=> Session::get('errors'),
]);
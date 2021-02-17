<?php

include_once 'include\user.php';
include_once 'include\userSession.php';

$userSession=new UserSession();
$user=new User();

if (isset($_SESSION['user'])) {
    
    $user->setUser($userSession->getCurrentUser());
    include_once 'views\home.php';

}elseif (isset($_POST['username']) && isset($_POST['password'])) {
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if ($user->userExist($userForm,$passForm)) {
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'views\home.php';
    }else {
        $errorLogin="The username or the password are incorrect";
        include_once 'views\login.php';
    }

}else {
    include_once 'views\login.php';
}

?>
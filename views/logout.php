<?php 

include_once 'include\userSession.php';

$userSession=new UserSession();
$userSession->closeSession();

header("location: ..\index.php")

?>
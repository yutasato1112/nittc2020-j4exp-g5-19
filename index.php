<?php
    include('pageA');
    include('pageB');
    include('pageC');
    include('pageD');
    include('pageA\E');

    header('Location:pageD.php');
    if( isset($_POST["statusDtoA"]) ){
      header('Location:pageA.php');
    }
?>
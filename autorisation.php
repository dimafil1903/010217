<?php
$adminlog='iamadmin';
$adminpass='iamadmin';
$login=filter_input(INPUT_POST,'login');
$pass=filter_input(INPUT_POST,'pass');
if($adminlog==$login && $adminpass==$pass){
    echo 'вы авторизированы';
}

<?php
require 'config.php';
require 'core/database.php'; 
require "./drivers/".$db_connection.'_database.php';

$dbClassName = $db_connection.'_database';
$db = new $dbClassName();

$users = $db->table('users')->get();

// $users = $db->get('users',2);

// foreach($users as $user){
//     echo $user->username . '<br/>';
// }

$db->table('users')->insert([
    'username' => 'NguyenThuy',
    'password' => '123123',
    'fullname' => 'Nguyen Thi Thuy',
    'email' => 'adsa@gmail.com'
]);

//1h44  30/6
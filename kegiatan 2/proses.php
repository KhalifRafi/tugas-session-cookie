<?php

session_start();

$users = array(
    array("username1", "Rosihan Ari Yuana", "123456"),
    array("username2", "Dwi Amalia Fitriani", "654321"),
    array("username3", "Faza Fauzan khosyisyahrohman", "112233")
);

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach($users as $profile_user){
        if(($profile_user[0] == $username) && ($profile_user[2] == $password)){
            $_SESSION['namauser'] = $profile_user[1];

            header("Location: page1.php");
        }
    }
    echo "<h3>Login gagal</h3>";
    echo "<p>silahkan <a href = 'form.html'>Login kembali</a></p>";
}

?>
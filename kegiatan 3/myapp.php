<?php

if (isset($_POST['submit'])){
	setcookie("username", $_POST['username'], time()+3*30*24*3600,"/");
	setcookie("visits", 0, time()+3*30*24*3600,"/");
	setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");
	header("Location:myapp.php");
}

if (isset($_COOKIE['username'])){
	echo "<p>Hallo selamat datang ".$_COOKIE['username']."</p>";
	echo "<p>Ini kunjungan Anda yang ke-".($_COOKIE['visits']+1)."</p>";
	echo "<p>Kunjungan Anda sebelumnya adalah pada tanggal ".$_COOKIE['lastvisit']."</p>";

	setcookie("username", $_COOKIE['username'], time()+3*30*24*3600,"/");
	setcookie("visits", $_COOKIE['visits']+1, time()+3*30*24*3600,"/");
	setcookie("lastvisit", date("d-m-Y H:i:s"), time()+3*30*24*3600,"/");
} else {
	// jika cookie username belum ada, munculkan form
?>

<h1>Welcome to my site</h1>
<p>Ini kunjungan pertama anda di situs ini ya?</p>
<p>kita kenalan dulu, silahkan masukkan nama anda</p>
<form action="myapp.php" method="post">
    Nama anda <input type="text" name="username">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
}
?>
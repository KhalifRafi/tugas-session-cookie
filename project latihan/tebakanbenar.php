<?php

$angkaRandom = rand(0, 100);
setcookie("angkaacak", $angkaRandom, time()-3600, "/");
echo "<p>Selamat ya anda benar, saya telah memilih bilangan ".$_COOKIE['angkaacak']."</p>";
echo "<p><a href = 'form.html'>Ulangi ?</a> Klik jika ingin mengulangi permainan</p>";

?>
<?php
error_reporting(0);
print "AQUA Extrap -Nabila Tools\n";
print "Thanks To : Muhammad Ikhsan Aprilyadi\n";
print "Setelah mendapatkan kode unik, Peserta dapat memasukkan kode unik melalui WhatsApp ke Akun WhatsApp Official AQUA di nomor 0813-8080-9400\n\n";
echo "[?] Jumlah : ";
    $jum = trim(fgets(STDIN));
echo "[?] Nama : ";
$name = trim(fgets(STDIN));
echo "[?] No Identitas KTP/SIM : ";
$id = trim(fgets(STDIN));
echo "[?] No.HP : ";
$no = trim(fgets(STDIN));
echo "[?] Kota : ";
$kota = trim(fgets(STDIN));
echo "\n\n";
for($a=2;$a<$jum;$a++){
sleep (1);
$acak = substr(str_shuffle("012345678910ABCDEFGHIJKLMNOPQRSTUVWXYZ"), -9);
echo "HATIHARUSOPTIMIS ".$acak."#".$name."#".$id."#".$no."#".$kota."\n";
  }
?>
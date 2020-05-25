<!DOCTYPE html>
<html lang="tr" >
<head>
<meta charset="utf-8" />
</head>
<body>

<?php
// Tarih ve Saati server bazlı göstermektedir.
setlocale(LC_TIME, 'tr_TR.UTF-8'); // setlocale(LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish'); kullanılabilir.
date_default_timezone_set('Europe/Istanbul');

// strftime("Tarih: %d %B %Y %A - Saat: %H:%M:%S"); kullanılabilir.

// Haftanın Günlerinin ve Ayların tamamı Türkçe'ye çevirilmiştir.
$weekdays = array('Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi', 'Pazar');
$months = array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');

$dtime1 = date('j ') . $months[date('m') - 1] . date(' Y ') . $weekdays[date('N') - 1];
$dtime2 = date('H:i:s');

echo 'Tarih: <span>' . $dtime1 .  '</span> - Saat: <span>' . $dtime2 . '</span>';
// PHP dosyası Ajax ile çağırılmalı
?>

</body>
</html>

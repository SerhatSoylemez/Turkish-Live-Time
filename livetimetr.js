function showTime() {
var d = new Date();

// Haftanın Günlerinin ve Ayların tamamı Türkçe'ye çevirilmiştir.
var weekDays = ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'];
var months = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'];

function addZero(i) { if (i < 10) { i = '0' + i; } return i; }

var dtime1 = addZero(d.getDate()) + ' ' + months[d.getMonth()] + ' ' + d.getFullYear() + ' ' + weekDays[d.getDay()]; // Tarih
var dtime2 = addZero(d.getHours()) + ':' + addZero(d.getMinutes()) + ':' + addZero(d.getSeconds()); // Saat

document.getElementById('liveTime1').innerHTML = dtime1; // Id: liveTime1
document.getElementById('liveTime2').innerHTML = dtime2; // Id: liveTime2
// HTML içine "Tarih: <span id="liveTime1" ></span> - Saat: <span id="liveTime2" ></span>" kodlarını yazabilirsiniz.

}
setInterval(showTime, 1000);

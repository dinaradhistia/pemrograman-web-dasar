var time = new Date();

var tanggal = time.getDate();
var hariIndex = time.getDay();
var bulanIndex = time.getMonth();
var tahun = time.getFullYear();

var daftarHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
var hari = daftarHari[hariIndex];

var daftarBulan = [
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
];
var bulan = daftarBulan[bulanIndex];

document.write(time + "<br>");
document.write("Hari ini adalah tanggal : " + tanggal + "<br>");
document.write("Hari ini adalah hari : " + hari + "<br>");
document.write("Hari ini adalah bulan : " + bulan + "<br>");
document.write("Hari ini adalah tahun : " + tahun + "<br>");
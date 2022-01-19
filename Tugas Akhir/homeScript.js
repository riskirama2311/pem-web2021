const lang = navigator.language;
let tanggal = new Date();

let hariKe = tanggal.getDate();
let bulan = tanggal.getMonth();
let namaHari = tanggal.toLocaleString(lang,{weekday: 'long'});
let namaBulan = tanggal.toLocaleString(lang,{month: 'long'});
let tahun = tanggal.getFullYear();

console.log(namaBulan, namaHari, hariKe, tahun)

const bln = document.getElementById('namaBulan');
const tgl = document.getElementById('hariKe');
const hri = document.getElementById('namaHari');
const thn = document.getElementById('tahun');

bln.innerHTML = namaBulan;
hri.innerHTML = namaHari;
tgl.innerHTML = hariKe;
thn.innerHTML = tahun;

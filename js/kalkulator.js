function tambah(){
    let frm = document.getElementById('kalkulator');
    let a1 = parseFloat(frm.angka.value);
    let a2 = parseFloat(frm.angka2.value);
    let total = a1 + a2;
    frm.hasil.value = total;
}
function kurang(){
    let frm = document.getElementById('kalkulator');
    let a1 = parseFloat(frm.angka.value);
    let a2 = parseFloat(frm.angka2.value);
    let total = a1 - a2;
    frm.hasil.value = total;
}
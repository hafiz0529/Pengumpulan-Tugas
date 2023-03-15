function tambah(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2;
    frm.hasil.value = total;

    let input =  a1 + a2;
    let no_input = 'Silahkan mengisi angka';
    let ket = (a1 && a2 != '') ? input : no_input;

    document.getElementById('ket').innerHTML = ket;
}

function kurang(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 - a2;
    frm.hasil.value = total;

    let input =  a1 + a2;
    let no_input = 'Silahkan mengisi angka';
    let ket = (a1 && a2 != '') ? input : no_input;

    document.getElementById('ket').innerHTML = ket;
}
function kali(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 * a2;
    frm.hasil.value = total;

    let input =  a1 + a2;
    let no_input = 'Silahkan mengisi angka';
    let ket = (a1 && a2 != '') ? input : no_input;

    document.getElementById('ket').innerHTML = ket;
}
function bagi(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 / a2;
    frm.hasil.value = total;

    let input =  a1 + a2;
    let no_input = 'Silahkan mengisi angka';
    let ket = (a1 && a2 != '') ? input : no_input;

    document.getElementById('ket').innerHTML = ket;
}
function pangkat(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 ** a2;
    frm.hasil.value = total;
    
    let input =  a1 + a2;
    let no_input = 'Silahkan mengisi angka';
    let ket = (a1 && a2 != '') ? input : no_input;

    document.getElementById('ket').innerHTML = ket;
}

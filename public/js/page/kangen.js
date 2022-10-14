const Enkripsi = {_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Enkripsi._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Enkripsi._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}

const ORIGIN = window.location.origin;
function tunjukkan() {
    document.getElementById("sticky-ad").style = "bottom: 0px";
}
function hilangkan() {
    document.getElementById("sticky-ad").style = "bottom: -130px";
}
function showDiv() {
    setTimeout(setel, 30);
    pergantian();
    setTimeout(kpemb, 100);
    document.getElementById("Content").style = "opacity:1;margin-top:4vh;animation:kont 5s infinite;";
    document.querySelector("body").style.animation = "none 8s ease infinite";
}
function kpemb() {
    bq.style = "opacity:1;visibility:visible;margin-top:5px";
}
function loadfoto() {
    fotosatu.style = "display:inline-flex";
    fotosatu.src = gambar1;
    fotodua.src = gambar2;
    fototiga.src = gambar3;
    fotoempat.src = gambar4;
    fotolima.src = gambar5;
    fotoenam.src = gambar6;
    fototujuh.src = gambar7;
    fotolapan.src = gambar8;
}
function tombol() {
    contTom.style = "opacity:1;transform: scale(1);";
    ftom = 1;
}
ftom = 0;
function fakhiran() {
    document.getElementById("akhiran").style = "display:inline-flex";
}
const swals = Swal.mixin({
    allowOutsideClick: false,
    cancelButtonColor: "#FF0040",
});
const swalsy = Swal.mixin({
    confirmButtonText: "Iya",
    allowOutsideClick: false,
});
const swalst = Swal.mixin({
    allowOutsideClick: false,
    showConfirmButton: false,
    timer: 1200,
    timerProgressBar: true,
    didOpen: () => {
        Swal.showLoading();
        const b = Swal.getHtmlContainer().querySelector("b");
        timerInterval = setInterval(() => {
            Swal.getTimerLeft();
        }, 100);
    },
    willClose: () => {
        clearInterval(timerInterval);
    },
});
const style = document.createElement("style");
var today = new Date();
var dd = String(today.getDate()).padStart(2, "0");
var mm = String(today.getMonth() + 1).padStart(2, "0");
var yyyy = today.getFullYear();
const monthNames = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
];
today = dd + " " + monthNames[today.getMonth()] + " " + yyyy;
function otomatis() {
    befanimkata();
    setTimeout(animkata, 200);
}
function befanimkata() {
    kalimat.style = "transform:scale(.3);";
}
function animkata() {
    kalimat.style = "transform:scale(1);";
}
function otomatis2() {
    befanimkataa();
    setTimeout(animkataa, 200);
}
function befanimkataa() {
    kalimatc.style = "transform:scale(.3);font-size:14px;margin-top:30px;";
}
function animkataa() {
    kalimatc.style = "transform:scale(1);font-size:14px;margin-top:30px;";
}
function sjawab() {
    if (ftom == 1) {
        kalimatc.innerHTML = "";
        otomatis2();
        jawab();
    }
    if (ftom == 2) {
        menuju();
    }
}
function setel() {
    audio.play();
}
function setel2() {
    bgm.play();
}
var aa = 0,
    katangetik;
function ngetik() {
    kalimat.style = "font-size:16px";
    if (aa < katangetik.length) {
        kalimat.innerHTML += katangetik.charAt(aa);
        aa++;
        setTimeout(ngetik, 50);
    }
}
function bawahlagi() {
    setTimeout(tombol, 1000);
    kalimatc.style = "margin-top:30px;";
    kalimatc.innerHTML = emot;
    fototujuh.style = "display:none";
    fotolapan.style = "display:inline-flex";
    setTimeout(tunjukkan, 300);
}

function pergantian() {
    setTimeout(gantikata, 700);
    setTimeout(gantikata, 2300);
    setTimeout(gantikata, 4400);
    setTimeout(gantikata, 5700);
    setTimeout(gantikata, 6500);
    setTimeout(gantikata, 8200);
    setTimeout(gantikata, 9500);
}
function tfkata() {
    fkata += 1;
}
function bersihkan() {
    kalimat.innerHTML = "";
}
fkata = 1;
function gantikata() {
    if (fkata == 1) {
        otomatis();
        kalimat.innerHTML = kata1;
    }
    if (fkata == 2) {
        otomatis();
        kalimat.innerHTML = kata2;
        fotosatu.style = "display:none";
        fotodua.style = "display:inline-flex;";
    }
    if (fkata == 3) {
        otomatis();
        kalimat.innerHTML = kata3;
        fotodua.style = "display:none";
        fototiga.style = "display:inline-flex;";
    }
    if (fkata == 4) {
        otomatis();
        kalimat.innerHTML = kata4;
        fototiga.style = "display:none";
        fotoempat.style = "display:inline-flex";
    }
    if (fkata == 5) {
        otomatis();
        kalimat.innerHTML = kata5;
        fotoempat.style = "display:none";
        fotolima.style = "display:inline-flex";
    }
    if (fkata == 6) {
        otomatis();
        kalimat.innerHTML = kata6;
        fotolima.style = "display:none";
        fotoenam.style = "display:inline-flex";
    }
    if (fkata == 7) {
        kalimat.innerHTML = "";
        setTimeout(ngetik, 50);
        setTimeout(bawahlagi, 2300);
        fotoenam.style = "display:none";
        fototujuh.style = "display:inline-flex";
    }
    setTimeout(tfkata, 300);
}

async function jawab() {
    var { value: jawaban } = await swals.fire({
        title: "Ketik Pesan Kamu &#128073;&#128072;",
        input: "text",
        allowOutsideClick: false,
        showCancelButton: false,
    });
    if (jawaban && jawaban.length < 21) {
        window.location = "https://api.whatsapp.com/send?phone=6283845257534&text=" + jawaban;
    } else {
        await swals.fire(
            "Ups!",
            "Jawaban tidak boleh kosong atau lebih dari 20 karakter, ya!"
        );
        jawab();
    }
}

async function pertama() {
    audio = new Audio(`${ORIGIN}/bolehkangen.mp3`);

    gambar1 = `${ORIGIN}/img/page/pusn.gif`;
    gambar2 = `${ORIGIN}/img/page/emawh.gif`;
    gambar3 = `${ORIGIN}/img/page/weee.gif`;
    gambar4 = `${ORIGIN}/img/page/pusn.gif`;
    gambar5 = `${ORIGIN}/img/page/aaaa.gif`;
    gambar6 = `${ORIGIN}/img/page/bunga.gif`;
    gambar7 = `${ORIGIN}/img/page/ngumpet.gif`;
    gambar8 = `${ORIGIN}/img/page/weee.gif`;

    kata1 = Enkripsi.decode("QWt1IEJvbGVoIEthbmdlbiBHYSA/");
    kata2 = Enkripsi.decode("QWt1IEthbmdlbmluIEthbXUgeWFh");
    kata3 = Enkripsi.decode("RGlraXQgYWph") + " 👉🏻👈🏻";
    kata4 = Enkripsi.decode("QmVuZXJhbi4u");
    kata5 = Enkripsi.decode("U2VkaWtpdHQgYWphYSA+PA==");
    kata6 = Enkripsi.decode("R2EgYmFueWFrIGtvLi4u");
    katangetik = Enkripsi.decode("S2FtdSBoYXJ1cyBrYW5nZW4gZG9uZyBzYW1hIGFrdSA6KA==");

    emot = Enkripsi.decode("SGVoZWhlaGVoZQ==") + "🤣";

    loadfoto();
    await swalst.fire("Tunggu");
    await swals.fire(Enkripsi.decode("SGFpIEZlbnRpIENhbnRpa2tr"), Enkripsi.decode("U2VrYXJhbmcgbGloYXQgaW5pIHlhIDop"));
    setTimeout(showDiv, 300);
}

pertama();

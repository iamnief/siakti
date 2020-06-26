const qr = window.qrcode;

const base_url = window.location.origin;

const video = document.createElement("video");
const canvasElement = document.getElementById("qr-canvas");
const canvas = canvasElement.getContext("2d");

const qrResult = document.getElementById("qr-result");
const outputData = document.getElementById("outputData");
const message = document.getElementById("message");
const btnScanQR = document.getElementById("btn-scan-qr");
const btnCancelScan = document.getElementById("btn-cancel-scan");
let scanning = false;

qr.callback = res => {
    console.log("res",res);
    if (res) {
        outputData.value = res;
        message.innerText = base_url;
        scanning = false;

        let xmlhttp = new XMLHttpRequest();
        let url = `${base_url}/siakti/absensi_mahasiswa/scanabsen`;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                message.innerText = this.responseText;
            }
        };
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(`namaruang=${res}`);

        video.srcObject.getTracks().forEach(track => {
            track.stop();
        });

        qrResult.hidden = false;
        canvasElement.hidden = true;
        btnScanQR.hidden = false;
        btnCancelScan.hidden = true;
    }
};

btnCancelScan.onclick = () => {
    scanning = false;
    video.srcObject.getTracks().forEach(track => {
        track.stop();
    });

    qrResult.hidden = true;
    canvasElement.hidden = true;
    btnScanQR.hidden = false;
    btnCancelScan.hidden = true;
}

btnScanQR.onclick = () => {
    navigator.mediaDevices
        .getUserMedia({ video: { facingMode: "environment" } })
        .then(function (stream) {
            scanning = true;
            qrResult.hidden = true;
            btnScanQR.hidden = true;
            canvasElement.hidden = false;
            btnCancelScan.hidden = false;
            video.setAttribute("playsinline", true);
            video.srcObject = stream;
            video.play();
            tick();
            scan();
        });
};



function tick() {
    canvasElement.height = video.videoHeight;
    canvasElement.width = video.videoWidth;
    canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

    scanning && requestAnimationFrame(tick);
}

function scan() {
    try {
        qr.decode();
    } catch (e) {
        setTimeout(scan, 300);
    }
}

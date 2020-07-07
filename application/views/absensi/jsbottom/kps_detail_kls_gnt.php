<script>
    const pin = document.getElementById("pin");
    const btn_verif = document.getElementById("verif_kelas_pengganti");
    const btn_submit = document.getElementById("submit_kelas_pengganti");
    const message = document.getElementById("message");

    btn_verif.onclick = () => {
        if ($('#kd_gantikls').val() != '' && $('#kd_gantikls').val() != null) {
            let url = "<?php echo site_url('absensi_kps/checkpin'); ?>";
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == 'true') {
                        btn_submit.click();
                    } else {
                        message.innerText = 'Pin Salah';
                        message.style = 'color: red;';
                    }
                }
            };
            xmlhttp.open("POST", url, true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(`pin=${pin.value}`);
        } else {
            message.innerText = 'Tak ada';
        }
    }
</script>
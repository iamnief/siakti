<script type="text/javascript">
    function onClickSelesai() {
        let materi = $('#materi').val();
        let pin_mhs = $('#pin_mhs').val();
        let nim_mhs = $('#nim_mhs').val();
        let kode = $('#kode').val();

        if (materi === '' || nim_mhs === '' || pin_mhs === '') {
            document.getElementById("message").innerHTML = "<p style='color: red; font-size: 12px;'>Silakan Isi Kolom yang masih kosong</p>";
        } else {
            let url = "<?php echo site_url('absensi_dosen/kelas_selesai') ?>"
            + "/" +  kode + "/" +  materi + "/" + pin_mhs + "/" + nim_mhs;
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let verif = this.responseText;
                    if(verif == '00'){
                        let display = "<div class='card-body'><h3 class='text-center'>Kelas Telah Selesai</h3>"
                        display += "<a class='btn btn-yellow' href='<?php echo site_url('absensi_dosen/index') ?>'>Dashboard</a></div>";
                        document.getElementById("form_verif").innerHTML = display;
                    } else {
                        document.getElementById("message").innerHTML = "<p style='color: red; font-size: 12px;'>NIM atau PIN salah</p>";
                    }
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }
    }
</script>
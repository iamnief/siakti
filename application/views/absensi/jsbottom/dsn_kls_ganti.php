<script type="text/javascript">
  const field_jam = document.getElementById("field_jam");
  const tanggal_pengganti = document.getElementById("tanggal_pengganti");
  const namaruang = document.getElementById("namaruang");
  const kodeklas = document.getElementById("kodeklas");
  const message = document.getElementById("message");
  const submit_kelas = document.getElementById("submit_kelas");
  const base_url = window.location.origin;

  function getJam() {
    let today = new Date();
    let tgl_gnt = new Date(tanggal_pengganti.value);
    if (tgl_gnt > today) {
      let xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          field_jam.innerHTML = this.responseText;
        }
      };
      xmlhttp.open("POST", "jam_terisi", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send(`namaruang=${namaruang.value}&kodeklas=${kodeklas.value}&tgl=${tanggal_pengganti.value}`);
    } else {
      field_jam.innerText = 'Silakan pilih tanggal setelah hari ini';
    }
  }

  function submitKls() {
    let jam = $('#jam_ke').val();
    const jml_jam = parseInt($('#jml_jam').text());

    if (jml_jam == jam.length) {
      let urut = true;
      let before = jam[0];
      for (let i = 1; i < jam.length; i++) {
        if (jam[i]-before != 1){
          urut = false;
          break;
        }
        else before = jam[i];
      }
      if (urut) submit_kelas.click();
      else message.innerText = 'Silakan pilih jam secara urut';
    } else {
      message.innerText = `Pilihlah sebanyak ${jml_jam} jam perkuliahan`;
    }
  }

  $(document).ready(function() {
    $('#tanggal_pengganti').datetimepicker({
      format: 'L'
    });
  });
</script>
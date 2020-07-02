<script type="text/javascript">
  const field_jam = document.getElementById("field_jam");
  const tanggal_pengganti = document.getElementById("tanggal_pengganti");
  const namaruang = document.getElementById("namaruang");
  const kodeklas = document.getElementById("kodeklas");
  const message = document.getElementById("message");
  const base_url = window.location.origin;

  function getJam() {
    field_jam.innerText = tanggal_pengganti.value + " " + namaruang.value;
    let today = new Date();
    let tgl_gnt = new Date(tanggal_pengganti.value);
    if (tgl_gnt > today) {
      var xmlhttp = new XMLHttpRequest();
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
    let jam_ke = document.getElementById("jam_ke");
    
  }

  $(document).ready(function() {
    $('#tanggal_pengganti').datetimepicker({
      format: 'L'
    });
  });
</script>
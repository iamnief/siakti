<script type="text/javascript">
  // The Calender
  $(document).ready(function() {
    $('#calendar').datepicker({
      onSelect: function(calendar) {
        console.log(calendar);
        window.location.href= "<?php echo site_url('absensi_mahasiswa/jadwal') ?>?tgl="+calendar;
      },
      dateFormat:'dd-mm-yy',
      format: 'L',
      inline: true
    });
  });
</script>
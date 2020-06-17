<script type="text/javascript">
  // The Calender
  $(document).ready(function() {
      $('#calendar').datepicker({
        onSelect: function(calendar){
          console.log(calendar);
        },
        format: 'L',
        inline: true
      });
    });
</script>